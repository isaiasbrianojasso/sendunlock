<div class="navbar-right">
        <div class="clearfix">
            <div class="dropdown user-profile pull-right">

                <a href="http://my.sendunlock.us/dashboard#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <span class="text-complete text-uppercase m-r-30">SMS Balance : 1</span>


                    <span class="user-info">  {{ Auth::user()->name }} </span>

                                                <img class="user-image" src="./css/profile.jpg" alt="{{ Auth::user()->name }}  ">
                    
                </a>
                <ul class=" dropdown-menu arrow right-arrow" role="menu">
                    <li><a href="http://my.sendunlock.us/user/edit-profile"><i class="fa fa-edit"></i> Atualizar Perfil</a></li>
                    <li><a href="http://my.sendunlock.us/user/change-password"><i class="fa fa-lock"></i> Alterar Senha</a></li>
                    <li class="bg-dark">
                        <a href="http://my.sendunlock.us/logout" class="clearfix">
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
@yield('navbar')