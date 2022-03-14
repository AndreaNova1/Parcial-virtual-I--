<!--mostrar las litas de empleados este es el indes-->

    <div class="container">

@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif
<a href="{{url('alumno/create')}}">Registrar estudiantes</a>
    <div class="col-xl-30">
<table class="table table-bordered table-striped text-center">
    <thead class="thead-light">
    <tr class="border border-info" style="background-color: #5FBFB5">
    <!--columnas y datos-->
        <th>Carne</th>
        <th>Nombre</th>
        <th>Alias</th>
        <th>Foto</th>
        <th>Correo</th>
        <th>Fecha de nacimiento</th>
        <th>Telefono</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
        @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->carne}}</td>
                <td>{{ $alumno->nombre}}</td>
                <td>{{ $alumno->alias}}</td>

                <td> <!--//accedemos a la carpeta donde esta la imagen-->
                    <img src="{{asset('storage').'/'.$alumno->Foto }}" class="img-fluid img-thumbnail"  width="100px" high="100px">
                </td>
                <td>{{ $alumno->correo}}</td>
                <td>{{ $alumno->fecha_nacimiento}}</td>
                <td>{{ $alumno->telefono}}</td>
                <td>
                    <a href="{{url('/alumno/'.$alumno->carne.'/edit')}}">
                        Editar
                    </a>

                <!--sirve para borrar-->

                    <form action="{{url('/alumno/'.$alumno->carne)}}" method="post">
                        @csrf {{method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Deseas eliminar?')"
                        value="Borrar">
                    </form>
                </td>
        </tbody>
    @endforeach
</table>
    </div>
    </div>
