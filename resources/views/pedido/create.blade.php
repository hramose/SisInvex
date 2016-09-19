@extends('layouts.main')

@section('index')
  <li class="active">Registrar pedido</li>
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
          <h3 class="box-title">Registrar pedido</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!!Form::open(['route'=>'pedido.store', 'method'=>'POST'])!!}
          <div class="box-body">                    
            <div class="row">  
              <div class="col-lg-8">
                <div class="form-group">
                  {!!Form::label('codigo', 'Codigo *')!!}
                  {!!Form::text('codigo', null, ['class'=>'form-control', 'placeholder'=>'...'])!!}                  
                </div>
              </div>
              <div class="col-lg-4">                      
                <div class="form-group">
                  {!!Form::label('fecha', 'Fecha de pedido *')!!}
                  {!!Form::date('fecha', \Carbon\Carbon::now(), ['class'=>'form-control'])!!}
                </div>
              </div>
            </div>                   
            <div class="form-group">
              {!!Form::label('proveedor_id', 'Proveedor *')!!}          
              {!!Form::select('proveedor_id', $proveedores  , null, ['class'=>'form-control'])!!}                       
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