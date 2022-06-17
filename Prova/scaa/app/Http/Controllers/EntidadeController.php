<?php

namespace App\Http\Controllers;

use App\Models\Entidade;
use Illuminate\Http\Request;

class EntidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entidades = Entidade::orderBy('nome')->get();
        return view('entidade.index', ['entidade' => $entidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ( Auth::check() ){
            return view('entidade.create');    
        } else {
            session()->flash('mensagem-erro', 'Operação não permitida. Para realizar cadastro do entidade é necessário realizar login, ou se registrar na plataforma.' );
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
        Entidade::create($request->all());
        session()->flash('mensagem', 'Entidade cadastrada com sucesso!');
        return redirect()->route('entidade.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function show(Entidade $entidade)
    {
        return view('entidade.show', ['entidade' => $entidade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Entidade $entidade)
    {
        if ( Auth::check() ){
            return view('entidade.edit', ['entidade' => $entidade]);    
        } else {
            session()->flash('mensagem-erro', 'Operação não permitida.' );
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entidade $entidade)
    {
        $entidade->fill($request->all());
        if ($entidade->save()) {
            session()->flash('mensagem', 'Entidade atualizada com sucesso!');
            return redirect()->route('entidade.show', $entidade->id);
        } else {
            session()->flash('mensagem-erro', 'Erro na atualização da Entidade!');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entidade $entidade)
    {
        if ( Auth::check() ) {
            if($entidade->delete()) {
                session()->flash('mensagem', 'Entidade excluído com sucesso!');
                return redirect()->route('entidade.index');
            } else {
                session()->flash('mensagem-erro', 'Erro na exclusão do Entidade!');
                return back();
            }
        }
    
    }
}
