@extends('layouts.app', ['pageSlug' => 'navegar'])

@section('content')

{{--dd($producto)--}}

<div class="hero-wrap hero-bread" style="background-image: url('images/celulares.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>{{$producto['nombre_marca']}}</span></p>
          <h1 class="mb-0 bread">{{$producto['nombre_marca']}}</h1>
        </div>
      </div>
    </div>
  </div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 mb-5 ftco-animate">
            <a href="#" class="image-popup"><img src="{{ asset('storage/'. $producto['url_imagen'])}}" class="img-fluid" alt="Colorlib Template"></a>
        </div>
        <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <h3>{{$producto['nombre_modelo']}}</h3>
            <div class="rating d-flex">
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2">5.0</a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p>
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Calificacion</span></a>
                    </p>
                    <p class="text-left">
                        <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Vendidos</span></a>
                    </p>
                </div>
            <p class="price"><span>L{{$producto['precio']}}</span></p>
            <p style="color: #863;">  {{$producto['descripcion']}}      </p>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group d-flex">
              <div class="select-wrap">
              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
              <select name="" id="" class="form-control">
                  <option value="">Small</option>
                <option value="">Medium</option>
                <option value="">Large</option>
                <option value="">Extra Large</option>
              </select>
            </div>
            </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="input-group col-md-6 d-flex mb-3">
             <span class="input-group-btn mr-2">
                <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
               <i class="ion-ios-remove"></i>
                </button>
                </span>
             <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
             <span class="input-group-btn ml-2">
                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                 <i class="ion-ios-add"></i>
             </button>
             </span>
          </div>
          <div class="w-100"></div>
          <div class="col-md-12">
              <p style="color: #000;"><b style="color:#d41604 ;" >Disponibles</b> :{{$producto['cantidad']}}</p>
          </div>
      </div>
      <p class="">
          <form action="{{route('carrito.guardar')}}" method="post">
            @csrf
          <input type="hidden" name="id" value="{{$producto['id']}}">
          <input type="hidden" name="nombre" value="{{$producto['nombre_modelo']}}">
          <input type="hidden" name="precio" value="{{$producto['precio']}}">
          <button  type="submit" ><span class="btn btn-black py-3 px-5"> Agregar Al Carrito</button>
        
        </form>
      </p>
        </div>
    </div>
</div>













<script>
    $(document).ready(function(){

    var quantitiy=0;
       $('.quantity-right-plus').click(function(e){
            
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
                
                $('#quantity').val(quantity + 1);

              
                // Increment
            
        });

         $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
          
                // Increment
                if(quantity>0){
                $('#quantity').val(quantity - 1);
                }
        });
        
    });
</script>


@endsection