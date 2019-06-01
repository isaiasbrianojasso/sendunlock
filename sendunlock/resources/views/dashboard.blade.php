@extends('layouts.app')
<!DOCTYPE html>
<!-- saved from url=(0033)http://my.sendunlock.us/dashboard -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Send Unlock - SMS</title>
    <link rel="icon" type="image/x-icon" href="http://my.sendunlock.us/assets/img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="hm9D7wisAx3DnnSm6ThXCZ1yhMxX2ee3oiJoRp0b">

    
    <link href="./css/css" rel="stylesheet" type="text/css">
    <link media="all" type="text/css" rel="stylesheet" href="./css/bootstrap.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="./css/bootstrap-toggle.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="./css/font-awesome.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="./css/alertify.css">

    <link media="all" type="text/css" rel="stylesheet" href="./css/alertify-bootstrap-3.css">

    <link media="all" type="text/css" rel="stylesheet" href="./css/bootstrap-select.min.css">


    

        <script src="./css/chart.js"></script>


    

	<link media="all" type="text/css" rel="stylesheet" href="./css/style.css">

    <link media="all" type="text/css" rel="stylesheet" href="./css/admin.css">

    <link media="all" type="text/css" rel="stylesheet" href="./css/responsive.css">



</head>



<body class="has-left-bar has-top-bar  left-bar-open " style="">

<nav id="left-nav" class="left-nav-bar">
    <div class="nav-top-sec">
        <div class="app-logo">
            <img src="./css/logo.png" alt="logo" class="bar-logo" width="145px" height="35px">
        </div>

        <a href="http://my.sendunlock.us/dashboard#" id="bar-setting" class="bar-setting"><i class="fa fa-bars"></i></a>
    </div>
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="nav-bottom-sec" style="overflow: hidden; width: auto; height: 100%;">
        <ul class="left-navigation" id="left-navigation">

            
            <li class="active"><a href="http://my.sendunlock.us/dashboard"><span class="menu-text">Dashboard</span> <span class="menu-thumb"><i class="fa fa-dashboard"></i></span></a></li>


            
            <!--
			
            
			<li class="has-sub ">
                <a href="#"><span class="menu-text">Invoices</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-credit-card"></i></span></a>
                <ul class="sub">

                    <li ><a href=http://my.sendunlock.us/user/invoices/all><span class="menu-text">All Invoices</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>

                    <li ><a href=http://my.sendunlock.us/user/invoices/recurring><span class="menu-text">Recurring Invoices</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>

                </ul>
            </li>
			

            
            

            
			<li class="has-sub ">
                <a href="#"><span class="menu-text">Contacts</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-book"></i></span></a>
                <ul class="sub">

                    <li ><a href=http://my.sendunlock.us/user/phone-book><span class="menu-text">Phone Book</span> <span class="menu-thumb"><i class="fa fa-book"></i></span></a></li>

                    <li ><a href=http://my.sendunlock.us/user/sms/import-contacts><span class="menu-text"> Import Contacts</span> <span class="menu-thumb"><i class="fa fa-plus"></i></span></a></li>

                    <li ><a href=http://my.sendunlock.us/user/sms/blacklist-contacts><span class="menu-text"> Blacklist Contacts</span> <span class="menu-thumb"><i class="fa fa-remove"></i></span></a></li>

                </ul>
            </li>
			

            

            
			<li class="has-sub ">
                <a href="#"><span class="menu-text">Recharge</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-shopping-cart"></i></span></a>
                <ul class="sub">

                    <li ><a href=http://my.sendunlock.us/user/sms/purchase-sms-plan><span class="menu-text">Purchase SMS Plan</span> <span class="menu-thumb"><i class="fa fa-credit-card"></i></span></a></li>

                    <li ><a href=http://my.sendunlock.us/user/sms/buy-unit><span class="menu-text">Buy Unit</span> <span class="menu-thumb"><i class="fa fa-shopping-cart"></i></span></a></li>

                </ul>
            </li>
			-->

            
            <li class="has-sub ">
                <a href="http://my.sendunlock.us/dashboard#"><span class="menu-text">Enviador SMS</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-mobile"></i></span></a>
                <ul class="sub">

                    <li><a href="http://my.sendunlock.us/user/sms/quick-sms"><span class="menu-text">Enviar SMS</span> <span class="menu-thumb"><i class="fa fa-space-shuttle"></i></span></a></li>

                    <!--
					<li ><a href=http://my.sendunlock.us/user/sms/send-sms><span class="menu-text">Send Bulk SMS</span> <span class="menu-thumb"><i class="fa fa-send"></i></span></a></li>

                    <li ><a href=http://my.sendunlock.us/user/sms/send-schedule-sms><span class="menu-text">Enviar Schedule SMS</span> <span class="menu-thumb"><i class="fa fa-send-o"></i></span></a></li>


                    <li ><a href=http://my.sendunlock.us/user/sms/send-sms-file><span class="menu-text">Send SMS From File</span> <span class="menu-thumb"><i class="fa fa-file-text"></i></span></a></li>


                    <li ><a href=http://my.sendunlock.us/user/sms/send-schedule-sms-file><span class="menu-text">Schedule SMS From File</span> <span class="menu-thumb"><i class="fa fa-file-text-o"></i></span></a></li>

                     <li ><a href=http://my.sendunlock.us/user/sms/update-schedule-sms><span class="menu-text">Update Schedule SMS</span> <span class="menu-thumb"><i class="fa fa-edit"></i></span></a></li>
					 -->

                </ul>
            </li>



            <!--
			
            
			<li class="has-sub ">
                <a href="#"><span class="menu-text">Recurring SMS</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-clock-o"></i></span></a>
                <ul class="sub">

                    <li ><a href=http://my.sendunlock.us/user/sms/recurring-sms><span class="menu-text">Todos Recurring SMS</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>

                    <li ><a href=http://my.sendunlock.us/user/sms/send-recurring-sms><span class="menu-text">Enviar Recurring SMS</span> <span class="menu-thumb"><i class="fa fa-send"></i></span></a></li>

                    <li ><a href=http://my.sendunlock.us/user/sms/send-recurring-sms-file><span class="menu-text">Send Recurring SMS File</span> <span class="menu-thumb"><i class="fa fa-file-text"></i></span></a></li>

                </ul>
            </li>
			


            
			<li ><a href=http://my.sendunlock.us/user/sms/sender-id-management><span class="menu-text">Sender ID Management</span> <span class="menu-thumb"><i class="fa fa-user-secret"></i></span></a></li>
			-->


            <li><a href="http://my.sendunlock.us/user/sms/sms-templates"><span class="menu-text">Mensagens Prontas</span> <span class="menu-thumb"><i class="fa fa-file-code-o"></i></span></a></li>


            

            <li class="has-sub ">
                <a href="http://my.sendunlock.us/dashboard#"><span class="menu-text">Histórico</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-history"></i></span></a>
                <ul class="sub">

                    <li><a href="http://my.sendunlock.us/user/sms/history"><span class="menu-text">Histórico de SMS</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>

                </ul>
            </li>



            <!--
			
                
                <li class="has-sub ">
                    <a href="#"><span class="menu-text">SMS Api</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-plug"></i></span></a>
                    <ul class="sub">

                        <li ><a href=http://my.sendunlock.us/user/sms-api/info><span class="menu-text">SMS Api</span> <span class="menu-thumb"><i class="fa fa-cog"></i></span></a></li>

                        <li ><a href=http://my.sendunlock.us/user/sms-api/sdk><span class="menu-text">SMS Api SDK</span> <span class="menu-thumb"><i class="fa fa-download"></i></span></a></li>

                    </ul>
                </li>

            			-->


            
            <li class="has-sub ">
                <a href="http://my.sendunlock.us/dashboard#"><span class="menu-text">Tickets de Suporte</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-envelope"></i></span></a>
                <ul class="sub">
                    <li><a href="http://my.sendunlock.us/user/tickets/all"><span class="menu-text">Todos Tickets de Suporte</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>

                    <li><a href="http://my.sendunlock.us/user/tickets/create-new"><span class="menu-text">Criar Novo Ticket</span> <span class="menu-thumb"><i class="fa fa-plus"></i></span></a></li>

                </ul>
            </li>


            
            <li><a href="http://my.sendunlock.us/logout"><span class="menu-text">Sair</span> <span class="menu-thumb"><i class="fa fa-power-off"></i></span></a></li>

        </ul>
    </div><div class="slimScrollBar" style="background: rgb(153, 153, 153); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 629px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
</nav>

<main id="wrapper" class="wrapper">

    <div class="top-bar clearfix">
        <ul class="top-info-bar">
            <!--
			<li class="dropdown bar-notification ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-shopping-cart"></i></a>
                <ul class="dropdown-menu arrow" role="menu">
                    <li class="title">Recent 5 Unpaid Invoices</li>
                                        <li class="footer"><a href="http://my.sendunlock.us/user/invoices/all">See All Invoices</a></li>
                </ul>
            </li>
			-->

            <li class="dropdown bar-notification ">
                <a href="http://my.sendunlock.us/dashboard#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-envelope"></i></a>
                <ul class="dropdown-menu arrow message-dropdown" role="menu">
                    <li class="title">Recent 5 Pending Tickets</li>
                    
                    <li class="footer"><a href="http://my.sendunlock.us/user/tickets/all">See All Tickets</a></li>
                </ul>
            </li>
        </ul>



        <div class="navbar-right">
            <div class="clearfix">
                <div class="dropdown user-profile pull-right">

                    <a href="http://my.sendunlock.us/dashboard#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <span class="text-complete text-uppercase m-r-30">SMS Balance : 1</span>


                        <span class="user-info">  {{ Auth::user()->name }} </span>

                                                    <img class="user-image" src="./css/profile.jpg" alt="tapiteiqui ">
                        
                    </a>
                    <ul class=" dropdown-menu arrow right-arrow" role="menu">
                        <li><a href="http://my.sendunlock.us/user/edit-profile"><i class="fa fa-edit"></i> Atualizar Perfil</a></li>
                        <li><a href="http://my.sendunlock.us/user/change-password"><i class="fa fa-lock"></i> Alterar Senha</a></li>
                        <li class="bg-dark">
                            <a href="http://my.sendunlock.us/logout" class="clearfix">
                                <span class="pull-left">Sair</span>
                                <span class="pull-right"><i class="fa fa-power-off"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="language-var user-info">
            <a href="http://my.sendunlock.us/dashboard#" class="dropdown-toggle text-success" data-toggle="dropdown" role="button" aria-expanded="false">
                <img src="./css/download.png" alt="Language">
            </a>
            <ul class="dropdown-menu lang-dropdown arrow right-arrow" role="menu">
                                    <li>
                        <a href="http://my.sendunlock.us/user/language/change/1">
                            <img class="user-thumb" src="./css/us.png" alt="user thumb">
                            <div class="user-name">English</div>
                        </a>
                    </li>
                                    <li>
                        <a href="http://my.sendunlock.us/user/language/change/2" class="text-complete">
                            <img class="user-thumb" src="./css/download.png" alt="user thumb">
                            <div class="user-name">Portuguese</div>
                        </a>
                    </li>
                            </ul>
        </div>

    </div>

    

    
    <section class="wrapper-bottom-sec">
        <div class="p-30"></div>
        <div class="p-15 p-t-none p-b-none m-l-10 m-r-10">
                    </div>

        <div class="p-15 p-t-none p-b-none">
            <div class="row">
                <!--
				<div class="col-md-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Invoices History</h3>
                        </div>
                        <div class="panel-body">
                            <canvas id="invoiceChart" width="400" height="200">
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        (function() {
    		"use strict";
            let ctx = document.getElementById("invoiceChart");
            window.invoiceChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Unpaid","Paid","Cancelled","Partially Paid"],
                    datasets: [{"backgroundColor":["#F0AD4E","#30DDBC","#D9534F","#5BC0DE"],"hoverBackgroundColor":["#F0AD4E","#30DDBC","#D9534F","#5BC0DE"],"data":[0,0,0,0]}]
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
				
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Tickets History</h3>
                        </div>
                        <div class="panel-body">
                            <canvas id="supportTicketChart" width="400" height="200">
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        (function() {
    		"use strict";
            let ctx = document.getElementById("supportTicketChart");
            window.supportTicketChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Pending","Answered","Customer Reply","Closed"],
                    datasets: [{"backgroundColor":["#d9534f","#30DDBC","#5bc0de","#7E57C2"],"hoverBackgroundColor":["#d9534f","#30DDBC","#5bc0de","#7E57C2"],"data":[0,0,0,0]}]
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
				-->
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
		<!--
        <div class="p-15 p-t-none p-b-none">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Histórico de SMS por data</h3>
                        </div>
                        <div class="panel-body">
                            <canvas id="smsHistoryChart" width="200" height="50">
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
		-->

        <div class="p-15 p-t-none p-b-none">
            <div class="row">
                <!--
				<div class="col-lg-6">
                    <div class="panel-body ">
                        <div class="row">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Recent 5 Invoices</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover table-ultra-responsive">
                                        <thead>
                                        <tr>
                                            <th style="width: 45px;">SL</th>
                                            <th style="width: 20px;">Amount</th>
                                            <th style="width: 20px;">Data de Vencimento</th>
                                            <th style="width: 15px;">Status</th>
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
				-->

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


    

    <input type="hidden" id="_url" value="http://my.sendunlock.us">
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







</body></html>