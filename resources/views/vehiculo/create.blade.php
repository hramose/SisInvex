@extends('layouts.main')

@section('index')
  <li class="active">Registrar vehiculo</li>
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
          <h3 class="box-title">Registrar vehiculo</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!!Form::open(['route'=>'vehiculo.store', 'method'=>'POST'])!!}
          <div class="box-body">                    
            <div class="row">  
              <div class="col-lg-8">
                <div class="form-group">
                  {!!Form::label('modelo', 'Modelo *')!!}
                  {!!Form::text('modelo', null, ['class'=>'form-control', 'placeholder'=>'...'])!!}                  
                </div>
              </div>
              <div class="col-lg-4">                      
                <div class="form-group">
                  {!!Form::label('ano', 'Año *')!!}
                  {!!Form::number('ano', null, ['class'=>'form-control', 'placeholder'=>'...', 'min'=>'1900', 'max'=>'2017', 'step'=>'1'])!!}
                </div>
              </div>
            </div>                   
            <div class="form-group">
              {!!Form::label('marca_vehiculo_id', 'Marca *')!!}
              <button type="button" class="btn btn-info btn-xs margin" data-toggle="modal" data-target="#agregarmarca">Agregar</button>
              {!!Form::select('marca_vehiculo_id', $marcas, null, ['class'=>'form-control'])!!}                         
            </div>   
            <div class="callout callout-info">
              <p>* Campos obligatorios</p>
            </div>       
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            {!!Form::submit('Registrar',['class'=>'btn btn-success'])!!}
          </div>                 
        {!!Form::close()!!}
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->	
@stop