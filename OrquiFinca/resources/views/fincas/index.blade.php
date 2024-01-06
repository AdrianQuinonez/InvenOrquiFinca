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
                </div>
            </div>
        </div>
    </div>
</body>

</html>