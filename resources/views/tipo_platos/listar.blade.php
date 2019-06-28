@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cargos</div>

                <div class="card-body">
                    <a href="{{ route('tipo_platos.create') }}" class="btn btn-info text-white">Crear cargos</a>
                    <br>
                    <br>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($tipo_platos as $tipo_plato)
                        <tr>
                          <th>{{ $tipo_plato->id }}</th>
                          <td>{{ $tipo_plato->nombre_tipo_plato }}</td>
                          <td>
                            <a href="{{ route('tipo_platos.edit',$tipo_plato->id) }}" class="btn btn-info">Editar</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
