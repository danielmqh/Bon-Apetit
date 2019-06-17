@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trabajadores</div>

                <div class="card-body">
                    <a href="{{ route('trabajadores.create') }}" class="btn btn-info text-white">Crear proveedor</a>
                    <br>
                    <br>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Apellido</th>
                          <th scope="col">C.I.</th>
                          <th scope="col">Cargo</th>
                          <th scope="col">Turno</th>
                          <th scope="col">Aciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($trabajadores as $trabajador)
                        <tr>
                          <th>{{ $trabajador->id }}</th>
                          <td>{{ $trabajador->nombre }}</td>
                          <td>{{ $trabajador->ap_paterno }}</td>
                          {{-- <td>{{ $trabajador->ap_materno }}</td> --}}
                          <th>{{ $trabajador->ci }}</th>
                          {{-- <td>{{ $trabajador->genero }}</td> --}}
                          {{-- <td>{{ $trabajador->correo }}</td> --}}
                          {{-- <td>{{ $trabajador->telefono }}</td> --}}
                          <td>{{ $trabajador->cargo->nombre_cargo }}</td>
                          <td>{{ $trabajador->turno->descripcion }}</td>
                          <td>
                            <a href="{{ route('trabajadores.edit',$trabajador->id) }}" class="btn btn-info">Editar</a>
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
