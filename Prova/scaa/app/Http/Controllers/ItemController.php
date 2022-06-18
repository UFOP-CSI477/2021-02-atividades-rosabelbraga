<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itens = Item::orderBy('id')->paginate(15);
        return view('item.index', ['item' => $itens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ( Auth::check() ){
            return view('item.create');    
        } else {
            session()->flash('mensagem-erro', 'Operação não permitida. Para realizar cadastro do item é necessário realizar login, ou se registrar na plataforma.' );
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
        Item::create($request->all());
        session()->flash('mensagem', 'Item cadastrada com sucesso!');
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('item.show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        if ( Auth::check() ){
            return view('item.edit', ['item' => $item]);    
        } else {
            session()->flash('mensagem-erro', 'Operação não permitida.' );
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $item->fill($request->all());
        if ($item->save()) {
            session()->flash('mensagem', 'Item atualizado com sucesso!');
            return redirect()->route('item.show', $item->id);
        } else {
            session()->flash('mensagem-erro', 'Erro na atualização do Item!');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        if ( Auth::check() ) {
            if($item->delete()) {
                session()->flash('mensagem', 'Item excluído com sucesso!');
                return redirect()->route('item.index');
            } else {
                session()->flash('mensagem-erro', 'Erro na exclusão do Item!');
                return back();
            }
        }
    }
}
