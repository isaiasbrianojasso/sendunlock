@extends('layouts.app')
@extends('menu')
@section('menu')
@section('html')                  

<section class="wrapper-bottom-sec ml-5">
        <div class="p-30">
            <h2 class="page-title">View Profile</h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-body p-t-20">
                            <div class="clearfix">
                                <div class="pull-left m-r-30">
                                    <div class="thumbnail m-b-none">

                                                                                    <img src="./css/profile.jpg" alt="Profile Page" width="200px" height="200px">
                                                                            </div>
                                </div>
                                <div class="pull-left">
                                    <h3 class="bold font-color-1">{{ Auth::user()->name }}</h3>
                                    <ul class="info-list">
                                                                                    <li><span class="info-list-title">Email</span><span class="info-list-des">{{ Auth::user()->email }} </span></li>
                                        
                                                                                        <li><span class="info-list-title">{{ Auth::user()->rol }} </span><span class="info-list-des">Cliente</span></li>
                                        
                                         <li>
                                             <span class="info-list-title">SMS Balance</span><span class="info-list-des">
                                                    {{ Auth::user()->creditos }} 
                                             </span>
                                         </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="p-30 p-t-none p-b-none">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="http://my.sendunlock.us/user/edit-profile#personal_details" aria-controls="home" role="tab" data-toggle="tab">Personal Details</a></li>

                        <li role="presentation"><a href="http://my.sendunlock.us/user/edit-profile#change-picture" aria-controls="settings" role="tab" data-toggle="tab">Change Image</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content panel p-20">
                        <div role="tabpanel" class="tab-pane active" id="personal_details">
                            <form role="form" name="editar" id="editar" action="">
                          @csrf
                          @method('POST')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input type="text" class="form-control" required="" name="name" value="{{ Auth::user()->name }} ">
                                        </div>
                                        <input type="hidden" name="password"value="{{ Auth::user()->password }}">

                                        <div class="form-group">
                                            <label>Sobrenome</label>
                                            <input type="text" class="form-control" name="sobrenombre" value="{{ Auth::user()->sobrenombre }} ">
                                        </div>

                                        <div class="form-group">
                                            <label>Empresa</label>
                                            <input type="text" class="form-control" name="empresa" value="{{ Auth::user()->empresa }} ">
                                        </div>

                                        <div class="form-group">
                                            <label>Website</label>
                                            <input type="url" class="form-control" name="website" value="{{ Auth::user()->website }} ">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" required="" name="email" value="{{ Auth::user()->email }} ">
                                        </div>

                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input type="text" class="form-control" required="" name="telefono" value="{{ Auth::user()->telefono }} ">
                                        </div>



                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Endereço</label>
                                            <input type="text" class="form-control" name="direccion" value="{{ Auth::user()->direccion }} ">
                                        </div>

                                        <div class="form-group">
                                            <label>Endereço 2</label>
                                            <input type="text" class="form-control" name="direccion2" value="{{ Auth::user()->direccion2 }} ">
                                        </div>

                                        <div class="form-group">
                                            <label>Estado</label>
                                            <input type="text" class="form-control" name="estado" value="{{ Auth::user()->estado }} ">
                                        </div>

                                        <div class="form-group">
                                            <label>Cidade</label>
                                            <input type="text" class="form-control" name="ciudad" value="{{ Auth::user()->ciudad }} ">
                                        </div>

                                        <div class="form-group">
                                            <label>CEP</label>
                                            <input type="text" class="form-control" name="cp" value="{{ Auth::user()->cp }} ">
                                        </div>
                                </div>
                                <input type="submit" value="Update" class="btn btn-primary">

                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


        @endsection
<script>
    window.onload = function() 
    {
    var id= {{Auth::user()->id}};
    console.log(id);
    $("#editar").attr("action",'/editprofile/'+id);
    $("#editar").attr("href",'/editprofile/'+id);

    };

 
</script>