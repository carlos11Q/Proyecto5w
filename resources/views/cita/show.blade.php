@extends('heredar.app')
@section('title', "Ver Cita")

@section('contenido')
    @section('sub', "Ver Cita")
   <ul>
        <li>
            Opcion: <strong>{{$cita->opcion() }}</strong>
        </li>
        <li>
            Cliente: <strong>{{$cita->cliente}}</strong>
        </li>
        <li>
            Fecha: <strong>{{$cita->fecha->format('d / m / y') }}</strong>
        </li>
        <li>
            Asunto: <strong>{{$cita->asunto }}</strong>
        </li>
        <li>
            Asesor: <strong>{{$cita->asesor }}</strong>
        </li>
        <li>
            Hora: <strong>{{$cita->hora }}</strong>
        </li>
   </ul>

   <hr>
   <div class="row">
    <div class="col sm-6">
        <form action="{{route('cita.destroy',$cita)}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-sm" type="submit">
                Borrar
            </button>
        </form>
    </div>
   </div>
    
@endsection