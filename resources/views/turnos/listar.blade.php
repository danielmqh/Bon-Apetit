@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Turnos</div>

                <div class="card-body">
                    <a href="{{ route('turnos.create') }}" class="btn btn-info text-white">Crear turnos</a>
                    <br>
                    <br>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Hora Inicio</th>
                          <th scope="col">Hora Salida</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($turnos as $turno)
                        <tr>
                          <th>{{ $turno->id }}</th>
                          <td>{{ $turno->descripcion }}</td>
                          <td>{{ $turno->hora_inicio }}</td>
                          <td>{{ $turno->hora_salida }}</td>
                          <td>
                            <a href="{{ route('turnos.edit',$turno->id) }}" class="btn btn-info">Editar</a>
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
