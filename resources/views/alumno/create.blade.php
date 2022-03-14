<!--formulario de creacion de empleados este es el create-->
<!--con url indicamos a donde enviaremos los datos-->
<div class="card-body">
<div class="container align-content-center">
<form action="{{url('/alumno')}}" method="post" enctype="multipart/form-data" >
@csrf
    <div class="box box-info padding-1">

        <div class="box-footer mt-8">
            @include('alumno.form', ['modo'=>'Crear']);

        </div>
    </div>

</form>
</div>
</div>

