<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            
            <a href="#" class="simple-text logo-normal">{{ __('Panel De Control') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Perfil') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--TARJETA-->
            <li @if ($pageSlug == 'tarjeta') class="active " @endif>
                <a href="{{ route('pages.tarjeta') }}">
                    <i class="tim-icons icon-credit-card"></i>
                    <p>{{ __('Agregar Tarjeta') }}</p>
                </a>
            </li>
            <!--Tarjeta-->
            <!--Productos-->
            <li @if ($pageSlug == 'producto') class="active " @endif>
                <a href="{{ url('/productos/crear') }}">
                    <i class="tim-icons icon-simple-add"></i>
                    <p>{{ __('Agregar Celular') }}</p>
                </a>
            </li>
            <!--Productos-->
            
           
            
            <li @if ($pageSlug == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            
            
        </ul>
    </div>
</div>
