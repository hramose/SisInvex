@extends('layouts.main')

@section('index')
  <li>{!!link_to_route('pedido.index', $title = 'Listado de pedidos')!!}</li>
  <li class="active">Editar pedido</li>
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
          <h3 class="box-title">Editar pedido</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!!Form::model($pedido, ['route'=>['pedido.update', $pedido], 'method'=>'PUT'])!!}
          <div class="box-body">
            <div class="form-group">
              {!!Form::label('id', 'ID')!!}
              {!!Form::text('id', $pedido->id, ['class'=>'form-control', 'placeholder'=>'...', 'disabled'])!!}   
            </div>                     
            <div class="row">  
              <div class="col-lg-8">
                <div class="form-group"> 
                  {!!Form::label('codigo', 'Codigo *')!!}
                  {!!Form::text('codigo', $pedido->codigo, ['class'=>'form-control', 'placeholder'=>'...'])!!}
                </div>
              </div>
              <div class="col-lg-4">                      
                <div class="form-group">
                  {!!Form::label('fecha', 'Fecha de pedido *')!!}
                  {!!Form::date('fecha', $pedido->fecha, ['class'=>'form-control'])!!}
                </div>
              </div>
            </div>                   
            <div class="form-group">
              {!!Form::label('proveedor_id', 'Proveedor *')!!}          
              {!!Form::select('proveedor_id', $proveedores  , $pedido->proveedor_id, ['class'=>'form-control'])!!}
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