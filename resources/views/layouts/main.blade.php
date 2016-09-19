<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SisInvex</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    {!!Html::style('bootstrap/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('font-awesome-4.6.3/css/font-awesome.min.css')!!}
    <!-- Ionicons -->
    {!!Html::style('ionicons-2.0.1/css/ionicons.min.css')!!}
    <!-- Theme style -->
    {!!Html::style('dist/css/AdminLTE.min.css')!!}
    <!-- AdminLTE skin -->
    {!!Html::style('dist/css/skins/skin-blue.min.css')!!}    

    @yield('stylesheets')

  </head>

  <body class="hold-transition skin-blue fixed sidebar-mini">  
    <div class="wrapper">      
      
      <!-- Main Header -->
      <header class="main-header">
        <!-- Logo -->
        <a href="{!!URL::to('/')!!}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SI</b>x</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SisI</b>nvex</span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>          
        </nav>
      </header>
      
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Options -->
            <li class="treeview">
              <a href="#"><i class="fa fa-wrench"></i> <span>Pieza</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>{!!link_to_route('pieza.create', $title = 'Registrar pieza')!!}</li>
                <li>{!!link_to_route('pieza.index', $title = 'Listado de piezas')!!}</li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-car"></i> <span>Vehiculo</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>{!!link_to_route('vehiculo.create', $title = 'Registrar vehiculo')!!}</li>
                <li>{!!link_to_route('vehiculo.index', $title = 'Listado de vehiculos')!!}</li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-industry"></i> <span>Proveedor</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">                
                <li>{!!link_to_route('proveedor.create', $title = 'Registrar proveedor')!!}</li>
                <li>{!!link_to_route('proveedor.index', $title = 'Listado de proveedores')!!}</li>
              </ul>
            </li>            
            <li class="treeview">
              <a href="#"><i class="fa fa-clipboard"></i> <span>Pedido</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>{!!link_to_route('pedido.create', $title = 'Registrar pedido')!!}</li>
                <li>{!!link_to_route('pedido.index', $title = 'Listado de pedidos')!!}</li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-building-o"></i> <span>Inventario</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">                
                <li>
                  <a href="#">Inventariar
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#">Por pedido</a></li>
                    <li><a href="#">Por pieza</a></li>
                  </ul>
                </li>
                <li><a href="#">Inventario general</a></li>
              </ul>
            </li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            SisInvex
            <small>Soluciones eficaces.</small>
          </h1>
          <ol class="breadcrumb">
            <li>{!!link_to('/', 'Home')!!}</li>

            @yield('index') 

          </ol>
        </section>

        @yield('modals')

        <!-- Main content -->
        <section class="content">

          @yield('content')

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          SisInvex 1.0.0
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Sistemas de Informacion I</a>.</strong> Todos los derechos reservados.
      </footer>     
    </div>
  <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    {!!Html::script('plugins/jQuery/jquery-2.2.3.min.js')!!}
    <!-- Bootstrap 3.3.6 -->
    {!!Html::script('bootstrap/js/bootstrap.min.js')!!}
    <!-- AdminLTE App -->
    {!!Html::script('dist/js/app.min.js')!!}
    <!-- SlimScroll -->
    {!!Html::script('plugins/slimScroll/jquery.slimscroll.min.js')!!}
    <!-- FastClick -->
    {!!Html::script('plugins/fastclick/fastclick.js')!!}
    
    @yield('scripts')

  </body>

</html>
