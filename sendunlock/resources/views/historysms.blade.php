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
                            <h3 class="panel-title text-center">History SMS</h3>
                        </div>
                        <div class="panel-body">
<div class="card text-left">
  <div class="card-body">
    <h4 class="card-title">Ultimos 30 Dias</h4>
<table class="table">
    <thead>
        <tr>
        <th>#ID</th>
        <th>ID User</th>
            <th>Sender ID</th>
            <th>Pais</th>
            <th>Tipo Mensaje</th>
            <th>Destinatario</th>
            <th>Mensaje</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Sms->sortByDesc('created_at') as $sm)
        <tr>
        @if(Auth::user()->id == $sm->user_id)
        <td scope="row">{{$sm->id}}</td>
        <td >{{$sm->user_id}}</td>
        <td >{{$sm->senderid}}</td>
        <td>{{$sm->pais}}</td>
        <td>{{$sm->tipomensaje}}</td>
        <td>{{$sm->destinatario}}</td>
        <td>{{$sm->mensaje}}</td>
        @endif
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
@endsection
