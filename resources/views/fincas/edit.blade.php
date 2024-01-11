@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Editar finca
                </div>
                <div class="card-body">
                    <form action="{{ route('fincas.update', $finca->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre de la finca</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $finca->nombre }}">
                        </div>
                        <div class="form-group">
                            <label for="">Propietario</label>
                            <input type="text" class="form-control" name="propietario" id="propietario" value="{{ $finca->propietario }}">
                        </div>
                        <div class="form-group">
                            <label for="">Donde compra</label>
                            <input type="text" class="form-control" name="donde_compra" id="donde_compra" value="{{ $finca->compra }}">
                        </div>
                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input type="number" class="form-control" name="telefono" id="telefono" value="{{ $finca->telefono }}">
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