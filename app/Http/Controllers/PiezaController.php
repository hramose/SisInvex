<?php

namespace SisInvex\Http\Controllers;

use Illuminate\Http\Request;

use SisInvex\Http\Requests;
use SisInvex\Http\Requests\PiezaCreateRequest;
use SisInvex\Http\Requests\PiezaUpdateRequest;
use SisInvex\Http\Controllers\Controller;
use SisInvex\Pieza;
use SisInvex\Marca_Pieza;
use SisInvex\Categoria;
use SisInvex\Vehiculo;
use Session;
use Redirect;

class PiezaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piezas = Pieza::all();
        $vehiculos = Vehiculo::all()->lists('full_description', 'id');
        return view('pieza.list', compact('piezas', 'vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca_Pieza::lists('alias', 'id');
        $categorias = Categoria::lists('alias', 'id');
        return view('pieza.create', compact('marcas', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PiezaCreateRequest $request)
    {
        Pieza::create($request->all());
        Session::flash('message', 'Registro creado correctamente');
        return Redirect::to('/pieza');
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
        $pieza = Pieza::find($id);
        $marcas = Marca_Pieza::lists('alias', 'id');
        $categorias = Categoria::lists('alias', 'id');
        return view('pieza.edit', ['pieza'=>$pieza], compact('marcas', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PiezaUpdateRequest $request, $id)
    {
        $pieza = Pieza::find($id);
        $pieza->fill($request->all());
        $pieza->save(); 
        Session::flash('message', 'Registro actualizado correctamente');
        return Redirect::to('/pieza');
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
