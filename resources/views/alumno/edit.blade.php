<!--formulario de edición de estudiantes-->
<form action="{{url('/alumno/'.$alumno->carne)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
@include('alumno.form', ['modo'=>'Editar']);
</form>
