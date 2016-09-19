@extends('layouts.main')

@section('stylesheets')
	<!-- DataTables -->
  {!!Html::style('plugins/datatables/dataTables.bootstrap.css')!!}
@stop

@section('index')
  <li class="active">Listado de proveedores</li>
@stop

@section('content')
  @include('alerts.success')
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Listado de proveedores</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="listado" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Alias</th>
                <th>Descripcion</th>
                <th>Accion</th>
              </tr>
            </thead>
            <tbody>
              @foreach($proveedores as $proveedor)  
                <tr>
                  <td>{{$proveedor->id}}</td>
                  <td>{{$proveedor->alias}}</td>
                  <td>{{$proveedor->descripcion}}</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info btn-flat">Accion</button>
                      <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>{!!link_to_route('proveedor.edit', $title = 'Editar', $parameters = $proveedor)!!}</li>
                      </ul>
                  </td> 
                </tr>                           
              @endforeach              
            </tbody>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Alias</th>
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