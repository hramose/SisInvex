@extends('layouts.main')

@section('index')	
  <li>{!!link_to_route('proveedor.index', $title = 'Listado de proveedores')!!}</li>
  <li class="active">Editar proveedor</li>
@stop

@section('content')
  @include('alerts.errors')
  <div class="row">
    <!-- left column -->
    <div class="col-lg-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar proveedor</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!!Form::model($proveedor, ['route'=>['proveedor.update', $proveedor], 'method'=>'PUT'])!!}
          <div class="box-body">
            <div class="form-group">
              {!!Form::label('id', 'ID')!!}
              {!!Form::text('id', $proveedor->id, ['class'=>'form-control', 'placeholder'=>'...', 'disabled'])!!}
            </div> 
            <div class="form-group">
              {!!Form::label('alias', 'Alias *')!!}
              {!!Form::text('alias', $proveedor->alias, ['class'=>'form-control', 'placeholder'=>'...'])!!}
            </div>
            <div class="form-group">
              {!!Form::label('descripcion', 'Descripcion')!!}
              {!!Form::textarea('descripcion', $proveedor->descripcion, ['class'=>'form-control', 'placeholder'=>'...'])!!}
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