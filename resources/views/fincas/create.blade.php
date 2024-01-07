@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Crear finca
                </div>
                <div class="card-body">
                    <form action="{{ route('fincas.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre de la finca</label>
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                        <div class="form-group">
                            <label for="">Propietario</label>
                            <input type="text" class="form-control" name="propietario" id="propietario">
                        </div>
                        <div class="form-group">
                            <label for="">Donde compra</label>
                            <input type="text" class="form-control" name="donde_compra" id="donde_compra">
                        </div>
                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input type="number" class="form-control" name="telefono" id="telefono">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar finca</button>
                        <a href="{{ route('fincas.index') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection