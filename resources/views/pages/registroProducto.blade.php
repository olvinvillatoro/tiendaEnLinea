@extends('layouts.app', ['page' => __('Agregar Celular'), 'pageSlug' => 'productos'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Crear Producto</h4>
      </div>
      <div class="card-body">
        
          <form class="form" method="POST" action="{{ action('ProductoController@create') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              

                   

                    <div class="form-group ">
                        <label>{{ __('Marca') }}</label>
                        <select name="marca">
                          <option value="samsung">Samsung</option>
                          <option value="apple">Apple</option>
                          <option value="xiaomi">Xiaomi</option>
                          <option value="huawei">Huawei</option>
                        </select> 
                    </div>

                    <div class="form-group{{ $errors->has('no,bre') ? ' has-danger' : '' }}">
                        <label>{{ __('Modelo') }}</label>
                        <input type="text" name="nombre_modelo" class="form-control " placeholder="{{ __('Modelo') }}" value="">
                    </div>

                    <div class="form-group{{ $errors->has('descripcion') ? ' has-danger' : '' }}">
                      <label>{{ __('Descripcion') }}</label>
                      <input type="text" name="descripcion" class="form-control" placeholder="{{ __('Descripcion') }}" value="">
                  </div>

                  <div class="form-group{{ $errors->has('precio') ? ' has-danger' : '' }}">
                    <label>{{ __('Precio') }}</label>
                    <input type="number" name="precio" class="form-control" placeholder="{{ __('Precio') }}" value="">
                </div>

                <div class="form-group">
                  <label>{{ __('Cantidad') }}</label>
                  <input type="number" name="cantidad" class="form-control{{ $errors->has('cantidad') ? ' is-invalid' : '' }}" placeholder="{{ __('Cantidad') }}" value="">
              </div>
              <div class="form-group">
                <label>{{ __('Imagen') }}</label>
                <input type="file" name="url_imagen" class="form-control" required >
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
