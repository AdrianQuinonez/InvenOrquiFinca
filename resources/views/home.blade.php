@extends('layouts.main')
@section('contenido')
<div class="container">
    <div class="d-flex justify-content-start">
        <div class="col-md-max">
            <div class="card">
                <div class="card-header">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand">Ver Reporte</a>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ route('fincas.create') }}" class="btn btn-success btn-sm">Nueva finca</a>
                                <a href="{{ route('reportes.create') }}" class="btn btn-primary btn-sm">Nuevo reporte</a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    @include('fincas.datosF')
                    <div class="row g-4 my-2">
                        <div class="col-md-2">
                            <label for="nombre" class="form-label">Nombre de la finca</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" disabled value="{{ $finca?->nombre }}">
                        </div>
                        <div class="col-md-2">
                            <label for="nombre" class="form-label">Propietario</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" disabled value="{{ $finca?->propietario }}">
                        </div>
                        <div class="col-md-2">
                            <label for="nombre" class="form-label">Donde compra</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" disabled value="{{ $finca?->compra }}">
                        </div>
                        <div class="col-md-2">
                            <label for="nombre" class="form-label">Telefono</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" disabled value="{{ $finca?->telefono }}">
                        </div>
                    </div>

                    <table class="table table-success table-striped table-bordered">
                        <thead>
                            <th>Mes</th>
                            <th> Higiene </th>
                            <th> DyV </th>
                            <th> VA </th>
                            <th> VR </th>
                            <th> VC </th>
                            <th> VL</th>
                            <th> Anaplasma </th>
                            <th> CGyM </th>
                            <th> CM </th>
                            <th> CCyO </th>
                            <th> VP </th>
                            <th> VE </th>
                            <th> Terneros </th>
                            <th> AnimalesE </th>
                            <th> Vendidos </th>
                            <th> Muertos </th>
                            <th> Total </th>
                            <th> Acción </th>
                        </thead>
                        <tbody>
                            @foreach ($reporte as $item)
                            <tr>
                                <td>{{ $item->mes->nombre }}</td>
                                <td> {{ $item->higiene }} </td>
                                <td> {{ $item->dyv }} </td>
                                <td> {{ $item->vacunaA }} </td>
                                <td> {{ $item->vacunaR }} </td>
                                <td> {{ $item->vacunaC }} </td>
                                <td> {{ $item->vacunaL }} </td>
                                <td> {{ $item->anaplasma }} </td>
                                <td> {{ $item->controlGyM }} </td>
                                <td> {{ $item->controlM }} </td>
                                <td> {{ $item->controlCyO }} </td>
                                <td> {{ $item->vacasP }} </td>
                                <td> {{ $item->vacasE }} </td>
                                <td> {{ $item->terneros }} </td>
                                <td> {{ $item->animalesE }} </td>
                                <td> {{ $item->vendidos }} </td>
                                <td> {{ $item->muertos }} </td>
                                <td> {{ ($item->vacasP + $item->vacasE + $item->terneros + $item->animalesE ) -($item->vendidos + $item->muertos) }} </td>
                                <td>
                                    <a href="{{ route('reportes.edit', $item->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <strong>DyV:</strong> Desparacitacion y vitaminas, <strong>VA:</strong> Vacuna Aftosa, <strong>VR:</strong> Vacuna Reproductiva,<strong>VL:</strong> Vacuna Lestopira,
                    <strong>CGyM:</strong> Control de garrapatas y moscas, <br><strong>CM:</strong> Control de moscas, <strong>CCyO:</strong> Control de coccidiosis y otros,
                    <strong>VP</strong> : Vacas preñadas, <strong>VE:</strong> Vacas en espera, <strong>AnimalesE:</strong> Animales en espera, <br><strong>VacunasC:</strong> Vacuna del carbon,
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