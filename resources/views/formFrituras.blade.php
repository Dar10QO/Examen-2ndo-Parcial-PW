<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @vite('/js/app.js')
    @vite('/css/app.css')
</head>
<body>
    <div class="container">
        @session('exito')
            <div class="alert alert-success text-white">
                {{session('exito')}}
            <div>
        @endsession
    </div>

    <div class="container col-md-5">
        <h1 class="text-center text-success mt-5 mb-4">Registro Frituras</h1>

            <form action="{{route('registroFrituras')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre"  class="form-label">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" class="form-control" >
                    <small>{{$errors->first('nombre')}}</small>
                </div>

                <div class="mb-3">
                    <label for="sabor" class="form-label">Sabor(s): </label>
                    <input type="text" name="sabor" id="sabor" class="form-control" >
                    <small>{{$errors->first('sabor')}}</small>
                </div>

                <div class="mb-3">
                    <label for="peso" class="form-label">Peso: </label>
                    <input type="text" name="peso" id="peso" class="form-control"  >
                    <small>{{$errors->first('peso')}}</small>
                </div>

                <button type="" class="btn btn-primary "> Guardar Fritura</button>
            </form>
        </div>

</body>
</html>
