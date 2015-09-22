<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'HQH Car Services')</title>
    
    {{-- Bootstrap --}}
    {{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
    {{-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --}}

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('assets/bower_components/bootstrap/dist/css/bootstrap.min.css', array('media' => 'screen')) }}
    <!-- MetisMenu CSS -->
    {{ HTML::style('assets/bower_components/metisMenu/dist/metisMenu.min.css', array('media' => 'screen')) }}
    <!-- Timeline CSS -->
    {{ HTML::style('assets/dist/css/timeline.css', array('media' => 'screen')) }}
    <!-- Custom CSS -->
    {{ HTML::style('assets/dist/css/sb-admin-2.css', array('media' => 'screen')) }}
    <!-- Morris Charts CSS -->
    {{ HTML::style('assets/bower_components/morrisjs/morris.css', array('media' => 'screen')) }}
    <!-- Custom Fonts -->
    {{ HTML::style('assets/bower_components/font-awesome/css/font-awesome.min.css', array('media' => 'screen')) }}
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">            
            <div class="navbar-header">                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                       
                <a class="navbar-brand"><img src="/img/hqh.png" style="width:60px;height:25px;"></a>
                <!--a class="navbar-brand"></a-->                
                <a class="navbar-brand">
                    <p class="text-info" style="font-size:15px">
                    </p> 
                </a>                
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">            
                <li class="dropdown">
                    <a href="logout"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                </li>
                </li-->
            </ul>
            <!-- /.navbar-top-links -->    
            <div class="navbar-default sidebar" role="navigation">               
                <div class="sidebar-nav navbar-collapse">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bienvenido
                        </div>           
                        <a class="list-group-item">
                            <i class="fa fa-user"></i> Julio Cesar Delgado
                            <span class="pull-right text-muted small">
                            </span>
                        </a>
                        <a class="list-group-item">
                            <i class="fa fa-building-o"></i> Taller Lomas
                            <span class="pull-right text-muted small">
                            </span>
                        </a>
                    </div>                                                                              
                    <ul class="nav" id="side-menu">                       
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Operadores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="operators_list">Listado</a>
                                </li>                                                        
                            </ul>
                            <!-- /.nav-members-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-car fa-fw"></i> Veh&iacute;culos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cars_workshop">En Taller</a>
                                </li>                            
                            </ul>
                            <!-- /.nav-memberships-level -->
                        </li>    
                        <li>
                            <a href="#"><i class="fa fa-history fa-fw"></i> Historial<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="records">Listado</a>
                                </li>                               
                            </ul>
                            <!-- /.nav-memberships-level -->
                        </li>                                 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
    
        @yield('content')        
        
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->    

    
    {{-- Wrap all page content here --}}	    
    {{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
    <script src="//code.jquery.com/jquery.js"></script> 
    
    @yield('scripts')
    {{-- Include all compiled plugins (below), or include individual files as needed --}}
    {{ HTML::script('assets/js/jquery.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    <!-- jQuery -->
    {{ HTML::script('assets/bower_components/jquery/dist/jquery.min.js') }}
    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}
    <!-- Metis Menu Plugin JavaScript -->
    {{ HTML::script('assets/bower_components/metisMenu/dist/metisMenu.min.js') }}
    <!-- Morris Charts JavaScript -->
    {{ HTML::script('assets/bower_components/raphael/raphael-min.js') }}   
    {{ HTML::script('assets/bower_components/morrisjs/morris.min.js') }}
    <!-- DataTables JavaScript -->
    {{ HTML::script('assets/bower_components/datatables/media/js/jquery.dataTables.min.js') }}
    {{ HTML::script('assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}  
    <!-- Custom Theme JavaScript -->
    {{ HTML::script('assets/dist/js/sb-admin-2.js') }}

<script>
$(document).ready(
);
</script>

</body>
</html>