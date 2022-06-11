<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projetos = Projeto::orderBy('nome_projeto')->paginate(15);
        return view('projetos.index', ['projetos' => $projetos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //method='post' action='store'
    {
        if ( Auth::check() ){
            return view('projetos.create');    
        } else {
            session()->flash('mensagem-erro', 'Operação não permitida. Para realizar cadastro do projeto é necessário realizar login, ou se registrar na plataforma.' );
            return redirect()->route('login');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Projeto::create($request->all());
        session()->flash('mensagem', 'Projeto cadastrado com sucesso!');
        return redirect()->route('projetos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto)
    {
        return view('projetos.show', ['projeto' => $projeto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto)
    {
        if ( Auth::check() ){
            return view('projetos.edit', ['projeto' => $projeto]);    
        } else {
            session()->flash('mensagem', 'Operação não permitida.' );
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto)
    {
        $projeto->fill($request->all());
        if ($projeto->save()) {
            session()->flash('mensagem', 'Projeto atualizado com sucesso!');
            return redirect()->route('projetos.show', $projeto->id);
        } else {
            session()->flash('mensagem-erro', 'Erro na atualização do Projeto!');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto)
    {
        if($projeto->delete()) {
            session()->flash('mensagem', 'Projeto excluído com sucesso!');
            return redirect()->route('projetos.index');
        } else {
            session()->flash('mensagem-erro', 'Erro na exclusão do Projeto!');
            return back();
        }
    }
}
