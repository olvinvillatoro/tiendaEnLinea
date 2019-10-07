@extends('layouts.app', ['page' => __('Factura'), 'pageSlug' => 'Factura'])

@section('content')

<table class="table">
<h2>Detalles De Factura</h2>
    <thead>
        <tr>
            
            <!--<th>Producto</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>-->
            
            <th>ID Factura</th>
            <th>ID Carrito</th>
            <th>Total (L)</th>
            <th>Fecha</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($facturas as $factura)
        <tr>
           
            <td>{{$factura->id_factura}}</td>
            <td>{{$factura->id_carrito}}</td>
            <td>{{$factura->total}}</td>
            <td>{{$factura->fecha}}</td>
            
        </tr>
        
        @endforeach
        

    </tbody>
   
</table>


@endsection


