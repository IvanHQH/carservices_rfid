@extends ('base_templates.BaseLayout')

@section ('content')    
<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">            
            @if(isset($version))
                @if($version == 'record')   
                    Historial
                @elseif($version == 'workshop')
                    Veh&iacute;culos en taller
                @endif                
            @endif                                   
        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- row-content -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <!-- /.panel-heading -->
            <div class="panel-heading">
                <div class="row">                          
                    <div class="col-sm-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-circle-thin fa-1x"></i></div>
                                    <div class="col-xs-9 text-right">                                                          
                                        <font size="2">No realizado</font></div>                                                
                                </div>
                            </div>
                        </div>
                    </div>                          
                    <div class="col-sm-2">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-refresh fa-1x"></i></div>
                                    <div class="col-xs-9 text-right">
                                        En proceso</div>
                                </div>
                            </div>
                        </div>
                    </div>                                                                               
                    <div class="col-sm-2">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-check fa-1x"></i></div>
                                    <div class="col-xs-9 text-right">
                                        Aceptado</div>
                                </div>
                            </div>
                        </div>
                    </div>                     
                    <div class="col-sm-2">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                            <i class="fa fa-times fa-1x"></i></div>
                                    <div class="col-xs-9 text-right">
                                        Rechazado</div>
                                </div>
                            </div>
                        </div>
                    </div>                                             
                    <div class="col-sm-3">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-history fa-1x"></i></div>
                                    <div class="col-xs-9 text-right">                                                          
                                       <font size="2">Esperando autorizaci&oacute;n</font></div>
                                </div>
                            </div>
                        </div>
                    </div>                                        
                </div>             
            </div>
            <!-- panel-body -->
            <div class="panel-body">                
                @if(isset($version))
                    @if($version == 'record')
                        <div class="well">                    
                            <div class="row">                 
                                <div class="col-md-2">
                                  <div class="input-group">   
                                    <label for="date_ini">Entre fechas</label>                                                                
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->                           
                                <div class="col-md-2">
                                  <div class="input-group">   
                                    <input type="date" class="form-control" id="date_init">                                                                 
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->    
                                <div class="col-md-1">-</div>
                                <div class="col-md-3">
                                  <div class="input-group">   
                                    <input type="date" class="form-control" id="date_end">   
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->                         
                                <div class="col-md-1">
                                    <div class="input-group">   
                                        <button type="button" class="btn btn-outline btn-primary" 
                                                id="show_between_dates">
                                            Mostrar
                                        </button>             
                                    </div><!-- /input-group -->                        
                                </div>
                            </div><!-- /.col-lg-6 -->                   
                        </div><!-- /.row -->                                          
                    @endif                
                @endif                
                
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">                     
                        <thead>
                            <!-- headers-columns -->
                            <tr role="row">
                                <th>Id</th>
                                <th>Veh&iacute;culo</th>
                                <th>Propietario</th>
                                <th>Status</th>                                         
                            </tr>
                            <!-- /.headers-columns -->
                        </thead>
                        <tbody>                            
                        <tr class="gradeA odd" role="row">                              
                            <td class="sorting_1">1</td>                                
                            <td class="sorting_1">
                                <span class="car-id2" style="display:none">2</span>                                
                                <a style="cursor:pointer" class="car-model">Chevrolet Aveo 2012</a></td>
                            <td class="sorting_1">
                                <span class="car-id2" style="display:none">2</span> 
                                <a style="cursor:pointer" class="car-owner">HQH</a></td>
                            <td style="text-align: center; vertical-align: middle; ">
                                <span class="car-id" style="display:none">
                                    1
                                </span>                                          
                                <button type="button" class="btn btn-default btn-order">O</button>                 
                                <button type="button" class="btn btn-primary btn-diagnostic">D</button>
                                <button type="button" class="btn btn-success btn-quote">C</button>
                                <button type="button" class="btn btn-warning btn-s">S</button>
                            </td>                                
                        </tr>                                                          
                        @if(isset($cars))    
                        @foreach($cars as $car)      
                            <tr class="gradeA odd" role="row">         
                                <td class="sorting_1">{{$car->id}}</td>                                    
                                <td class="sorting_1">{{$car->brand}}&nbsp;{{$car->model}}&nbsp;{{$car->year}}</td>   
                                <td class="sorting_1">{{$car->owner_name}}</td>   
                                <td style="text-align: center; vertical-align: middle; ">
                                    <span class="car-id" style="display:none">
                                        {{$car->id}}
                                    </span>                                          
                                <button type="button" class="btn btn-default btn-order">O</button>                 
                                <button type="button" class="btn btn-primary btn-diagnostic">D</button>
                                <button type="button" class="btn btn-success btn-quote">C</button>
                                <button type="button" class="btn btn-warning btn-s">S</button>                                              
                                </td>                                
                            </tr>  
                        @endforeach   
                        @endif                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
    </div-->        
</div>
<!-- /.row-content -->        
</div>

<div class="modal fade" id="service_orders_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="header_modal">Orden de servicio</h4>
            </div>
            <div id='content_service_order' class="modal-body">        
            <table>
              <tr >      
                  <td>                  
                    <table class="table table-bordered table-hover table-striped">
                      <tr>      
                        <td><label>Usuario que la realizó</label></td>
                        <td><label id='service_realize_user_name' class="text-success">Ivan Arellano</label></td></tr>
                      <tr>
                        <td><label>Fecha cierre</label></div></td>
                        <td><label id='service_close_date' class="text-success">02-Mayo-2015</label></td></tr>
                      <tr>
                        <td><label>Fecha aceptación</label></div></td>
                        <td><label id='acceptance_date' class="text-success">02-Mayo-2015</label></td></tr>     
                      <tr>
                        <td><label>Status</label></div></td>
                        <td><label id='service_status' class="text-success">Aceptado</label></td></tr>        
                      <tr>
                        <td><label>Dirección de entrega</label></div></td>
                        <td><label id='service_delivery_address' class="text-success">Sierra de minas #132</label></td></tr>    
                      <tr>
                        <td><label></label></div></td>
                        <td><label class="text-success"></label></td></tr>                      
                    </table>                                       
                  </td>
                  <td>&nbsp;&nbsp;&nbsp;</td>
                  <td>
                    <table class="table table-bordered table-hover table-striped">
                      <tr>      
                        <td><label>Nivel de gasolina</label></td>
                        <td><label id='service_fuel_level' class="text-success">2/4</label></td></tr>
                      <tr>
                        <td><label>Líquido de frenos</label></div></td>
                        <td><label id='service_brake_fluid' class="text-success">A nivel</label></td></tr>
                      <tr>
                        <td><label>Anticongelante</label></div></td>
                        <td><label id='service_antifreeze' class="text-success">A nivel</label></td></tr>     
                      <tr>
                        <td><label>liquido de dirección</label></div></td>
                        <td><label id='service_steering_fluid' class="text-success">A nivel</label></td></tr>        
                      <tr>
                        <td><label>limpiaparabrisas</label></div></td>
                        <td><label id='service_wiper' class="text-success">A nivel</label></td></tr>         
                      <tr>
                        <td><label>Aceite</label></div></td>
                        <td><label id='service_oil' class="text-success">A nivel</label></td></tr>              
                    </table>                                        
                  </td> 
              </tr>          
            </table>                               

            <div class="form-group">
                <button id='view_photos' type="button" class="btn btn-outline btn-primary btn-lg btn-block">Ver fotos</button>
            </div>           

            <div class="form-group">
                <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Volver a realizar</button>
            </div>           

            <div class="form-group">
                <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Cancelar definitivamente</button>
            </div>                   

            </div>
        </div>
    </div>
</div>    

<div class="modal fade" id="diagnostic_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="header_modal">Diagnóstico</h4>
            </div>
            <div class="modal-body">        
               
                <table class="table table-bordered table-hover table-striped">
                  <tr>      
                    <td><label>Usuario que la realizó</label></td>
                    <td><label id='diagnostic_realize_user_name' class="text-success">Ivan Arellano</label></td></tr>
                  <tr>
                    <td><label>Fecha</label></div></td>
                    <td><label id='diagnostic_date' class="text-success">02-Mayo-2015</label></td></tr>
                  <tr>
                    <td><label>Status</label></div></td>
                    <td><label id='diagnostic_status' class="text-success">Aceptado</label></td></tr>                    
                </table>                                       

                <table class="table table-bordered table-hover table-striped">
                  <tr>      
                    <td><label>Llantas</label></td>
                    <td><label id='diagnostic_tire' class="text-success">B</label></td></tr>
                  <tr>
                    <td><label>Amortiguadores Del.</label></div></td>
                    <td><label id='diagnostic_dampers_front' accesskey="" class="text-success">B</label></td></tr>
                  <tr>
                    <td><label>Frenos Del.</label></div></td>
                    <td><label id='diagnostic_front_brakes' class="text-success">B</label></td></tr>     
                  <tr>
                    <td><label>Suspensión</label></div></td>
                    <td><label id='diagnostic_suspension' class="text-success">B</label></td></tr>        
                  <tr>
                    <td><label>Bandas</label></div></td>
                    <td><label id='diagnostic_bands' class="text-success">B</label></td></tr>         
                  <tr>
                    <td><label>Amortiguadores Trac.</label></div></td>
                    <td><label id='diagnostic_dampers_rear' class="text-success">B</label></td></tr>              
                  <tr>
                    <td><label>Frenos Trac.</label></div></td>
                    <td><label id='diagnostic_breaks_rear' class="text-success">B</label></td></tr>   
                </table>                                                                      
            <div class="form-group">
                <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Volver a realizar</button>
            </div>           

            <div class="form-group">
                <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Cancelar definitivamente</button>
            </div>                            

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="quote_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="header_modal">Cotización</h4>
            </div>
            <div class="modal-body">                                        
                <div class="form-group">
                    <label>Fecha  :&nbsp;&nbsp;&nbsp;</label>
                    <label id='quote_date' class="text-success">29 - Mayo - 2015</label>
                </div>                                            
                <div class="form-group">
                    <label>Status  :&nbsp;&nbsp;&nbsp;</label>
                    <label id='quote_status' class="text-success">En proceso</label> 
                </div>                               
                <div class="form-group">
                    <button id="btn-add-quote" type="button" class="btn btn-outline btn-primary">Agregar</button>
                </div>                      
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Cant.</th>
                            <th>Decripción</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>     
                    <tbody id="tbl-body">
                        <tr>      
                          <td>1</td>
                          <td>desc</td>
                          <td>$300.00</td></tr>
                        <tr>      
                          <td>1</td>
                          <td>desc</td>
                          <td>$300.00</td></tr>
                        <tr>      
                          <td>1</td>
                          <td>desc</td>
                          <td>$300.00</td></tr>                         
                    </tbody>                                
                </table>                                                                      

                <table class="table">
                    <tr>      
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                      <td><label>Subtotal</label></td>
                      <td><label id='quote_subtotal'>$0.00</label></td></tr>          
                    <tr>      
                      <td></td>
                      <td><label>I.V.A</label></td>
                      <td><label id='quote_iva'>$0.00</label></td></tr> 
                    <tr>      
                      <td></td>
                      <td><label>Total</label></td>
                      <td><label id='quote_total'>$0.00</label></td></tr>                     
                </table>                
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="car_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="header_modal">Vehículo</h4>
            </div>
            <div class="modal-body">                   
                <table>
                    <tr>        
                        <td>
                            <img  src='/img/photos_cars/vehiculo.jpg' width='270' height='170'>                                 
                        </td>                  
                        <td>
                            <table class="table">
                              <tr>      
                                <td><label>Marca</label></td>
                                <td><label class="text-success">Chevrolet</label></td></tr>
                              <tr>
                                <td><label>Modelo</label></div></td>
                                <td><label class="text-success">Aveo</label></td></tr>
                              <tr>
                                <td><label>Año</label></div></td>
                                <td><label class="text-success">2010</label></td></tr>    
                              <tr>
                                <td><label>Color</label></div></td>
                                <td><label class="text-success">Plata</label></td></tr> 
                              <tr>
                                <td><label>Número de serie</label></div></td>
                                <td><label class="text-success">Plata</label></td></tr> 
                            </table>                              
                        </td>                        
                    </tr>                    
                </table>                                                                                                                                                                        
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="car_owner" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="header_modal">Propietario</h4>
            </div>
            <div class="modal-body">                                         
                <table class="table">
                  <tr>      
                    <td><label>Nombre propietario</label></td>
                    <td><label class="text-success">Ivan Arellano</label></td></tr>
                  <tr>
                    <td><label>Dirección</label></div></td>
                    <td><label class="text-success">Sierra de minas #132</label></td></tr>
                  <tr>
                    <td><label>Télefono</label></div></td>
                    <td><label class="text-success">4441788404</label></td></tr>    
                  <tr>
                    <td><label>Correo</label></div></td>
                    <td><label class="text-success">ivan.arellano@grupohqh.com</label></td></tr> 
                  <tr>
                    <td><label>RFC</label></div></td>
                    <td><label class="text-success">RFCIVANARELLNO</label></td></tr> 
                </table>                                                                                                                                                                                                                      
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="carousel_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">                
                <h4 class="modal-title" id="header_modal">Fotos</h4>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                            Regresar
                    </button> 
            </div>
            <div class="modal-body">                                         
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="/img/photos_cars/int_1.jpg" alt="Chania">
                        <div class="carousel-caption">
                          <h3>Interior 1</h3>
                          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                        </div>                        
                      </div>

                      <div class="item">
                        <img src="/img/photos_cars/int_2.jpg" alt="Chania">
                        <div class="carousel-caption">
                          <h3>Interior 2</h3>
                          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                        </div>                         
                      </div>

                      <div class="item">
                        <img src="/img/photos_cars/int_3.jpg" alt="Flower">
                        <div class="carousel-caption">
                          <h3>Interior 3</h3>
                          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                        </div>                         
                      </div>

                      <div class="item">
                        <img src="/img/photos_cars/int_4.jpg" alt="Flower">
                        <div class="carousel-caption">
                          <h3>Interior 4</h3>
                          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                        </div>                         
                      </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>                                      
            </div>
        </div>
    </div>
</div>

</div>
@stop

@section('scripts')
<script>
$(document).ready(function() {        

    $('#dataTables-example').dataTable( {
        paging: true,
        searching: true,    
        responsive: true
    } );  

/*
 |------------------------------------------------------------------------
 | Service Order
 |------------------------------------------------------------------------
*/ 

    $('.btn-order').on('click',function(e){
        var o = $(this);
        id = o.parents('td:first').find('span.car-id').text();   
        fillServiceOrder(id);
        $('#service_orders_modal').modal();
    });

    $('#view_photos').on('click',function(e){
        $('#carousel_modal').modal();
    });

    function fillServiceOrder(id) {
        $.ajax({
            type: 'GET',
            url: '{{ URL::to('/service_order') }}' + '/' + id,
            dataType: 'json',
            success: function(d) {
                $("#service_realize_user_name").val(d.service.realize_user_name);
                $("#service_close_date").val(d.service.close_date);
                $("#service_acceptance_date").val(d.service.acceptance_date);
                $("#service_status").val(d.service.status);
                $("#service_delivery_address").val(d.service.delivery_address);
                $("#service_fuel_level").val(d.service.fuel_level);
                $("#service_brake_fluid").val(d.service.brake_fluid);
                $("#service_antifreeze").val(d.service.antifreeze);
                $("#service_steering_fluid").val(d.service.steering_fluid);
                $("#service_wiper").val(d.service.wiper);
                $("#service_oil").val(d.service.oil);
            }
        });
    }   

/*
 |------------------------------------------------------------------------
 | Diagnostic
 |------------------------------------------------------------------------
*/ 

    $('.btn-diagnostic').on('click',function(e){
        var o = $(this);
        id = o.parents('td:first').find('span.car-id').text();   
        fillDiagnostic(id);
        $('#diagnostic_modal').modal();
    });
    
    function fillDiagnostic(id) {
        $.ajax({
            type: 'GET',
            url: '{{ URL::to('/diagnostic') }}' + '/' + id,
            dataType: 'json',
            success: function(d) {
                $("#diagnostic_realize_user_name").val(d.diagnostic.realize_user_name);
                $("#diagnostic_date").val(d.diagnostic.date);
                $("#diagnostic_status").val(d.diagnostic.status);
                $("#diagnostic_tire").val(d.diagnostic.tire);
                $("#diagnostic_dampers_front").val(d.diagnostic.dampers_front);
                $("#diagnostic_front_brakes").val(d.diagnostic.front_brakes);
                $("#diagnostic_suspension").val(d.diagnostic.suspension);
                $("#diagnostic_bands").val(d.diagnostic.bands);
                $("#diagnostic_dampers_rear").val(d.diagnostic.dampers_rear);                
                $("#diagnostic_breaks_rear").val(d.diagnostic.breaks_rear);                         
            }
        });
    }       
    
/*
 |------------------------------------------------------------------------
 | Quote
 |------------------------------------------------------------------------
*/     
    
    $('.btn-quote').on('click',function(e){
        var o = $(this);
        id = o.parents('td:first').find('span.car-id').text();  
        //alert(id);
        fillQuote(id);
        $('#quote_modal').modal();
    });
    
    $('#btn-add-quote').on('click',function(e){
        var o = $(this);
        id = o.parents('td:first').find('span.car-id').text();       
        var htmlBody = $('#tbl-body');
        var tr = "<tr><td>1</td><td>desc</td><td>$300.00</td></tr>";
        htmlBody.append(tr);
        $('#tbl-body').load(); 
    });      
    
    function fillQuote(id) {
        $.ajax({
            type: 'GET',
            url: '{{ URL::to('/quote') }}' + '/' + id,
            dataType: 'json',
            success: function(d) {
                $("#quote_date").val(d.quote.quote_date);                        
                $("#quote_status").val(d.quote.quote_status);                                        
                $("#quote_subtotal").val(d.quote.quote_subtotal);                        
                $("#quote_iva").val(d.quote.quote_iva);                                        
                $("#quote_total").val(d.quote.quote_total);   
                
                var tblQuote = $('#tbl_body');
                var quote = d.quote.detail;
                for (i = 0; i < quote.length; i++){
                    tblQuote.append("<tr>"+
                        "<td>"+quote[i].description+"</td>"+
                        "<td>"+quote[i].amount+"</td></tr>");
                }               
                            
            }
        });
    }           
    
/*
 |------------------------------------------------------------------------
 | S
 |------------------------------------------------------------------------
*/     
        
    $('.btn-s').on('click',function(e){
        var o = $(this);
        id = o.parents('td:first').find('span.car-id').text();         
        alert(id);
    });            
    
/*
 |------------------------------------------------------------------------
 | Car model
 |------------------------------------------------------------------------
*/      
    
    $('.car-model').on('click',function(e){
        var o = $(this);
        id = o.parents('td:first').find('span.car-id2').text();         
        //alert(id);        
        $('#car_modal').modal();
    });     
    
/*
 |------------------------------------------------------------------------
 | Car owner 
 |------------------------------------------------------------------------
*/      
    
    $('.car-owner').on('click',function(e){
        var o = $(this);
        id = o.parents('td:first').find('span.car-id2').text();         
        //alert(id);
        $('#car_owner').modal();
    });           
    
 } );    

    
</script>
@stop
