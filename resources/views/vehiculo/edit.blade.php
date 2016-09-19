@extends('layouts.main')

@section('index')
  <li>{!!link_to_route('vehiculo.index', $title = 'Listado de vehiculos')!!}</li>
  <li class="active">Editar vehiculo</li>
@stop

@section('modals')
  @include('vehiculo.modals.create_marca_vehiculo')
@stop
  
@section('content')
  @include('alerts.errors')
  @include('alerts.success')
  <div class="row">
    <!-- left column -->
    <div class="col-lg-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar vehiculo</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!!Form::model($vehiculo, ['route'=>['vehiculo.update', $vehiculo], 'method'=>'PUT'])!!}
          <div class="box-body">
            <div class="form-group">
              {!!Form::label('id', 'ID')!!}
              {!!Form::text('id', $vehiculo->id, ['class'=>'form-control', 'placeholder'=>'...', 'disabled'])!!}   
            </div>                     
            <div class="row">  
              <div class="col-lg-8">
                <div class="form-group">                  
                  {!!Form::label('modelo', 'Modelo *')!!}
                  {!!Form::text('modelo', $vehiculo->modelo, ['class'=>'form-control', 'placeholder'=>'...'])!!}
                </div>
              </div>
              <div class="col-lg-4">                      
                <div class="form-group">
                  {!!Form::label('ano', 'Año *')!!}
                  {!!Form::number('ano', $vehiculo->ano, ['class'=>'form-control', 'placeholder'=>'...', 'min'=>'1900', 'max'=>'2017', 'step'=>'1'])!!}
                </div>
              </div>
            </div>                   
            <div class="form-group">
              {!!Form::label('marca_vehiculo_id', 'Marca *')!!}
              <button type="button" class="btn btn-info btn-xs margin" data-toggle="modal" data-target="#agregarmarca">Agregar</button>
              {!!Form::select('marca_vehiculo_id', $marcas, $vehiculo->marca_vehiculo_id, ['class'=>'form-control'])!!}                         
            </div> 
            <div class="callout callout-info">
              <p>* Campos obligatorios</p>
            </div>         
          </div>
          <!-- /.box-body -->
          <div class="box-footer">                   
            {!!Form::submit('Actualizar',['class'=>'btn btn-success'])!!}
          </div>
        {!!Form::close()!!}
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->  
@stop