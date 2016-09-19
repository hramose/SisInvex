@extends('layouts.main')

@section('index')
  <li class="active">Registrar proveedor</li>
@stop

@section('content')
	@include('alerts.errors')
	<div class="row">
	  <!-- left column -->
	  <div class="col-lg-12">
	    <!-- general form elements -->
	    <div class="box box-primary">
	      <div class="box-header with-border">
	        <h3 class="box-title">Registrar proveedor</h3>
	      </div>
	      <!-- /.box-header -->
	      <!-- form start -->				
				{!!Form::open(['route'=>'proveedor.store', 'method'=>'POST'])!!}
					<div class="box-body">
						<div class="form-group">
							{!!Form::label('alias', 'Alias *')!!}
							{!!Form::text('alias', null, ['class'=>'form-control', 'placeholder'=>'...'])!!}
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