@extends('heredar.app')
@section('title', "Lista")

@section('contenido')
<h2>Lista de Citas</h2>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Opcion
                </th>
                <th>
                    Cliente
                </th>
                <th>
                    Fecha
                </th>
                <th>
                    Asunto
                </th>
                <th>
                    Hora
                </th>
                <th>
                    Asesor
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cita as $cita )
                <tr>
                    <td>
                        {{ $cita->opcion()}}
                    </td>
                    <td>
                        {{ $cita->cliente}}
                    </td>
                    <td>
                        {{ $cita->fecha->format('d / m / y')}}
                    </td>
                    <td>
                        {{ $cita->asunto}}
                    </td>
                    <td>
                        {{ $cita->hora}}
                    </td>
                    <td>
                        {{ $cita->asesor}}
                    </td>
                    <td>
                        <a href="{{ route('cita.edit', $cita)}}">Editar Cita</a>
                        <a href="{{ route('cita.show', $cita)}}">Ver Cita</a>
                        <div class="row">
                            <div class="col sm-6 mb-2">
                                <form action="{{route('cita.destroy', $cita)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit" >
                                        Borrar
                                    </button>
                                </form>
                            </div>
                        </div> 

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection