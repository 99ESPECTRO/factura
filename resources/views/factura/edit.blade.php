<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="/factura" method="post">
            @csrf
            @method('POST')
            <h2>Factura</h2>
            <h6>nit</h6>
            <input type="text" name="nit" value="{{$facturaActual->nit}}">
            <h6>nombre</h6>
            <input type="text" name="nombre" value="{{$facturaActual->nombre}}">
            <h6>telefono</h6>
            <input type="text" name="telefono" value="{{$facturaActual->telefono}}">
            <h2>Detalle</h2>
            @foreach ($vectorDeProductos as $productoActual)
                @php
                    $detalle2 = $detalles->pluck("producto_id")->toArray();
                @endphp
                @if (in_array($productoActual->id, $detalle2))
                    @php
                        $posicion = array_search($productoActual->id, $detalle2);
                        $detalleDeseadoxD = $detalles[$posicion];
                    @endphp
                    <h5>{{$productoActual->nombre}}</h5>
                    <p>cantidad<input type="number" value="{{$detalleDeseadoxD->cantidad}}" name="{{$productoActual->nombre}}-cantidad"></p>
                    <p>precio<input type="number" value="{{$detalleDeseadoxD->precio_unitario}}"  name="{{$productoActual->nombre}}-precio"></p>
                @else
                    <h5>{{$productoActual->nombre}}</h5>
                    <p>cantidad<input type="number" name="{{$productoActual->nombre}}-cantidad"></p>
                    <p>precio<input type="number" name="{{$productoActual->nombre}}-precio"></p>
                @endif
                
            @endforeach
            <button type="submit">Guardar</button>
        </form>
</body>
</html>