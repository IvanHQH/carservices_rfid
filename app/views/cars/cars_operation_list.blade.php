@extends ('base_templates.BaseLayout')

@section ('content')    
<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Operadores</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- row-content -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-4">                            
                        <button id="add_operator"  type="button" class="btn btn-outline btn-primary" 
                                 data-toggle="modal">
                            Agregar
                        </button>    
                    </div>
                </div>             
            </div>
            <!-- panel-body -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">                     
                        <thead>
                            <!-- headers-columns -->
                            <tr role="row">
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Nombre de Usuario</th>  
                                <th>Tel. M&oacute;vil</th>          
                                <th style="width: 70px"></th>                                 
                            </tr>
                            <!-- /.headers-columns -->
                        </thead>
                        <tbody>                            
                        <tr class="gradeA odd" role="row">
                            <td class="sorting_1">1</td>                                
                            <td class="sorting_1">Ivanare</td>
                            <td class="sorting_1"></td>
                            <td class="sorting_1"></td>
                            <td class="center"></td>
                            <td class="center"></td>
                            <td style="text-align: center; vertical-align: middle; ">
                                <span class="operator-id" style="display:none">
                                    1
                                </span>                                          
                                <a class ="edit_operator" href="" 
                                   title="Editar">
                                    <i class="glyphicon glyphicon-edit">                                    
                                    </i>
                                </a>
                                <a class ="delete_operator" href="" 
                                   title="Eliminar">
                                    <i class="glyphicon glyphicon-remove">                                    
                                    </i>
                                </a>                                               
                            </td>                                
                        </tr>                                                          
                        @if(isset($operators))    
                        @foreach($operators as $operator)      
                            <tr class="gradeA odd" role="row">         
                                <td class="sorting_1">{{$operator->id}}</td>                                    
                                <td class="sorting_1">{{$operator->first_name}}</td>   
                                <td class="sorting_1">{{$operator->last_name}}</td>   
                                <td class="sorting_1">{{$operator->mother_maiden_name}}</td>     
                                <td class="sorting_1">{{$operator->username}}</td>                                   
                                <td class="center">{{$operator->cell_phone}}</td>
                                <td style="text-align: center; vertical-align: middle; ">
                                    <span class="operator-id" style="display:none">
                                        {{$operator->id}}
                                    </span>                                          
                                    <a class ="edit_operator" href="" 
                                       title="Editar">
                                        <i class="glyphicon glyphicon-edit">                                    
                                        </i>
                                    </a>
                                    <a class ="delete_operator" href="" 
                                       title="Eliminar">
                                        <i class="glyphicon glyphicon-remove">                                    
                                        </i>
                                    </a>                                               
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

<div class="modal fade" id="modal-operator" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">                       
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                </button>
                <h4 class="modal-title" id="head_operator_modal">
                        Agregar operador
                </h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable" id="tabs-102605">
                                <div id="operator_id_edit" style="display:none"></div>
                                <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#panel-919134" data-toggle="tab">
                                        Datos personales</a>
                                </li>
                                <li >
                                    <a href="#panel-913591" data-toggle="tab">
                                        Contacto</a>
                                </li>                 
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="panel-919134">  
                                        <br> 
                                    <div class="row">
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input id="operator_first_name" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Apellido Paterno</label>
                                                <input id="operator_last_name" class="form-control" >
                                            </div>       
                                            <div class="form-group">
                                                <label>Apellido Materno</label>
                                                <input id="operator_second_last_name" class="form-control" >
                                            </div>         
                                            <div class="form-group">
                                                <label>Nombre de Usuario</label>
                                                <input id="operator_username" class="form-control" >
                                            </div>                                              
                                        </div>
                                        <div class="col-md-6">    
                                            <div class="form-group">
                                                <label>Sexo</label>
                                                <select id="operator_sex" class="form-control">
                                                    <option>Masculino</option>
                                                    <option>Femenino</option>
                                                </select>
                                            </div>                                    
                                            <div class="form-group">
                                                <label>Fecha de nacimiento</label>
                                                <input id="operator_date_birth" type="date" class="form-control">                                      
                                            </div>                      
                                        </div>                                     
                                    </div>                                               
                                    </div>
                                    <div class="tab-pane" id="panel-913591"> 
                                        <br>        
                                        <div class="row">
                                            <div class="col-md-6">   
                                                <div class="form-group">
                                                    <label>Domicilio ( calle y número )</label>
                                                    <input id="operator_address" class="form-control" >
                                                </div>        
                                                <div class="form-group">
                                                    <label>Colonia</label>
                                                    <input id="operator_neighborhood" class="form-control">
                                                </div>  
                                                <div class="form-group">
                                                    <label>Estado</label>
                                                    <select id="operator_town" class="form-control">
                                                        <option>San Luis Potosí</option>
                                                        <option>Queretaro</option>
                                                    </select>
                                                </div>                                    
                                                <div class="form-group">
                                                    <label>Ciudad</label>
                                                    <input id="operator_city" class="form-control">
                                                </div>                                  
                                            </div>  
                                            <div class="col-md-6">      
                                                <div class="form-group">
                                                    <label>Código postal</label>
                                                    <input id="operator_postal_code" class="form-control">
                                                </div>        
                                                <div class="form-group">
                                                    <label>Telèfono casa</label>
                                                    <input id="operator_home_phone" class="form-control">
                                                </div>  
                                                <div class="form-group">
                                                    <label>Teléfono móvil</label>
                                                    <input id="operator_cell_phone" class="form-control" >
                                                </div>  
                                                <div class="form-group">
                                                    <label>Correo electronico</label>
                                                    <input id="operator_email" class="form-control">
                                                </div>                                 
                                            </div>                                    
                                            </div>                              
                                        </div>    
                                </div>                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cerrar
                </button> 
                <button id="save_operator" type="button" class="btn btn-primary">
                        Guardar
                </button>
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
 | Add Operators
 |------------------------------------------------------------------------        
*/    

$('#save_operator').on('click',function(e){
    //id = $('#operator_id_edit').text();
    //alert(id);
    var birth = document.getElementById("operator_date_birth");
    var since = document.getElementById("operator_since");
    var data = {            
        first_name :$("#operator_first_name").val(),
        last_name :$("#operator_last_name").val(),
        second_last_name:$("#operator_second_last_name").val(),
        nickname :$("#operator_nickname").val(),
        sex :$("#operator_sex").val(), 
        date_birth  :1,                                    
        operator_since   :1,                               
        address :$("#operator_address").val(), 
        neighborhood :$("#operator_neighborhood").val(), 
        town :$("#operator_town").val(), 
        city :$("#operator_city").val(), 
        postal_code:$("#operator_postal_code").val(),
        home_phone :$("#operator_home_phone").val(), 
        cell_phone :$("#operator_cell_phone").val(), 
        email :$("#operator_email").val(), 
        company :$("#operator_company").val(),  
        job :$("#operator_job").val()                         
    }, 
    id = $('#operator_id_edit').text();
    //alert("ok");        
    data.date_birth = birth.value;
    data.operator_since = since.value;        
    $.ajax({
        type: "POST",
        url: '{{ URL::to('/operator') }}' + (typeof id !== 'undefined'?('/' + id):''),
        data: data,
        success: function(data, textStatus, jqXHR) {                        
            if(data.success == true){
                window.location.reload();
            }
            else{alert(data.errors);}                        
        },
        dataType: 'json'
    });              
    window.location.reload();          
});

$('#add_operator').on('click', function(e) { 
    $("#head_operator_modal").html("Agregar socio");
    $('#operator_id_edit').html("0");
    $('#modal-operator').modal();
}); 

/*
 |------------------------------------------------------------------------
 | Edit Operators
 |------------------------------------------------------------------------
*/    

function fiilModalOperator(id) {
    $.ajax({
        type: 'GET',
        url: '{{ URL::to('/operator') }}' + '/' + id,
        dataType: 'json',
        success: function(d) {
            $("#operator_first_name").val(d.operator.first_name);
            $("#operator_last_name").val(d.operator.last_name);
            $("#operator_second_last_name").val(d.operator.second_last_name);
            $("#operator_username").val(d.operator.nickname);
            $("#operator_sex").val(d.operator.sex); 
            $("#date_birth").val(d.operator.birth);                                                                
            $("#operator_address").val(d.operator.address); 
            $("#operator_neighborhood").val(d.operator.neighborhood); 
            $("#operator_town").val(d.operator.town); 
            $("#operator_city").val(d.operator.city); 
            $("#operator_postal_code").val(d.operator.postal_code);
            $("#operator_home_phone").val(d.operator.home_phone); 
            $("#operator_cell_phone").val(d.operator.cell_phone); 
            $("#operator_email").val(d.operator.email);         
        }
    });
}   

$('.edit_operator').on('click', function(e) {
    var o = $(this),
    id = o.parents('td:first').find('span.operator-id').text(); 
    $('#operator_id_edit').html(id);
    $("#head_operator_modal").html("Editar operador");
    fiilModalOperator(id);
    $('#modal-operator').modal();
});        

/*
 |------------------------------------------------------------------------
 | Delete Operators
 |------------------------------------------------------------------------
*/    

$('.delete_operator').on('click', function(e) {
    if (!confirm('¿Desea borrar el socio?'))
            return false;
    var o = $(this),
    id = o.parents('td:first').find('span.operator-id').text();  
    $.ajax({
        type: "DELETE",
        url: '{{ URL::to('/operator') }}' + '/' + id,
        success: function(data, textStatus, jqXHR) {                        
            if(data.success == true){
                window.location.reload();
            }
            else{alert(data.errors);}                        
        },
        dataType: 'json'
    });              
    window.location.reload();        
});                                            

});              
    
</script>
@stop
