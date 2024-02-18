<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button <button onclick="location.href='/factura/create'">Crear</button>
    <table border="1px">
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>nit</td>
            <td>telefono</td>
            <td>Acciones</td>
        </tr>
        @foreach ($vectorfacturas as $facturaActual)
            <tr>
                <td>{{$facturaActual->id}}</td>
                <td>{{$facturaActual->nombre}}</td>
                <td>{{$facturaActual->nit}}</td>
                <td>{{$facturaActual->telefono}}</td>
                <td>
                    <button>Actualizar</button>
                    <form action="/factura/{{$facturaActual->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" >Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>