@extends('layouts.app')
@extends('menu')
<body class="has-left-bar has-top-bar  left-bar-open " style="">
@section('menu')
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
        <td>{{$us->name}}</td>
        <td>{{$us->email}}</td>
        <td>{{$us->creditos}}</td>
        <td>{{$us->fechaactivo}}</td>
        <td>{{$us->fechafinal}}</td>
        <td><a class="m-1 btn btn-danger"href="">Eliminar </a> <a class="m-1 btn btn-warning" href="">Editar </a></td>
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
                            <h3 class="panel-title text-center">Area Admin</h3>
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
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($Usuario as $us)
                                              <tr>
                                              <td scope="row">{{$us->id}}</td>
                                              <td>{{$us->name}}</td>
                                              <td>{{$us->email}}</td>
                                              <td><a class="btn btn-danger"href="">Eliminar </a> <a class="btn btn-warning" href="">Editar </a> <a  class="btn btn-info" href="">Creditos </a></td>
                                              </tr>
                                              @endforeach
                                          </tbody>
                                      </table>
                                      </div>
                                      </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-15 p-t-none p-b-none">
            <div class="row">
                <div class="col-lg-12 p-none">
                    <div class="panel-body ">
                        <div class="row">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tickets de Soporte</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover table-ultra-responsive">
                                        <thead>
                                        <tr>
                                            <th style="width: 30%;">SL</th>
                                            <th style="width: 50%;">Subject</th>
                                            <th style="width: 20%;">Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($Usuario as $us)
                                                <tr>
                                                <td scope="row">{{$us->id}}</td>
                                                <td>{{$us->fechaactivo}}</td>
                                                <td>{{$us->fechafinal}}</td>
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
</body></html>@endsection



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