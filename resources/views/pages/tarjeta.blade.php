@extends('layouts.app', ['page' => __('Agregar Tarjeta'), 'pageSlug' => 'tarjeta'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Registrar Tarjeta</h4>
      </div>
      <div class="card-body">
        
          <form class="form" method="POST" action="{{ action('TarjetaController@create') }}">
            @csrf
            <div class="card-body">
              

                   

                    <div class="form-group {{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label>{{ __('Titular') }}</label>
                        <input type="text" name="titular" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Titular') }}" value="">
                    </div>

                    <div class="form-group{{ $errors->has('tarjeta') ? ' has-danger' : '' }}">
                        <label>{{ __('Tarjeta') }}</label>
                        <input type="text" name="numero_tarjeta" class="form-control " placeholder="{{ __('Tarjeta') }}" value="">
                    </div>

                    <div class="form-group{{ $errors->has('ccv') ? ' has-danger' : '' }}">
                      <label>{{ __('CCV') }}</label>
                      <input type="text" name="ccv" class="form-control" placeholder="{{ __('CCV') }}" value="">
                  </div>

                  <div class="form-group{{ $errors->has('fecha_vencimiento') ? ' has-danger' : '' }}">
                    <label>{{ __('Fecha de Vencimiento') }}</label>
                    <input type="date" name="fecha_vencimiento" class="form-control" placeholder="{{ __('Fecha de Vencimiento') }}" value="">
                </div>

                <div class="form-group">
                  <label>{{ __('Direccion') }}</label>
                  <input type="text" name="direccion_cliente" class="form-control{{ $errors->has('direccion_cliente') ? ' is-invalid' : '' }}" placeholder="{{ __('Direccion actual') }}" value="">
              </div>
             </div>
           
            <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">{{ __('Guardar') }}</button>
            </div>

           

        </form>


      </div>
    </div>
  </div>
</div>
@endsection
