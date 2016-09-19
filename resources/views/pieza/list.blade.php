@extends('layouts.main')

@section('stylesheets')
	<!-- DataTables -->
  {!!Html::style('plugins/datatables/dataTables.bootstrap.css')!!}
@stop

@section('index')
  <li class="active">Listado de piezas</li>
@stop

@section('modals')
	@foreach($piezas as $pieza)
		<!-- Modal -->
	  <div id="{!!"relacionvehiculo".$pieza->id!!}" class="modal fade" role="dialog">
	    <div class="modal-dialog modal-lg">
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>                
	        </div>
	        <div class="modal-body">
						<div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Relacionar vehiculo</h3>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	            {!!Form::open(['route'=>'pieza_vehiculo.store', 'method'=>'POST'])!!}
		            <div class="box-body">
		            	<div class="form-group">
	                  {!!Form::label('pieza_id', 'Pieza', ['hidden'])!!}
	                	{!!Form::hidden('pieza_id', $pieza->id)!!}
	                </div>
		            	<div class="form-group">
	                  {!!Form::label('vehiculo_id', 'Vehiculo')!!}                 
	                  {!!Form::select('vehiculo_id', $vehiculos, null, ['class'=>'form-control'])!!}
	                </div>
		            </div>
	            	<!-- /.box-body -->
	            	<div class="box-footer">
			            {!!Form::submit('Relacionar',['class'=>'btn btn-success'])!!}
			          </div>  
	            {!!Form::close()!!}
	          </div>

	          <div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Listado de vehiculos</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table class="table table-bordered table-striped">
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
	                	@foreach($pieza->vehiculo as $vehiculo)	                 			             
			              	@if($vehiculo->pivot->deleted_at == NULL)
					            	<tr>
						              <td>{{$vehiculo->id}}</td>
						              <td>{{$vehiculo->modelo}}</td>
						              <td>{{$vehiculo->ano}}</td>
						              <td>{{$vehiculo->marca_vehiculo->alias}}</td>	
						              <td>
						              	{!!Form::open(['route'=>['pieza_vehiculo.destroy', $vehiculo->pivot->id], 'method'=>'DELETE'])!!}
															{!!Form::submit('Eliminar',['class'=>'btn btn-danger btn-flat'])!!}
														{!!Form::close()!!}
						              </td>				              
					            	</tr>
					            @endif
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
	        </div>              
	      </div>
	    </div>
	  </div>
	  <!-- Modal -->
	@endforeach
@stop

@section('content')
	@include('alerts.errors')
	@include('alerts.success')
	<div class="row">
	  <div class="col-xs-12">
	    <div class="box">
	      <div class="box-header">
	        <h3 class="box-title">Listado de piezas</h3>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <table id="listado" class="table table-bordered table-striped">
	          <thead>
	            <tr>
	              <th>ID</th>
	              <th>Alias</th>
	              <th>Codigo</th>
	              <th>Marca</th>
	              <th>Categoria</th>
	              <th>Descripcion</th>
	              <th>Accion</th>
	            </tr>
	          </thead>
	          <tbody>
							@foreach($piezas as $pieza)
	            	<tr>
		              <td>{{$pieza->id}}</td>
		              <td>{{$pieza->alias}}</td>
		              <td>{{$pieza->codigo}}</td>
		              <td>{{$pieza->marca_pieza->alias}}</td>
		              <td>{{$pieza->categoria->alias}}</td>
		              <td>{{$pieza->descripcion}}</td>
		              <td>
		                <div class="btn-group">
		                  <button type="button" class="btn btn-info btn-flat">Accion</button>
		                  <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">
		                    <span class="caret"></span>
		                    <span class="sr-only">Toggle Dropdown</span>
		                  </button>
		                  <ul class="dropdown-menu" role="menu">
		                    <li><a type="button" data-toggle="modal" data-target="{!!"#relacionvehiculo".$pieza->id!!}">Relacionar/Ver vehiculo</a></li>
		                    <li>{!!link_to_route('pieza.edit', $title = 'Editar', $parameters = $pieza)!!}</li>
		                  </ul>
		                </div>
		              </td>
	            	</tr>
	            @endforeach	            
	          </tbody>
	          <tfoot>
	            <tr>
	              <th>ID</th>
	              <th>Alias</th>
	              <th>Codigo</th>
	              <th>Marca</th>
	              <th>Categoria</th>
	              <th>Descripcion</th>
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