<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Fincas</title>
</head>

<body>
    <div class="container">
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