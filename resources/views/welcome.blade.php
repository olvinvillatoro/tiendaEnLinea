@extends('layouts.app',['pageSlug' => 'navegar'])

@section('content')
    
            <div class="home-slider owl-carousel">
                    <div class="slider-item" style="background-image: url(images/celulares.jpg);">
                        <div class="overlay"></div>
                    <div class="container">
                        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">Los Mejores Precios En Celulares</h1>
                            <h2 class="subheading mb-4">Ofrecemos telefonos  &amp; la mejor calidad </h2>
                            <p><a href="#" class="btn btn-primary">Ver Detalles</a></p>
                        </div>

                        </div>
                    </div>
                    </div>

                    <div class="slider-item" style="background-image: url(images/celulares1.jpg);">
                        <div class="overlay"></div>
                    <div class="container">
                        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">Celulares &amp; de las mejores Marcas</h1>
                            <h2 class="subheading mb-4">La mas alta calidad &amp; Seguridaad</h2>
                            <p><a href="#" class="btn btn-primary">Ver Detalles</a></p>
                        </div>

                        </div>
                    </div>
                    </div>
<!--
                    <div class="slider-item" style="background-image: url(images/iphone11.jpg);">
                        <div class="overlay"></div>
                    <div class="container">
                        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">¡Ya esta aqui!</h1>
                            <h2 class="subheading mb-4">El IPhone 11</h2>
                            <p><a href="#" class="btn btn-primary">Ver Detalles</a></p>
                        </div>

                        </div>
                    </div>
                    </div
                -->
                    
           
                
            </div>
            </section>

           


            <section class="ftco-section">
            <div class="container">
                    <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Productos En Promocion</span>
                <h2 class="mb-4">Telefonos</h2>
                
                </div>
            </div>   		
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($productos as $producto)
                       
                    
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="{{ action( 'ProductoController@show',$producto['id']) }}" class="img-prod"><img class="img-fluid" src="{{ asset('storage/'. $producto->url_imagen)}}" alt="Colorlib Template">
                                <span class="status">30%</span>
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">{{$producto->nombre_modelo}}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">L{{$producto->precio}}</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" >
                                            
                                        </a>
                                       <form action="{{route('carrito.guardar')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$producto['id']}}">

                                          <input type="hidden" name="nombre" value="{{$producto['nombre_modelo']}}">
                                          <input type="hidden" name="precio" value="{{$producto['precio']}}">
                                          <span class="add-to-cart d-flex justify-content-center align-items-center text-center"> 
                                          <span><i class="ion-ios-menu">
                                          <button  type="submit" ><span class="">                                           <span><i class="ion-ios-menu"></i></span>
                                          </button></i></span>
                                        </span>

                                        </form>

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
            </section>
            
      



@endsection
