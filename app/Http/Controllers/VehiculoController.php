<?php

namespace SisInvex\Http\Controllers;

use Illuminate\Http\Request;

use SisInvex\Http\Requests;
use SisInvex\Http\Requests\VehiculoCreateRequest;
use SisInvex\Http\Requests\VehiculoUpdateRequest;
use SisInvex\Http\Controllers\Controller;
use SisInvex\Vehiculo;
use SisInvex\Marca_Vehiculo;
use Session;
use Redirect;


class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculo.list', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca_Vehiculo::lists('alias', 'id');
        return view('vehiculo.create', compact('marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculoCreateRequest $request)
    {
        Vehiculo::create($request->all());
        Session::flash('message', 'Registro creado correctamente');
        return Redirect::to('/vehiculo');
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
        $vehiculo = Vehiculo::find($id);
        $marcas = Marca_Vehiculo::lists('alias', 'id');
        return view('vehiculo.edit', ['vehiculo'=>$vehiculo], compact('marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehiculoUpdateRequest $request, $id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->fill($request->all());
        $vehiculo->save(); 
        Session::flash('message', 'Registro actualizado correctamente');
        return Redirect::to('/vehiculo');
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
