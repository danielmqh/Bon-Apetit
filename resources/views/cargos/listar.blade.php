@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cargos</div>

                <div class="card-body">
                    <a href="{{ route('cargos.create') }}" class="btn btn-info text-white">Crear cargos</a>
                    <br>
                    <br>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Sueldo</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($cargos as $cargo)
                        <tr>
                          <th>{{ $cargo->id }}</th>
                          <td>{{ $cargo->nombre_cargo }}</td>
                          <td>{{ $cargo->sueldo }}</td>
                          <td>
                            <a href="{{ route('cargos.edit',$cargo->id) }}" class="btn btn-info">Editar</a>
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
