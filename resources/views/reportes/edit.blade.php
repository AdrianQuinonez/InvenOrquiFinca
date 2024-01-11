@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Editar reporte
                </div>
                <div class="card-body">
                    <form action="{{ route('reportes.update', $reporte->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="row g-4">

                            <div class="form-group col-md-2">
                                <label for="">Nombre de la finca</label>
                                <select name="nombreF" id="nombreF" class="form-select" disabled>
                                    <option value="{{ $reporte->id }}">{{ $reporte->finca->nombre }}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Año</label>
                                <select name="year" id="year" class="form-select" disabled>
                                    <option value="{{ $reporte->year }}">{{ $reporte->year }}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Mes</label>
                                <select name="mes" id="mes" class="form-select" disabled>
                                    <option value="{{ $reporte->mes_id }}">{{ $reporte->mes->nombre }}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Higiene</label>
                                <select name="higiene" id="higiene" class="form-select">
                                    <option value="1" {{$reporte->higiene == 'x' ?  'selected' : ''}}>Sí</option>
                                    <option value="2" {{$reporte->higiene == '' ?  'selected' : ''}}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">DyV</label>
                                <select name="dyv" id="dyv" class="form-select">
                                    <option value="1" {{$reporte->dyv == 'x' ?  'selected' : ''}}>Sí</option>
                                    <option value="2" {{$reporte->dyv == '' ?  'selected' : ''}}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">VacunaA</label>
                                <select name="vacunaA" id="vacunaA" class="form-select">
                                    <option value="1" {{$reporte->vacunaA == 'x' ?  'selected' : ''}}>Sí</option>
                                    <option value="2" {{$reporte->vacunaA == '' ?  'selected' : ''}}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">VacunaR</label>
                                <select name="vacunaR" id="vacunaR" class="form-select">
                                    <option value="1" {{$reporte->vacunaR == 'x' ?  'selected' : ''}}>Sí</option>
                                    <option value="2" {{$reporte->vacunaR == '' ?  'selected' : ''}}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">VacunaC</label>
                                <select name="vacunaC" id="vacunaC" class="form-select">
                                    <option value="1" {{$reporte->vacunaC == 'x' ?  'selected' : ''}}>Sí</option>
                                    <option value="2" {{$reporte->vacunaC == '' ?  'selected' : ''}}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">VacunaL</label>
                                <select name="vacunaL" id="vacunaL" class="form-select">
                                    <option value="1" {{$reporte->vacunaL == 'x' ?  'selected' : ''}}>Sí</option>
                                    <option value="2" {{$reporte->vacunaL == '' ?  'selected' : ''}}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Anaplasma</label>
                                <select name="anaplasma" id="anaplasma" class="form-select">
                                    <option value="1" {{$reporte->anaplasma == 'x' ?  'selected' : ''}}>Sí</option>
                                    <option value="2" {{$reporte->anaplasma == '' ?  'selected' : ''}}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">ControlGyM</label>
                                <select name="controlGyM" id="controlGyM" class="form-select">
                                    <option value="1" {{$reporte->controlGyM == 'x' ?  'selected' : ''}}>Sí</option>
                                    <option value="2" {{$reporte->controlGyM == '' ?  'selected' : ''}}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">ControlM</label>
                                <select name="controlM" id="controlM" class="form-select">
                                    <option value="1" {{$reporte->controlM == 'x' ?  'selected' : ''}}>Sí</option>
                                    <option value="2" {{$reporte->controlM == '' ?  'selected' : ''}}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">ControlCyO</label>
                                <select name="controlCyO" id="controlCyO" class="form-select">
                                    <option value="1" {{$reporte->controlCyO == 'x' ?  'selected' : ''}}>Sí</option>
                                    <option value="2" {{$reporte->controlCyO == '' ?  'selected' : ''}}>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">VacasP</label>
                                <input type="number" class="form-control" name="vacasP" id="vacasP" value="{{ $reporte->vacasP }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">VacasE</label>
                                <input type="number" class="form-control" name="vacasE" id="vacasE" value="{{ $reporte->vacasE }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Terneros</label>
                                <input type="number" class="form-control" name="terneros" id="terneros" value="{{ $reporte->terneros }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">AnimalesE</label>
                                <input type="number" class="form-control" name="animalesE" id="animalesE" value="{{ $reporte->animalesE }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Vendidos</label>
                                <input type="number" class="form-control" name="vendidos" id="vendidos" value="{{ $reporte->vendidos }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Muertos</label>
                                <input type="number" class="form-control" name="muertos" id="muertos" value="{{ $reporte->muertos }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Prevención</label>
                                <textarea type="text" class="form-control" name="prevencion" id="prevencion" rows="3">{{ $reporte->prevencion }}</textarea>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Tratamiento</label>
                                <textarea type="text" class="form-control" name="tratamiento" id="tratamiento" rows="3">{{ $reporte->tratamiento }}</textarea>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="">Via</label>
                                <textarea type="text" class="form-control" name="via" id="via" rows="3">{{ $reporte->via }}</textarea>
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