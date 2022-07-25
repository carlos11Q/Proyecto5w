@extends('heredar.app')
@section('title', "Editar Cita")

@section('contenido')
    @section('sub', "Editar Cita")
    <form action="{{ route('cita.update', $cita) }}" method="POST">
        @method('put')
        <x-cita-form-body :cita="$cita"/>
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