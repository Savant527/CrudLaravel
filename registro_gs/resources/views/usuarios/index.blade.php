<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Registro Grupo Scout León Blanco 662</title>
</head>

<body class="py-3">
    <main class="container">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col-12 titulo">
                    <center>
                        <h4 class="titulo">Usuarios Registrados Grupo Scout León Blanco 662
                            @if(Session::has('mensaje'))
                            {{ Session::get('mensaje') }}
                            @endif
                            <a href="{{ url('usuarios/create') }}" class="btn boton float-right">Nuevo Registro</a>
                        </h4>
                    </center>
                    <center>
                        <img src="" alt="" width="100">
                    </center>
                </div>
            </div>
    </main>
    <div class="contenerdor">

        <div class="row py-3 contenedor">
            <div class="col">
                <table class="table table-hover table-sm contenedor-1">
                    <thead class="d-print-table-row text-center align-middle fw-bold">
                        <tr>
                            <th>ID</th>
                            <th>Tipo de documento</th>
                            <th>No. Documento</th>
                            <th>Nombres</th>
                            <th>Primer apellido</th>
                            <th>Segundo apellido</th>
                            <th>Fecha de nacimiento</th>
                            <th>Ciudad</th>
                            <th>Sexo</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>RH</th>
                            <th>EPS</th>
                            <th>Correo</th>
                            <th>Contraseña</th>
                            <th>Rama</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>

                    <tbody class="d-print-table-row text-center align-middle fw-bold">
                        @foreach( $registros as $valor )
                        <tr>
                            <td>{{$valor->id}}</td>
                            <td>{{$valor->tipodoc}}</td>
                            <td>{{$valor->documento}}</td>
                            <td>{{$valor->nombres}}</td>
                            <td>{{$valor->apellido1}}</td>
                            <td>{{$valor->apellido2}}</td>
                            <td>{{$valor->fecha_nacimiento}}</td>
                            <td>{{$valor->ciudad}}</td>
                            <td>{{$valor->sexo}}</td>
                            <td>{{$valor->telefono}}</td>
                            <td>{{$valor->direccion}}</td>
                            <td>{{$valor->rh}}</td>
                            <td>{{$valor->eps}}</td>
                            <td>{{$valor->correo}}</td>
                            <td>{{$valor->contrasena}}</td>
                            <td>{{$valor->rama}}</td>
                            <td>
                                <a href="{{ url('/usuarios/'.$valor->id.'/edit') }}">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <form action="{{ url('/usuarios/'.$valor->id ) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn boton-eliminar" onclick="return confirm('¿Quieres eliminar este Usuario?')" value="Eliminar">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>

</html>