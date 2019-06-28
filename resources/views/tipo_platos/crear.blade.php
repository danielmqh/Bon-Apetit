@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Respuestas</div>

                <div class="card-body">
                    <form action="{{ route('tipo_platos.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre_tipo_plato" placeholder="nombre del plato">
                      </div>
                      <button type="submit" class="btn btn-primary">crear cargos</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
