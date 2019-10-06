<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Productos en Carrito</title>
</head>
<body>


<section id="cart_items">{{--Breadcumbs y Tabla--}}
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  
				  <li class="active"><a href="{{route('factura')}}">Generar Factura</a></li>
				</ol>
			</div>
			<table class="table table-sm table-dark">
  <thead>
    <tr>
     
     
      <th scope="col">id carrito</th>
      <th scope="col">id cliente</th>
      <th scope="col">fecha</th>
      
      
    </tr>
  </thead>
  <tbody>
  @foreach($carritos as $carrito)

  
    <tr>
    
     
      <td class="table-primary">{{$carrito->id_carrito}}</td>
      <td class="table-primary">{{$carrito->id_cliente}}</td>
      <td class="table-primary">{{$carrito->fecha}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
    
</body>
</html>