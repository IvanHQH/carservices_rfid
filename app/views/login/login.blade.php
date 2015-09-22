<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Por favor inicia sesión</h3>
                    </div>
                    <div class="panel-body">
                        {{Form::open(array('url' => 'post_login','method'=>'post'))}}
                        <fieldset>
                            <div class="form-group">
                                <input id="login-username" type="text" class="form-control" 
                                       name="nick_name" value="" placeholder="Nombre">                                        
                            </div>
                            <div class="form-group">
                                <input id="login-password" type="password" class="form-control" 
                                       name="password" placeholder="Contraseña" value="" >
                            </div>
                            <div class="form-group">
                                <input id="nameClient" type="text" class="form-control" 
                                       name="name_client" placeholder="Nombre Cliente" value="" >                                              
                            </div>                                                                                                    
                            <button id="btn-login" type="btn btn-success" type="submit"
                                class="btn btn-lg btn-success btn-block">Iniciar Sesión</button>       
                        </fieldset>    
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

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

</body>

</html>
