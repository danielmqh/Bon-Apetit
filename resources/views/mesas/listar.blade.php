@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mesas</div>

                <div class="card-body">
                    <a href="{{ route('mesas.create') }}" class="btn btn-info text-white">Crear mesas</a>
                    <br>
                    <br>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Numero</th>
                          <th scope="col">Sillas</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($mesas as $proveedor)
                        <tr>
                          <th>{{ $proveedor->id }}</th>
                          <td>{{ $proveedor->num_mesa }}</td>
                          <td>{{ $proveedor->cantidad_silla_mesas }}</td>
                          <td>{{ $proveedor->descripcion }}</td>
                          <td>
                            <a href="{{ route('mesas.edit',$proveedor->id) }}" class="btn btn-info">Editar</a>
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
