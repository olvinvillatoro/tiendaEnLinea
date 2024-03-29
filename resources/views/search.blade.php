@extends('layouts.app', ['pageSlug' => 'navegar'])

@section('content')


<div class="hero-wrap hero-bread" style="background-image: url('images/celulares.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-0 bread" style="color: #863;">Celulares</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section">
  <div class="container">
    
    <div class="row">
    
@if ($productos!=null)
    
      @foreach ($productos as $producto)
          
      
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="product">
          <a href="{{ action( 'ProductoController@show',$producto['id']) }}" class="img-prod"><img class="img-fluid" src="{{ asset('storage/'. $producto->url_imagen)}}" alt="Colorlib Template">
            <div class="overlay"></div>
            
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="#">{{$producto['nombre_modelo']}}</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="price"><span>L{{$producto['precio']}}</span></p>
              </div>
            </div>
            <div class="bottom-area d-flex px-3">
              <div class="m-auto d-flex">
                <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                  <span><i class="ion-ios-menu"></i></span>
                </a>
                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                  <span><i class="ion-ios-cart"></i></span>
                </a>
                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                  <span><i class="ion-ios-heart"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      @endforeach

@else
<p style="color: #213;">
  No Se Encotro Resultados
</p>
@endif
    </div>



    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection