@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trabajadores</div>

                <div class="card-body">
                    <form action="{{ route('platos.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Nombre Trabajador</label>
                        <input type="text" class="form-control" name="nombre_plato" placeholder="Nombre de trabajador" >
                      </div>
                      <div class="form-group">
                        <label>Apellido Paterno</label>
                        <input type="text" class="form-control" name="precio_plato" placeholder="Apellido Paterno de trabajador">
                      </div>
                      {{-- llave foranea de turno --}}
                      <div class="form-group">
                        <label>Turno</label>
                        <select name="id_plato" class="form-control">
                          @foreach($tipo_platos as $tipo_plato)
                          <option value="{{ $tipo_plato->id }}">{{ $tipo_plato->nombre_tipo_plato }}</option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">crear trabajadores</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
