<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<body>
    @session('exito')
        {{$value}}
    @endsession
    <h1 class="text-center text-success mt-5 mb-4">Registro Frituras</h1>

    <div class="container col-md-5">

    <form action="{{route('registroFrituras')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre"  class="form-label">Nombre: </label>
            <input type="text" name="nombre" id="nombre" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="sabor" class="form-label">Sabor(s): </label>
            <input type="text" name="sabor" id="sabor" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="peso" class="form-label">Peso: </label>
            <input type="text" name="peso" id="peso" class="form-control"  >
        </div>

        <button type="" class="btn btn-primary "> Guardar Fritura</button>
</div>

</body>
</html>
