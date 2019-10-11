@extends('layouts.app', ['class' => 'register-page', 'page' => __('Registrarse'), 'contentClass' => 'register-page', 'pageSlug' => 'registro'])

@section('content')
    <div class="row">
        <div class="col-md-5 ml-auto">
            <div class="info-area info-horizontal mt-5">
                <div class="icon icon-warning">
                    <i class="tim-icons icon-wifi"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Compras En Linea') }}</h3>
                    <p class="description">
                        {{ __('Aqui encontraras Los mejores celulares de toda Honduras.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                    <i class="tim-icons icon-triangle-right-17"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Interactivo') }}</h3>
                    <p class="description">
                        {{ __('Nuestro Sitio completamente interactivo para tu comodidad') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-info">
                    <i class="tim-icons icon-trophy"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Los MEJORES precios') }}</h3>
                    <p class="description">
                        {{ __('Nuestros precios hablan por si solos') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-7 mr-auto">
            <div class="card card-register card-white">
                <div class="card-header">
                   
                    <h1 class="" style="color=#26d454;">{{ __('Registro') }}</h1>
                </div>
                <form class="form" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="card-body">
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <!--Campos de Persona-->

                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="apellido_persona" class="form-control{{ $errors->has('apellido_persona') ? ' is-invalid' : '' }}" placeholder="{{ __('Apellido') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>




                        <!--Campos de Persona-->

                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Correo') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>

                        <!--Campos de Persona-->

                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-chat-33"></i>
                                </div>
                            </div>
                            <input type="tel" name="telefono_persona" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Telefono') }}">
                           <!--  @ include('alerts.feedback', ['field' => 'email']) -->
                        </div>

                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="date" name="fechanac_persona" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Fecha Nacimiento') }}">
                            <!-- @ include('alerts.feedback', ['field' => 'email'])-->
                        </div>

                        <!--Campos de Persona-->

                        <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Contraseña') }}">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Contraseña') }}">
                        </div>
                        <div class="form-check text-left">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign"></span>
                                {{ __('Acepto todos los ') }}
                                <a href="#">{{ __('Terminos Y Condiciones') }}</a>.
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">{{ __('Comenzar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
