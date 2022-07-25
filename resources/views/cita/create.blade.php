@extends('heredar.app')
@section('title', "Crear Cita")

@section('contenido')
    @section('sub', "Agregar Nueva Cita")
    <form action="{{ route('cita.store') }}" method="POST">
       <x-cita-form-body/>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection