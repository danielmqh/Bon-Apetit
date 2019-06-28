@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trabajadores</div>

                <div class="card-body">
                    <a href="{{ route('batender.create') }}" class="btn btn-info text-white">Crear proveedor</a>
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
                        @foreach($batender as $batender)
                        <tr>
                          <th>{{ $batender->id }}</th>
                          <td>{{ $batender->bebida->nomnbre_bebida }}</td>
                          <td>{{ $batender->trabajador->nombre }}</td>
                          <td>
                            <a href="{{ route('batender.edit',$batender->id) }}" class="btn btn-info">Editar</a>
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
