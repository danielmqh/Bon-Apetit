@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cargos</div>

                <div class="card-body">
                    <a href="{{ route('tipo_bebidas.create') }}" class="btn btn-info text-white">Crear cargos</a>
                    <br>
                    <br>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($tipo_bebidas as $tipo_bebida)
                        <tr>
                          <th>{{ $tipo_bebida->id }}</th>
                          <td>{{ $tipo_bebida->nombre }}</td>
                          <td>
                            <a href="{{ route('tipo_bebidas.edit',$tipo_bebida->id) }}" class="btn btn-info">Editar</a>
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
