@extends('layouts.app')
@extends('menu')
@section('menu')
@section('html')
<script type="text/javascript" src="js/script.js"></script>
<body class="has-left-bar has-top-bar  left-bar-open " style="">
<section class="wrapper-bottom-sec">
        <div class="p-30"></div>
        <div class="p-15 p-t-none p-b-none m-l-10 m-r-10"></div>
        <div class="p-15 p-t-none p-b-none">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading bg-secondary">
                            <h3 class="panel-title text-center">Control de Clientes/Creditos</h3>
                        </div>
                        <div class="panel-body">
<div class="card text-left">
  <div class="card-body">
    <h4 class="card-title">Control de Clientes</h4>
<table class="table">
    <thead>
        <tr>
            <th>#ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Creditos</th>
            <th>Fecha Inicio</th>
            <th>Fecha Final</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Usuario as $us)
        <tr>
        <td scope="row">{{$us->id}}</td>
        <td >{{$us->name}}</td>
        <td>{{$us->email}}</td>
        <td @if($us->creditos<=10) class="text-danger" @endif>{{$us->creditos}}</td>        
        <td>{{$us->fechaactivo}}</td>
        <td>{{$us->fechafinal}}</td>
        <td><a class="m-1 btn btn-danger" data-toggle="modal" data-target="#modalborrarusuario"  href="#modalborrarusuario"
                data-id="{{$us->id}}"
                data-name="{{$us->name}}"
                data-email="{{$us->email}}"
                data-creditos="{{$us->creditos}}"
                data-fechaactivo="{{$us->fechaactivo}}"
                data-fechafinal="{{$us->fechafinal}}"
                >Eliminar</a>
                <a class="m-1 btn btn-warning" href=""  data-toggle="modal" data-target="#modaleditar"  href="#modaleditar"
                data-id="{{$us->id}}"
                data-name="{{$us->name}}"
                data-email="{{$us->email}}"
                data-rol="{{$us->rol}}"
                data-password="{{$us->password}}"
                data-creditos="{{$us->creditos}}"
                data-fechaactivo="{{$us->fechaactivo}}"
                data-fechafinal="{{$us->fechafinal}}">Editar </a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#agregarusuario">
        Agregar Cliente
</button>
</div>
</div>
                        </div>
                        </div>
                        </div>				
				<div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading bg-primary">
                            <h3 class="panel-title text-center">Plantillas SMS</h3>
                        </div>
                        <div class="panel-body">
                                <div class="card text-left">
                                        <div class="card-body">
                                          <h4 class="card-title">Control de Plantillas</h4>
                                      <table class="table">
                                          <thead>
                                              <tr>
                                                  <th>#ID</th>
                                                  <th>Nombre Plantilla</th>
                                                  <th>Contenido</th>
                                                  <th>Opciones</th>

                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($Plantilla as $pl)
                                              <tr>
                                              <td scope="row">{{$pl->id}}</td>
                                              <td>{{$pl->nombreplantilla}}</td>
                                              <td>{{$pl->plantilla}}</td>
                                              <td>
                                            <a class="btn btn-danger" data-toggle="modal" data-target="#modalborrarplantilla" href="#modalborrarplantilla"
                                            data-id="{{$pl->id}}">Eliminar </a></td>
                                              </tr>
                                              @endforeach
                                          </tbody>
                                      </table>
                                      <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalagregarplantilla">Agregar Plantilla</button>
                                      </div>
                                      </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-15 p-t-none p-b-none">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body ">
                        <div class="row">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Modelos/Colores/Dispositivos</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover table-ultra-responsive">
                                        <thead>
                                                <tr>
                                                        <th>#ID</th>
                                                        <th>Modelo</th>
                                                        <th>Color</th>
                                                        <th>Capacidad</th>

      
                                                    </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($Modelo as $mo)
                                                <tr>
                                                <td scope="row">{{$mo->id}}</td>
                                                <td>{{$mo->modelo}}</td>
                                                <td>{{$mo->color}}</td>
                                                <td>{{$mo->capacidad}}</td>
                                                <td><a class="btn btn-danger"href="">Eliminar </a> <a class="btn btn-warning" href="">Editar </a> <a  class="btn btn-info" href="">Creditos </a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        <tbody>
                                                                                </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="./css/jquery-1.10.2.min.js"></script>
<script src="./css/jquery.slimscroll.min.js"></script>
<script src="./css/bootstrap.min.js"></script>
<script src="./css/bootstrap-toggle.min.js"></script>
<script src="./css/alertify.js"></script>
<script src="./css/bootstrap-select.min.js"></script>
<script src="./css/pt.js"></script>
<script src="./css/scripts.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('input[name="_token"]').val()
        }
    });

    var _url=$('#_url').val();

    $('#bar-setting').click(function(e){
        e.preventDefault();
        $.post(_url+'/user/menu-open-status');
    });

    var width = $(window).width();
    if (width <= 768 ) {
      $("body").removeClass('left-bar-open')
    }
</script>
<script  type="text/javascript">
    $(function(){
      $('#modalborrarusuario').on('show.bs.modal', function(e){
           $('#id1').html($(e.relatedTarget).data('id'));
           var id = $(e.relatedTarget).data().id;
            $(e.currentTarget).find('#id1').val(id);
            $("#w3s").attr("href",'/eliminarusuario/'+id);
            //     
            $('#id1').html($(e.relatedTarget).data('id'));
            $('#name1').html($(e.relatedTarget).data('name'));
            $('#email1').html($(e.relatedTarget).data('email'));
            $('#creditos1').html($(e.relatedTarget).data('creditos'));
            $('#fechaactivo1').html($(e.relatedTarget).data('fechaactivo'));
            $('#fechafinal1').html($(e.relatedTarget).data('fechafinal'));
            });
////////////////modal editar usuario
       $('#modaleditar').on('show.bs.modal', function(e){
       $('#id2').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
       $(e.currentTarget).find('#id2').val(id);
    $("#editar").attr("action",'/editarusuario/'+id);
    var id = $(e.relatedTarget).data().id;
     $(e.currentTarget).find('#id2').val(id);
     var id = $(e.relatedTarget).data().name;
     $(e.currentTarget).find('#name2').val(id);
     var id = $(e.relatedTarget).data().email;
     $(e.currentTarget).find('#email2').val(id);
     var id = $(e.relatedTarget).data().password;
     $(e.currentTarget).find('#password2').val(id);
     var id = $(e.relatedTarget).data().rol;
     $(e.currentTarget).find('#rol2').val(id);
     var id = $(e.relatedTarget).data().creditos;
     $(e.currentTarget).find('#creditos2').val(id);
     var id = $(e.relatedTarget).data().fechaactivo;
     $(e.currentTarget).find('#fechaactivo2').val(id);
     var id = $(e.relatedTarget).data().fechafinal;
     $(e.currentTarget).find('#fechafinal2').val(id);
     });
////////////////modal borrar Plantilla
$('#modalborrarplantilla').on('show.bs.modal', function(e){
       $('#id3').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
       $(e.currentTarget).find('#id3').val(id);
    $("#borrarplantilla").attr("href",'/borrarplantilla/'+id);

});
/*
////////////////modal editar Plantilla
$('#modaleditarplantilla').on('show.bs.modal', function(e){
       var id = $(e.relatedTarget).data().id;
       $("#editaplantilla").attr("href",'/editaplantilla/'+id);
       $(e.currentTarget).find('#nombreplantilla1').val(id);
       var id = $(e.relatedTarget).data().nombreplantilla;
       $(e.currentTarget).find('#plantilla1').val(id);
       var id = $(e.relatedTarget).data().plantilla;
});
*/

            });
        </script>
</body>@endsection</html>
<!-- Modal Agregar Cliente-->
<div class="modal fade" id="agregarusuario" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <form action="{{ action('UsuarioController@store') }}">
                 @csrf
                 <label  for="name">Nombre</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Nombre">
                <label   for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                <label for="email">Correo</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Correo">
                <label   for="number">Creditos</label>
                <input class="form-control" type="text" name="creditos" id="creditos" placeholder="Creditos">
                <label  for="r">Selecionar Permisos </label>
                <select class="form-control disp" name="rol" data-live-search="true" id="rol"> 
                <option value="">Seleccionar Rol</option>
                <option value="cliente">Cliente</option>
                <option value="admin">Administrador</option>
                </select>
                <label for="fechaactivo">Fecha Inicio</label>
                <input class="form-control" type="date" name="fechaactivo" id="fechaactivo" placeholder="Fecha Inicio">
                <label for="fechafinal">Fecha Final</label>
                <input class="form-control" type="date" name="fechafinal" id="fechafinal" placeholder="Fecha Final">
            </div>
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" >Agregar</button>
            </form>

            </div>
        </div>
    </div>
</div>

<!-- Modal borrar usuario -->
<div class="modal fade" id="modalborrarusuario" tabindex="-1" role="dialog" aria-labelledby="modalborrarusuario" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seguro Deseas Borrar Usuario?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form>
                        <div class="form-group">
                            <label>
                                Nombre:
                            </label>
                            <label id="name1" class="form-group">
                            </label>
                            <br>
                            <label>
                                Correo :
                            </label>
                            <label id="email1" class="form-group">
                            </label>
                            <br>
                            <label>
                                Creditos hastas ahora:
                            </label>
                            <label id="creditos1" class="form-group">
                            </label>
                            <br>
                            <label>Fecha Inicio:</label>
                            <label id="fechaactivo1" class="form-group">
                            </label>
                            <br>
                            <label>Fecha Final:</label>
                            <label id="fechafinal1" class="form-group"></label>
                        </div>
                    </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary" ><a class="text-white" name="w3s" id="w3s" href="">Eliminar</a></button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="modaleditar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Editar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <form id="editar" name="editar" action="">
                            @csrf
                            @method('POST')
                            <label  for="name2">Nombre</label>
                           <input class="form-control" type="text" name="name2" id="name2" placeholder="Nombre">
                           <label for="email2">Correo</label>
                           <input class="form-control" type="email" name="email2" id="email2" placeholder="Correo">
                           <label   for="creditos2">Creditos</label>
                           <input class="form-control" type="text" name="creditos2" id="creditos2" placeholder="Creditos">
                           <label  for="rol2">Selecionar Permisos </label>
                           <select class="form-control disp" name="rol2" id="rol2" data-live-search="true" > 
                           <option name="rol2" id="rol2" value="">Seleccionar Rol</option>
                           <option name="rol2" id="rol2" value="cliente">Cliente</option>
                           <option  name="rol2" id="rol2" value="admin">Administrador</option>
                           </select>
                           <label for="fechaactivo2">Fecha Inicio</label>
                           <input class="form-control" type="date" name="fechaactivo2" id="fechaactivo2" placeholder="Fecha Inicio">
                           <label for="fechafinal2">Fecha Final</label>
                           <input class="form-control" type="date" name="fechafinal2" id="fechafinal2" placeholder="Fecha Final">
                           <input type="hidden" name="id2" id="id2">
                        </div>
                       <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                           <button type="submit"  class="btn btn-primary" >Editar</button>
                       </form>            
                    </div>
        </div>
    </div>
</div>


<!-- Modal Agregar Plantilla -->
<div class="modal fade" id="modalagregarplantilla" tabindex="-1" role="dialog" aria-labelledby="modalagregarplantilla" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Plantilla SMS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ action('UsuarioController@plantilla') }}">
                            @csrf
                            <label  for="nombreplantilla">Nombre Plantilla</label>
                           <input class="form-control" type="text" name="nombreplantilla" id="nombreplantilla" placeholder="Nombre de Plantilla">
                           <label for="plantilla">Plantilla</label>
                           <input class="form-control" type="plantilla" name="plantilla" id="plantilla" placeholder="Plantilla">
                        </div>
                       <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                           <button type="submit"  class="btn btn-primary" >Agregar Plantilla</button>
                       </form>       
                        </div>
        </div>
    </div>
</div>

<!-- Modal  Borrar Plantilla-->
<div class="modal fade" id="modalborrarplantilla" tabindex="-1" role="dialog" aria-labelledby="modalborrarplantilla" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar Plantilla</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
               Seguro que quieres borrar esta plantilla?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" ><a class="text-white" name="borrarplantilla" id="borrarplantilla" href="">Eliminar</a></button>
            </div>
        </div>
    </div>
</div>
<!-- Modal  Editar Plantilla-->

<div class="modal fade" id="modaleditarplantilla" tabindex="-1" role="dialog" aria-labelledby="modaleditarplantilla" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Plantilla SMS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form>
                                @csrf
                                @method('POST')
                                <label  for="nombreplantilla5">Nombre Plantilla</label>
                               <input class="form-control" type="text" name="nombreplantilla1" id="nombreplantilla1" placeholder="Nombre de Plantilla">
                               <label for="plantilla5">Plantilla</label>
                               <input class="form-control" type="text" name="plantilla1" id="plantilla1" placeholder="Plantilla">
                            </div>
                           <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                               <button type="submit" class="btn btn-primary" ><a class="text-white" name="editaplantilla" id="editaplantilla" href="">Editar</a></button>
                            </form>       
                            </div>
            </div>
        </div>
    </div>

@endsection
