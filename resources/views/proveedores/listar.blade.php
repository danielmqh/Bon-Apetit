@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Proveedores</div>

                <div class="card-body">
                    <a href="{{ route('proveedores.create') }}" class="btn btn-info text-white">Crear proveedores</a>
                    <br>
                    <br>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Direccion</th>
                          <th scope="col">Telefono</th>
                          <th scope="col">Email</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($proveedores as $proveedor)
                        <tr>
                          <th>{{ $proveedor->id }}</th>
                          <td>{{ $proveedor->nombre_proveedor }}</td>
                          <td>{{ $proveedor->direccion_proveedor }}</td>
                          <td>{{ $proveedor->telefono_proveedor }}</td>
                          <td>{{ $proveedor->email_proveedor }}</td>
                          <td>
                            <a href="{{ route('proveedores.edit',$proveedor->id) }}" class="btn btn-info">Editar</a>
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
