@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Crear reporte
                </div>
                <div class="card-body">
                    @if (session('info'))
                    <div class="alert alert-danger">
                        {{ session('info') }}
                    </div>
                    @endif
                    <form action="{{ route('reportes.store') }}" method="POST">
                        @csrf
                        <div class="row g-4">

                            <div class="form-group col-md-2">
                                <label for="">Nombre de la finca</label>
                                <select name="nombreF" id="nombreF" class="form-select">
                                    <option value="">Nombre finca</option>
                                    @foreach ($fincas as $finca)
                                    <option value="{{ $finca->id }}">{{ $finca->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Año</label>
                                <select name="year" id="year" class="form-select">
                                    <option value="">Año reporte</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Mes</label>
                                <select name="mes" id="mes" class="form-select">
                                    <option value="">Select mes</option>
                                    @foreach ($meses as $mes)
                                    <option value="{{ $mes->id }}">{{ $mes->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Higiene</label>
                                <select name="higiene" id="higiene" class="form-select">
                                    <option value="1">Sí</option>
                                    <option value="2" selected>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">DyV</label>
                                <select name="dyv" id="dyv" class="form-select">
                                    <option value="1">Sí</option>
                                    <option value="2" selected>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">VacunaA</label>
                                <select name="vacunaA" id="vacunaA" class="form-select">
                                    <option value="1">Sí</option>
                                    <option value="2" selected>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">VacunaR</label>
                                <select name="vacunaR" id="vacunaR" class="form-select">
                                    <option value="1">Sí</option>
                                    <option value="2" selected>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">VacunaC</label>
                                <select name="vacunaC" id="vacunaC" class="form-select">
                                    <option value="1">Sí</option>
                                    <option value="2" selected>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">VacunaL</label>
                                <select name="vacunaL" id="vacunaL" class="form-select">
                                    <option value="1">Sí</option>
                                    <option value="2" selected>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Anaplasma</label>
                                <select name="anaplasma" id="anaplasma" class="form-select">
                                    <option value="1">Sí</option>
                                    <option value="2" selected>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">ControlGyM</label>
                                <select name="controlGyM" id="controlGyM" class="form-select">
                                    <option value="1">Sí</option>
                                    <option value="2" selected>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">ControlM</label>
                                <select name="controlM" id="controlM" class="form-select">
                                    <option value="1">Sí</option>
                                    <option value="2" selected>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">ControlCyO</label>
                                <select name="controlCyO" id="controlCyO" class="form-select">
                                    <option value="1">Sí</option>
                                    <option value="2" selected>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">VacasP</label>
                                <input type="number" class="form-control" name="vacasP" id="vacasP" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">VacasE</label>
                                <input type="number" class="form-control" name="vacasE" id="vacasE" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Terneros</label>
                                <input type="number" class="form-control" name="terneros" id="terneros" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">AnimalesE</label>
                                <input type="number" class="form-control" name="animalesE" id="animalesE" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Vendidos</label>
                                <input type="number" class="form-control" name="vendidos" id="vendidos" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Muertos</label>
                                <input type="number" class="form-control" name="muertos" id="muertos" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Prevención</label>
                                <textarea type="text" class="form-control" name="prevencion" id="prevencion" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Tratamiento</label>
                                <textarea type="text" class="form-control" name="tratamiento" id="tratamiento" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Via</label>
                                <textarea type="text" class="form-control" name="via" id="via" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar finca</button>
                        <a href="{{ route('fincas.show') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
                <div class="card-footer">
                    <strong>DyV:</strong> Desparacitacion y vitaminas, <strong>VacunaA:</strong> Vacuna Aftosa, <strong>VacunaR:</strong> Vacuna Reproductiva,<strong>VacunaL:</strong> Vacuna Lestopira,
                    <br><strong>ControlGyM:</strong> Control de garrapatas y moscas, <strong>ControlM:</strong> Control de moscas, <strong>ControlCyO:</strong> Control de coccidiosis y otros,
                    <br><strong>VacasP</strong> : Vacas preñadas, <strong>VacasE:</strong> Vacas en espera, <strong>AnimalesE:</strong> Animales en espera, <strong>VacunasC:</strong> Vacuna del carbon,
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