@extends('layouts.main')

@section('stylesheets')
	<!-- DataTables -->
  {!!Html::style('plugins/datatables/dataTables.bootstrap.css')!!}
@stop

@section('index')
  <li class="active">Listado de pedidos</li>
@stop

@section('modals')
	@foreach($pedidos as $pedido)
		<!-- Modal -->
	  <div id="{!!"relacionpieza".$pedido->id!!}" class="modal fade" role="dialog">
	    <div class="modal-dialog modal-lg">
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>                
	        </div>
	        <div class="modal-body">
						<div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Añadir pieza</h3>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	            {!!Form::open(['route'=>'detalle_pedido.store', 'method'=>'POST'])!!}
		            <div class="box-body">
		            	<div class="form-group">
	                  {!!Form::label('pedido_id', 'Pedido', ['hidden'])!!}
	                	{!!Form::hidden('pedido_id', $pedido->id)!!}
	                </div>
		            	<div class="form-group">
	                  {!!Form::label('pieza_id', 'Pieza')!!}                 
	                  {!!Form::select('pieza_id', $piezas, null, ['class'=>'form-control'])!!}
	                </div>
		            </div>
	            	<!-- /.box-body -->
	            	<div class="box-footer">
			            {!!Form::submit('Añadir',['class'=>'btn btn-success'])!!}
			          </div>  
	            {!!Form::close()!!}
	          </div>

	          <div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Piezas dentro del pedido</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table class="table table-bordered table-striped">
									<thead>
	                  <tr>
	                    <th>ID</th>
	                    <th>Alias</th>
	                    <th>Codigo</th>
	                    <th>Marca</th>
	                    <th>Accion</th>
	                  </tr>
	                </thead>   
	                <tbody>	            
	                	@foreach($pedido->pieza as $pieza)	                 			             
			              	@if($pieza->pivot->deleted_at == NULL)
					            	<tr>
						              <td>{{$pieza->id}}</td>
						              <td>{{$pieza->alias}}</td>
						              <td>{{$pieza->codigo}}</td>
						              <td>{{$pieza->marca_pieza->alias}}</td>	
						              <td>
						              	{!!Form::open(['route'=>['detalle_pedido.destroy', $pieza->pivot->id], 'method'=>'DELETE'])!!}
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
	                    <th>Alias</th>
	                    <th>Codigo</th>
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
	@include('alerts.success')
	<div class="row">
	  <div class="col-xs-12">
	    <div class="box">
	      <div class="box-header">
	        <h3 class="box-title">Listado de pedidos</h3>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <table id="listado" class="table table-bordered table-striped">
	          <thead>
	            <tr>
	              <th>ID</th>
                <th>Codigo</th>
                <th>Fecha</th> 
                <th>Proveedor</th>                      
                <th>Accion</th>
	            </tr>
	          </thead>
	          <tbody>
							@foreach($pedidos as $pedido)
	            	<tr>
		              <td>{{$pedido->id}}</td>
		              <td>{{$pedido->codigo}}</td>
		              <td>{{$pedido->fecha}}</td>
		              <td>{{$pedido->proveedor->alias}}</td>
		              <td>
		                <div class="btn-group">
		                  <button type="button" class="btn btn-info btn-flat">Accion</button>
		                  <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">
		                    <span class="caret"></span>
		                    <span class="sr-only">Toggle Dropdown</span>
		                  </button>
		                  <ul class="dropdown-menu" role="menu">
		                  	<li><a type="button" data-toggle="modal" data-target="{!!"#relacionpieza".$pedido->id!!}">Añadir/Ver pieza</a></li>
		                    <li>{!!link_to_route('pedido.edit', $title = 'Editar', $parameters = $pedido)!!}</li>
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