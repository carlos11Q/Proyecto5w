<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>@yield('title')</title>
</head>

<body class="bg-light">

    <div class="container shadow bg-white" >
        <div class="row">
            <div class="col-sm-12">
                <h1>
                    @yield('sub')
                </h1>
                
            </div>
           
            <div class="col-sm-12">
                <a href="{{route('cita.create')}}" class="btn btn-link">Crear Citas</a>
                <a href="{{route('cita.index')}}" class="btn btn-link">Lista de Citas</a>
            </div>
            <div class="col-sm-12">
                @yield('contenido')
            </div>
        </div>
        @extends('adminlte::page')
    </div>
    <style>
        
    </style>

</body>
</html>