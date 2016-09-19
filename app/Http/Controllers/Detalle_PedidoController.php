<?php

namespace SisInvex\Http\Controllers;

use Illuminate\Http\Request;

use SisInvex\Http\Requests;
use SisInvex\Http\Requests\Detalle_PedidoCreateRequest;
use SisInvex\Http\Controllers\Controller;
use SisInvex\Detalle_Pedido;
use Session;
use Redirect;

class Detalle_PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Detalle_PedidoCreateRequest $request)
    {
        Detalle_Pedido::create($request->all());
        Session::flash('message', 'Pieza agregada correctamente');
        return Redirect::back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle_pedido = Detalle_Pedido::find($id);
        $detalle_pedido->delete();
        Session::flash('message', 'Pieza eliminada correctamente');
        return Redirect::back();
    }
}
