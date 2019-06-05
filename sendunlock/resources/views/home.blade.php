@extends('layouts.app')
@extends('menu')
<body class="has-left-bar has-top-bar  left-bar-open " style="">
@section('menu')
<section class="wrapper-bottom-sec">
        <div class="p-30"></div>
        <div class="p-15 p-t-none p-b-none m-l-10 m-r-10"></div>
        <div class="p-15 p-t-none p-b-none">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Histórico de Sucesso do SMS</h3>
                        </div>
                        <div class="panel-body"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" src="./css/saved_resource.html"></iframe>
                            <canvas id="smsStatusChat" width="440" height="220" style="display: block; width: 440px; height: 220px;">
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        (function() {
    		"use strict";
            let ctx = document.getElementById("smsStatusChat");
            window.smsStatusChat = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Success","Failed"],
                    datasets: [{"backgroundColor":["#30DDBC","#F95F5B"],"hoverBackgroundColor":["#30DDBC","#F95F5B"],"data":[0,0]}]
                },
                                    options: {"legend":{"display":false}}
                            });
        })();
    });
</script>
</canvas>
</div>
</div>
</div>				
				<div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Histórico de SMS por data</h3>
                        </div>
                        <div class="panel-body"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" src="./css/saved_resource(1).html"></iframe>
                            <canvas id="smsHistoryChart" width="440" height="110" style="display: block; width: 440px; height: 110px;">
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        (function() {
    		"use strict";
            let ctx = document.getElementById("smsHistoryChart");
            window.smsHistoryChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["20th May 19","21st May 19","22nd May 19","23rd May 19","24th May 19","25th May 19","26th May 19","27th May 19","28th May 19","29th May 19"],
                    datasets: [{"label":"Outbound","backgroundColor":"rgba(0, 51, 102, 0.5)","borderColor":"rgba(0, 51, 102, 0.8)","pointBorderColor":"rgba(0, 51, 102, 0.8)","pointBackgroundColor":"rgba(0, 51, 102, 0.8)","pointHoverBackgroundColor":"#fff","pointHoverBorderColor":"rgba(220,220,220,1)","data":[0,0,0,0,0,0,0,0,0,0]},{"label":"Inbound","backgroundColor":"rgba(233, 114, 76, 0.5)","borderColor":"rgba(233, 114, 76, 0.8)","pointBorderColor":"rgba(233, 114, 76, 0.8)","pointBackgroundColor":"rgba(233, 114, 76, 0.8)","pointHoverBackgroundColor":"#fff","pointHoverBorderColor":"rgba(220,220,220,1)","data":[0,0,0,0,0,0,0,0,0,0]}]
                },
                                    options: {"legend":{"display":false}}
                            });
        })();
    });
</script>
</canvas>
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
                                    <h3 class="panel-title">Recente 5 Tickets de Suporte</h3>
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
  @if(Auth::user()->creditos==0)  
  <!-- Modal -->
  <div class="modal fade" id="modalsincreditos" tabindex="-1" role="dialog" aria-labelledby="modalsincreditos" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Creditos Agotados</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            Creditos Agotados contacte al administrador para mas creditos
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <a class="btn btn-primary" href="/">Aceptar</a>
          </div>
        </div>
      </div>
    </div>
<script>
window.onload = function() {
$('#modalsincreditos').modal('show')
}
</script>
@endif
@if(Auth::user()->creditos<=10)  
<!-- Modal -->
<div class="modal fade" id="modalsincreditos" tabindex="-1" role="dialog" aria-labelledby="modalsincreditos" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Aviso</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
Los creditos se estan agotando restan {{Auth::user()->creditos}} creditos
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</div>
</div>
</div>
</div>
<script>
window.onload = function() {
$('#modalsincreditos').modal('show')
}
</script>
@endif

</body></html>@endsection
