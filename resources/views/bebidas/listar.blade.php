@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trabajadores</div>

                <div class="card-body">
                    <a href="{{ route('bebidas.create') }}" class="btn btn-info text-white">Crear proveedor</a>
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
                        @foreach($bebidas as $bebida)
                        <tr>
                          <th>{{ $bebida->id }}</th>
                          <td>{{ $bebida->nombre_bebida }}</td>
                          <td>{{ $bebida->precio_bebida }}</td>
                          <td>{{ $bebida->tipo_bebida->nombre }}</td>
                          <td>
                            <a href="{{ route('bebidas.edit',$bebida->id) }}" class="btn btn-info">Editar</a>
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
