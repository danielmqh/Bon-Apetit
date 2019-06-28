@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trabajadores</div>

                <div class="card-body">
                    <form action="{{ route('bebidas.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Nombre Trabajador</label>
                        <input type="text" class="form-control" name="nombre_bebida" placeholder="Nombre de trabajador" >
                      </div>
                      <div class="form-group">
                        <label>Apellido Paterno</label>
                        <input type="text" class="form-control" name="precio_bebida" placeholder="Apellido Paterno de trabajador">
                      </div>
                      {{-- llave foranea de tipo bebida --}}
                      <div class="form-group">
                        <label>Tipo Bebida</label>
                        <select name="id_bebi" class="form-control">
                          @foreach($tipo_bebidas as $tipo_bebida)
                          <option value="{{ $tipo_bebida->id }}">{{ $tipo_bebida->nombre }}</option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">crear bebidas</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
