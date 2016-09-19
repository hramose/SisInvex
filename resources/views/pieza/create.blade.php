@extends('layouts.main')

@section('index')
  <li class="active">Registrar pieza</li>
@stop

@section('modals')
  @include('pieza.modals.create_marca_pieza')
  @include('pieza.modals.create_categoria')    	
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
          <h3 class="box-title">Registrar pieza</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!!Form::open(['route'=>'pieza.store', 'method'=>'POST'])!!}
          <div class="box-body">
            <div class="row">
              <div class="col-lg-8">              
                <div class="form-group">
                  {!!Form::label('alias', 'Alias *')!!}
                  {!!Form::text('alias', null, ['class'=>'form-control', 'placeholder'=>'...'])!!}
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  {!!Form::label('codigo', 'Codigo')!!}
                  {!!Form::text('codigo', null, ['class'=>'form-control', 'placeholder'=>'...'])!!}
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  {!!Form::label('marca_pieza_id', 'Marca *')!!}
                  <button type="button" class="btn btn-info btn-xs margin" data-toggle="modal" data-target="#agregarmarca">Agregar</button>
                  {!!Form::select('marca_pieza_id', $marcas, null, ['class'=>'form-control'])!!}                
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  {!!Form::label('categoria_id', 'Categoria *')!!}
                  <button type="button" class="btn btn-info btn-xs margin" data-toggle="modal" data-target="#agregarcategoria">Agregar</button>
                  {!!Form::select('categoria_id', $categorias, null, ['class'=>'form-control'])!!}
                </div>
              </div>
            </div>            
            <div class="form-group">
              {!!Form::label('descripcion', 'Descripcion')!!}
              {!!Form::textarea('descripcion', null, ['class'=>'form-control', 'placeholder'=>'...'])!!}
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