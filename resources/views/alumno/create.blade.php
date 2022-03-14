<!--formulario de creacion de empleados este es el create-->
<!--con url indicamos a donde enviaremos los datos-->

<div class="container align-content-center">
<form action="{{url('/alumno')}}" method="post" enctype="multipart/form-data" >
@csrf
@include('alumno.form', ['modo'=>'Crear']);
</form>
</div>

