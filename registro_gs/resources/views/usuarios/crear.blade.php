<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/resources/css/estilos.css">
    <title>Crear Usuarios</title>
</head>
<body class="py-3">
<main class="container contenedor-2">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <center><h4 class="titulo">Crear Nuevo Usuario</h4></center>
                    <center> 
                        <img src="{" alt="" width="100">
                    </center>
                </div>
            </div>
                <br>
            <div class="row">
                <div class="col">
                    <form class="row g-3" action="{{ url('/usuarios') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('usuarios.formulario');

                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>