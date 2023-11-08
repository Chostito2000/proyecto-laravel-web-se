<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container"> 
        <h1>Lista de Productos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del Producto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Persona Asociada</th>
                    <th scope="col" class="text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <th scope="row">{{ $producto->productoID }}</th>
                        <td>{{ $producto->nombre_producto }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->persona->nombres }} {{ $producto->persona->paterno }} {{ $producto->persona->materno }}</td>
                        <td class="" style="text-align: center;">
                            <a href="{{ route('mostrar-producto', $producto->productoID) }}" type="button" class="btn btn-warning">Detalles</a>
                            <a href="{{ route('editar-producto', $producto->productoID) }}" type="button" class="btn btn-info">Editar</a>
                            <a href="{{ route('eliminar-producto', $producto->productoID) }}" type="button" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
</body>
@include('sweetalert::alert')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
