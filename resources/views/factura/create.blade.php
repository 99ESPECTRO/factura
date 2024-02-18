<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="/factura" method="post">
            @csrf
            @method('POST')
            <h2>Factura</h2>
            <h6>nit</h6>
            <input type="text" name="nit">
            <h6>nombre</h6>
            <input type="text" name="nombre">
            <h6>telefono</h6>
            <input type="text" name="telefono">
            <h2>Detalle</h2>
            @foreach ($vectordeproductos as $productoActual)
            <h5>{{$productoActual->nombre}}</h5>
            <p>cantidad<input type="number" name="{{$productoActual->nombre}}-cantidad"></p>
            <p>precio<input type="number" name="{{$productoActual->nombre}}-precio"></p>
            @endforeach
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>

</html>