<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Fincas</title>
</head>

<body>
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
                                <input type="text" class="form-control" name="compra" id="compra" value="{{ $finca->compra }}">
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
</body>

</html>