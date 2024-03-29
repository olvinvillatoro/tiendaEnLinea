<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="{{url('/')}}">Inicio</a>        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
            
            <!--buscar-->
            <li class="search-bar nav-item">
                    <form action="{{route('buscar')}}" method="post">
                            @csrf                 
                           <input type="text" name="buscar"  placeholder="Buscar" value="{{ request()->input('buscar')}}">
                            <button type="submit" class="btn btn-fill btn-primary"><i class="tim-icons icon-zoom-split"></i>{{ __('') }}</button>                                                 
                    </form>
            </li>
            <!--/buscar-->
            
            <!--Carrito-->
            <li class="nav-item ">
                    <a href="{{route('carrito')}}" class=" nav-link" >
                    <!--
                        <div class="photo">
                            <img src="{ { asset('black') }}/img/car.png" alt="">
                        </div>
                    -->
                       <b> <span class="tim-icons icon-cart" style="color:rgba(233,152,40);"> <span class="rounded-circle">{{Cart::instance('default')->count()}}</span></span></b>

                    </a>
               

                </li>
            


                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <div class="photo">
                            <img src="{{ asset('black') }}/img/anime3.png" alt="{{ __('Foto de Perfil') }}">
                        </div>
                        <b class="caret d-none d-lg-block d-xl-block"></b>
                        <p class="d-lg-none">{{ __('Log out') }}</p>
                    </a>
                    <ul class="dropdown-menu dropdown-navbar">
                        <li class="nav-link">
                            <a href="{{ route('profile.edit') }}" class="nav-item dropdown-item">{{ __('Perfil') }}</a>
                        </li>
                        <li class="nav-link">
                            <a href="{{ route('pages.tarjeta') }}" class="nav-item dropdown-item">{{ __('Configuracion') }}</a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-link">
                            <a href="{{ route('logout') }}" class="nav-item dropdown-item" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="separator d-lg-none"></li>
            </ul>
        </div>
    </div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="{{ __('SEARCH') }}">
                <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('Close') }}">
                    <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
        </div>
    </div>
</div>
