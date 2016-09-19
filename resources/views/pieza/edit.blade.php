@extends('layouts.main')

@section('index')
  <li>{!!link_to_route('pieza.index', $title = 'Listado de piezas')!!}</li>
  <li class="active">Editar pieza</li>
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
          <h3 class="box-title">Editar pieza</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!!Form::model($pieza, ['route'=>['pieza.update', $pieza], 'method'=>'PUT'])!!}
          <div class="box-body">
            <div class="form-group">
              {!!Form::label('id', 'ID')!!}
              {!!Form::text('id', $pieza->id, ['class'=>'form-control', 'placeholder'=>'...', 'disabled'])!!}              
            </div> 
            <div class="row">
              <div class="col-lg-8">
                <div class="form-group">                  
                  {!!Form::label('alias', 'Alias *')!!}
                  {!!Form::text('alias', $pieza->alias, ['class'=>'form-control', 'placeholder'=>'...'])!!}
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  {!!Form::label('codigo', 'Codigo')!!}
                  {!!Form::text('codigo', $pieza->codigo, ['class'=>'form-control', 'placeholder'=>'...'])!!}                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">                        
                <div class="form-group">
                  {!!Form::label('marca_pieza_id', 'Marca *')!!}
                  <button type="button" class="btn btn-info btn-xs margin" data-toggle="modal" data-target="#agregarmarca">Agregar</button>
                  {!!Form::select('marca_pieza_id', $marcas, $pieza->marca_pieza_id, ['class'=>'form-control'])!!}
                </div>                         
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  {!!Form::label('categoria_id', 'Categoria *')!!}
                  <button type="button" class="btn btn-info btn-xs margin" data-toggle="modal" data-target="#agregarcategoria">Agregar</button>
                  {!!Form::select('categoria_id', $categorias, $pieza->categoria_id, ['class'=>'form-control'])!!}
                </div>
              </div>
            </div>            
            <div class="form-group">
              {!!Form::label('descripcion', 'Descripcion')!!}
              {!!Form::textarea('descripcion', $pieza->descripcion, ['class'=>'form-control', 'placeholder'=>'...'])!!}
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