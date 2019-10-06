<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Factura</title>
</head>
<body>

<div class="container">
    <div class="text-center">
         <h1>Factura</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <!-- <h3 class="panel-title">Cabecera</h3> -->
					<hr>
                    <div class="row" style="background-color:green;">
                        
                        
                    </div> <!-- row -->
<table class="table table-dark">
  <thead>
    <tr>
  
      <th scope="col">ID Factura</th>
      <th scope="col">ID Carrito</th>
      <th scope="col">TOTAL</th>
      <th scope="col">FECHA</th>
      <th scope="col">ID Cliente</th>
      <th scope="col">Numero de Tarjeta</th>
      <th scope="col">Titular</th>
     
     
    </tr>
  </thead>
  <tbody>
  @foreach($facturas as $factura)
    <tr>
      
     
      <td>{{$factura->id_factura}}</td>
      <td>{{$factura->id_carrito}}</td>
      <td>{{$factura->total}}</td>
      <td>{{$factura->fecha}}</td>
      <td>{{$factura->id_cliente}}</td>
      <td>{{$factura->numero_tarjeta}}</td>
      <td>{{$factura->titular}}</td>
    
      
      
     
    </tr>
   @endforeach
  </tbody>
</table>
</body>
</html>