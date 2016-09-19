<?php

namespace SisInvex\Http\Controllers;

use Illuminate\Http\Request;

use SisInvex\Http\Requests;
use SisInvex\Http\Requests\PedidoCreateRequest;
use SisInvex\Http\Requests\PedidoUpdateRequest;
use SisInvex\Http\Controllers\Controller;
use SisInvex\Pedido;
use SisInvex\Proveedor;
use SisInvex\Pieza;
use Session;
use Redirect;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
        $piezas = Pieza::all()->lists('full_description', 'id');
        return view('pedido.list', compact('pedidos', 'piezas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::lists('alias', 'id');
        return view('pedido.create', compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PedidoCreateRequest $request)
    {
        Pedido::create($request->all());
        Session::flash('message', 'Registro creado correctamente');
        return Redirect::to('/pedido');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = Pedido::find($id);
        $proveedores = Proveedor::lists('alias', 'id');
        return view('pedido.edit', ['pedido'=>$pedido], compact('proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PedidoUpdateRequest $request, $id)
    {
        $pedido = Pedido::find($id);
        $pedido->fill($request->all());
        $pedido->save(); 
        Session::flash('message', 'Registro actualizado correctamente');
        return Redirect::to('/pedido');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
