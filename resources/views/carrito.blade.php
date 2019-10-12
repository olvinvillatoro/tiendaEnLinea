@extends('layouts.app', ['pageSlug' => 'navegar'])

@section('content')




<div class="container">
    <div class="row">
    <div class="col-md-12 ftco-animate">
      <div class="card bg-secondary">
        <div class="cart-list">
            <table class="table">
                <thead class="thead-primary">
                    <tr class="text-center">
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Nombre Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">
                    @foreach (Cart::content() as $producto)
                        
                    
                  <td class="product-remove">
                  <form action="{{route('carrito.quitar',$producto->rowId)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn" type="submit"><span class="ion-ios-close"></span></button>
                    
                  </form>
                  </td>
                    
                   
                    
                    <td class="product-name">
                    <h3>{{$producto->name}}</h3>
                    <p></p>
                    </td>
                    
                    <td class="price">L{{$producto->price}}</td>
                    
                    <td class="quantity">
                        <div class="input-group mb-3">
                         <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                      </div>
                  </td>
                    
                    <td class="total">L{{$producto->price}}</td>
                  </tr>
                  @endforeach
                  <!-- END TR-->
                </tbody>
              </table>
          </div>
        </div>
    </div>
</div>

<div class="card bg-dark" style="">
<div class="row justify-content-center">
    
    
    <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
        <div class="cart-total mb-3">
            <h3>Total En El Carrito</h3>
            <p class="d-flex">
                <span>Subtotal</span>
                <span>L{{Cart::subtotal()}}</span>
            </p>
            <p class="d-flex">
                <span>Impuesto 15%</span>
            <span>L{{Cart::tax()}}</span>
            </p>
                <hr>
            <p class="d-flex total-price">
                <span>Total</span>
                <span>L{{Cart::total()}}</span>
            </p>
        </div>
      <p><a href="{{route('factura')}}" class="btn btn-primary py-3 px-4">Pagar</a></p>
    </div>
</div>
</div>
</div>

@endsection