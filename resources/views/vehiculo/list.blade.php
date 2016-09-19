@extends('layouts.main')

@section('stylesheets')
	<!-- DataTables -->
  {!!Html::style('plugins/datatables/dataTables.bootstrap.css')!!}
@stop

@section('index')
  <li class="active">Listado de vehiculos</li>
@stop

@section('content')
	@include('alerts.success')
	<div class="row">
	  <div class="col-xs-12">
	    <div class="box">
	      <div class="box-header">
	        <h3 class="box-title">Listado de vehiculos</h3>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <table id="listado" class="table table-bordered table-striped">
	          <thead>
	            <tr>
	              <th>ID</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Marca</th>                        
                <th>Accion</th>
	            </tr>
	          </thead>
	          <tbody>
							@foreach($vehiculos as $vehiculo)
	            	<tr>
		              <td>{{$vehiculo->id}}</td>
		              <td>{{$vehiculo->modelo}}</td>
		              <td>{{$vehiculo->ano}}</td>
		              <td>{{$vehiculo->marca_vehiculo->alias}}</td>
		              <td>
		                <div class="btn-group">
		                  <button type="button" class="btn btn-info btn-flat">Accion</button>
		                  <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">
		                    <span class="caret"></span>
		                    <span class="sr-only">Toggle Dropdown</span>
		                  </button>
		                  <ul class="dropdown-menu" role="menu">
		                    <li>{!!link_to_route('vehiculo.edit', $title = 'Editar', $parameters = $vehiculo)!!}</li>
		                  </ul>
		                </div>
		              </td>
	            	</tr>
	            @endforeach	            
	          </tbody>
	          <tfoot>
	            <tr>
	              <th>ID</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Marca</th>                        
                <th>Accion</th>
	            </tr>
	          </tfoot>
	        </table>
	      </div>
	      <!-- /.box-body -->
	    </div>
	    <!-- /.box -->
	  </div>
	  <!-- /.col -->
	</div>
	<!-- /.row -->
@stop

@section('scripts')
	<!-- DataTables -->
	{!!Html::script('plugins/datatables/jquery.dataTables.min.js')!!}
	{!!Html::script('plugins/datatables/dataTables.bootstrap.min.js')!!}
	<!-- page script -->
	{!!Html::script('plugins/datatables/iniciarlistado.js')!!}
@stop