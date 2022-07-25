@csrf
<div class="row">
    <div class="col-sm-4">
        <label for="Select" class="form-label"></label>
        <select name="opcion" id="Select" class="form-select" placeholder="Selecciona una Opción">
            <option value="0">Selecciona una Opción</option>
            @for ($x = 0; $x < count($opcion); $x++)
            <option value = "{{$x}}" @selected(old('opcion'))>{{$opcion[$x]}}</option>
                
            @endfor
        </select>
        
    </div>

    <div class="col sm-12">
        <a href="{{route('cita.create')}}" class="btn btn-primary">+Agregar Cita</a>
    </div>

    <div class="col-sm-10">
        <label for="InputNombre" class="form-label"></label>
        <input type="text" name="cliente" id="InputNombre" class="form-control" placeholder="Cliente" value="{{old('cliente', $cita->cliente)}}">
    </div>

    <div class="col sm-4">
        <label for="InputFecha" class="form-label"></label>
        <input type="date" name="fecha" id="InputFecha" class="form-control" placeholder="Fecha" value="{{old('fecha', is_null($cita->fecha) ? '' : $cita->fecha->format('H:i:s'))}}">
    </div>

    <div class="col-sm-12">
        <label for="InputAsunto" class="form-label"></label>
        <input type="text" name="asunto" id="InputAsunto" class="form-control" placeholder="Asunto de Interes" value="{{old('asunto', $cita->asunto)}}">
    </div>

    <div class="col sm-4">
        <label for="InputHora" class="form-label"></label>
        <input type="time" name="hora" id="InputHora" class="form-control" placeholder="Hora" value="{{old('cliente', $cita->cliente)}}">
    </div>

    <div class="col-sm-10">
        <label for="InputAsesor" class="form-label"></label>
        <input type="text" name="asesor" id="InputAsesor" class="form-control" placeholder="Asesor Asignado" value="{{old('asesor', $cita->asesor)}}">
    </div>

    <div class="col sm-12 text-end my-2">
        <button type="submit" class="btn btn-primary">
            Guardar Cita
        </button>
    </div>
</div>