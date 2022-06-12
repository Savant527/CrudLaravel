<form action="{{ url('/usuarios/'.$registros->id ) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('usuarios.formulario');

</form>