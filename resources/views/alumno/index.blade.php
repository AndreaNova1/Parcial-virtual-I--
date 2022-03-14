<!--mostrar las litas de empleados este es el indes-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<br>
<body>
    <div class="container">
        @if(Session::has('mensaje'))
            {{Session::get('mensaje')}}
        @endif
            <div>
                <a href="{{url('alumno/create')}}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Registrar Estudiantes
                </a>
            </div>
<br>
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
                    <th>Editar</th>
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

                            <a href="{{url('/alumno/'.$alumno->carne.'/edit')}}" class="btn btn-warning" >
                                <span class="fas fa-undo-alt"></span> Editar
                            </a>


                                <form action="{{url('/alumno/'.$alumno->carne)}}" method="post" class="d-inline">
                                    @csrf {{method_field('DELETE') }}
                                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas eliminar?')"
                                           value="Borrar">
                                </form>
                        </td>
                    </tr>
                        <!--sirve para borrar-->
                </tbody>
            @endforeach
        </table>
           </div>
</body>
</html>
