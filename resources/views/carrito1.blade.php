@extends('layouts.app', ['page' => __('Carrito'), 'pageSlug' => 'Carrito'])


@section('content')


<li class="active"><a href="{{route('factura')}}">Generar Factura</a></li>
<hr>
			

<table class="table">
    <thead>
        <tr>
            
            <!--<th>Producto</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>-->
            
            <th>ID Carro</th>
            <th>ID Client</th>
            <th>Fecha</th>
            <th class="text-right">Eliminar</th>
        </tr>
    </thead>
    <tbody>
    @foreach($carritos as $carrito)
        <tr>
           
            <td>{{$carrito->id_carrito}}</td>
            <td>{{$carrito->id_cliente}}</td>
            <td>{{$carrito->fecha}}</td>
            <td class="td-actions text-right">
                
                <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

