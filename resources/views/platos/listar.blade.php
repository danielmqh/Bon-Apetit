@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trabajadores</div>

                <div class="card-body">
                    <a href="{{ route('platos.create') }}" class="btn btn-info text-white">Crear proveedor</a>
                    <br>
                    <br>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Precio</th>
                          <th scope="col">Tipo</th>
                          <th scope="col">Aciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($platos as $plato)
                        <tr>
                          <th>{{ $plato->id }}</th>
                          <td>{{ $plato->nombre_plato }}</td>
                          <td>{{ $plato->precio_plato }}</td>
                          <td>{{ $plato->tipo_plato->nombre_tipo_plato }}</td>
                          <td>
                            <a href="{{ route('platos.edit',$plato->id) }}" class="btn btn-info">Editar</a>
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
