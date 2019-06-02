<meta name="csrf-token" content="{{ csrf_token() }}">
<nav id="left-nav" class="left-nav-bar">
        <div class="nav-top-sec">
            <div class="app-logo">
                <img src="./css/logo.png" alt="logo" class="bar-logo" width="145px" height="35px">
            </div>
            <a href="/home" id="bar-setting" class="bar-setting"><i class="fa fa-bars"></i></a>
        </div>
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="nav-bottom-sec" style="overflow: hidden; width: auto; height: 100%;">
            <ul class="left-navigation" id="left-navigation">    
                <li class="active"><a href="/home"><span class="menu-text">Dashboard</span> <span class="menu-thumb"><i class="fa fa-dashboard"></i></span></a></li>
                <li class="has-sub ">
                    <a href="http://my.sendunlock.us/dashboard#"><span class="menu-text">Enviador SMS</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-mobile"></i></span></a>
                    <ul class="sub">
                        <li><a href="http://my.sendunlock.us/user/sms/quick-sms"><span class="menu-text">Enviar SMS</span> <span class="menu-thumb"><i class="fa fa-space-shuttle"></i></span></a></li>
                    </ul>
                </li>
                <li><a href="http://my.sendunlock.us/user/sms/sms-templates"><span class="menu-text">Mensagens Prontas</span> <span class="menu-thumb"><i class="fa fa-file-code-o"></i></span></a></li>
                <li class="has-sub ">
                    <a href="http://my.sendunlock.us/dashboard#"><span class="menu-text">Histórico</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-history"></i></span></a>
                    <ul class="sub">
                        <li><a href="http://my.sendunlock.us/user/sms/history"><span class="menu-text">Histórico de SMS</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>
                    </ul>
                </li>
                <li class="has-sub ">
                    <a href="http://my.sendunlock.us/dashboard#"><span class="menu-text">Tickets de Suporte</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-envelope"></i></span></a>
                    <ul class="sub">
                        <li><a href="http://my.sendunlock.us/user/tickets/all"><span class="menu-text">Todos Tickets de Suporte</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>
                        <li><a href="http://my.sendunlock.us/user/tickets/create-new"><span class="menu-text">Criar Novo Ticket</span> <span class="menu-thumb"><i class="fa fa-plus"></i></span></a></li>
                    </ul>
                </li>   
                
                @if(Auth::user()->rol=='admin')
                <li class="has-sub ">
                <a href="http://my.sendunlock.us/dashboard#"><span class="menu-text">Admin Area</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-envelope"></i></span></a>
                        <ul class="sub">
                            <li><a href="/admin"><span class="menu-text">Panel de Admin</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>
                            <li><a href=""><span class="menu-text">Tickets Soporte</span> <span class="menu-thumb"><i class="fa fa-plus"></i></span></a></li>
                        </ul>
                    </li> 
                @endif

                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" ><span class="menu-text">Sair</span> <span class="menu-thumb"><i class="fa fa-power-off"></i></span></a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </ul>
        </div><div class="slimScrollBar" style="background: rgb(153, 153, 153); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 629px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
    </nav>
    <main id="wrapper" class="wrapper">
        <div class="top-bar clearfix">
            <ul class="top-info-bar">
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
                        <span class="text-complete text-uppercase m-r-30">SMS Balance : {{Auth::user()->creditos}}</span>
                            <span class="user-info">{{ Auth::user()->name }} </span>
                        <img class="user-image" src="./css/profile.jpg" alt="{{ Auth::user()->name }}  ">                
                        </a>
                        <ul class=" dropdown-menu arrow right-arrow" role="menu">
                            <li><a href="http://my.sendunlock.us/user/edit-profile"><i class="fa fa-edit"></i> Atualizar Perfil</a></li>
                            <li><a href="http://my.sendunlock.us/user/change-password"><i class="fa fa-lock"></i> Alterar Senha</a></li>
                            <li class="bg-dark">
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
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
    
    @yield('menu')    