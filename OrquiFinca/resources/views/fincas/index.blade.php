@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Listado de fincas
                    <a href="{{ route('fincas.create') }}" class="btn btn-success btn-sm float-end">Nueva finca</a>
                </div>
                <div class="card-body">
                    @if (session('info'))
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div>
                    @endif
                    <table class="table table-hover table-sm">
                        <thead>
                            <th> Nombre </th>
                            <th> Propietario </th>
                            <th> Donde compra </th>
                            <th> Telefono </th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            @foreach ($fincas as $finca)
                            <tr>
                                <td> {{$finca->nombre}} </td>
                                <td> {{$finca->propietario}} </td>
                                <td> {{$finca->compra}} </td>
                                <td> {{$finca->telefono}} </td>
                                <td>
                                    <a href="{{route('fincas.edit', $finca->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="javascript: document.getElementById('delete-{{$finca->id}}').submit()" class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                                <form id="delete-{{$finca->id}}" action="{{ route('fincas.destroy', $finca->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    Bienvenido {{ auth()->user()->name }}
                    <a href="javascript: document.getElementById('logout').submit()" class="btn btn-danger btn-sm float-end"> Cerrar sesión</a>
                    <form action="{{ route('logout') }}" id="logout" style="display: none;" method="post">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection