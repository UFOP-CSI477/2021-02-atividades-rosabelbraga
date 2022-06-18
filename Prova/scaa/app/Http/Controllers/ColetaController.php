<?php

namespace App\Http\Controllers;

use App\Models\Coleta;
use App\Models\Item;
use App\Models\Entidade;
use Illuminate\Http\Request;

class ColetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coletas = Coleta::orderBy('id')->paginate(15);
        return view('coleta.index', ['coleta' => $coletas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ( Auth::check() ){
            return view('coleta.create');    
        } else {
            session()->flash('mensagem-erro', 'Operação não permitida. Para realizar cadastro da coleta é necessário realizar login, ou se registrar na plataforma.' );
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
        Coleta::create($request->all());
        session()->flash('mensagem', 'Coleta cadastrada com sucesso!');
        return redirect()->route('coleta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function show(Coleta $coleta)
    {
        return view('coleta.show', ['coleta' => $coleta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function edit(Coleta $coleta)
    {
        if ( Auth::check() ){
            return view('coleta.edit', ['coleta' => $coleta]);    
        } else {
            session()->flash('mensagem-erro', 'Operação não permitida.' );
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coleta $coleta)
    {
        $coleta->fill($request->all());
        if ($coleta->save()) {
            session()->flash('mensagem', 'Coleta atualizada com sucesso!');
            return redirect()->route('coleta.show', $coleta->id);
        } else {
            session()->flash('mensagem-erro', 'Erro na atualização da Coleta!');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coleta $coleta)
    {
        if ( Auth::check() ) {
            if($coleta->delete()) {
                session()->flash('mensagem', 'Coleta excluído com sucesso!');
                return redirect()->route('coleta.index');
            } else {
                session()->flash('mensagem-erro', 'Erro na exclusão do Coleta!');
                return back();
            }
        }
    }
}
