<!--formulario que tendra los datos en comun con create y edit-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Creacion de Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<body>


    <div class="col-md-1 mt-1"></div>
<div class="card-header border-success text-center" style="background-color: #3193A5"; >AGREGAR ESTUDIANTE</div>
<div class="card-body" style="background-color: #C6F1F9;">

    <div class="form-group">
        <label for="Carne">Carné</label> <!--se utiliza para capturar el dato-->
        <input type="text" class="form-control" name="Carne" value="{{ isset($alumno->carne)?$alumno->carne:''}}" id="Carne">
    </div>
<br>
    <div class="form-group">
        <label for="Nombre">Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="{{ isset($alumno->nombre)?$alumno->nombre:''}}" id="Nombre">
    </div>
<br>
    <div class="form-group">
        <label for="Alias">Alias</label>
        <input type="text" class="form-control" name="Alias" value="{{ isset($alumno->alias)?$alumno->alias:''}}" id="Alias">
    </div>
<br>
    <div class="form-group">
        <label for="Foto"> Foto</label>
        @if(isset($alumno->Foto))
        <img src="{{asset('storage').'/'.$alumno->Foto}}" width="100px" att="">
        @endif
        <input type="file" class="form-control" name="Foto" value="" id="Foto" >
    </div>
<br>
    <div class="form-group">
        <label for="Correo">Correo</label>
        <input type="text" class="form-control" name="Correo" value="{{ isset($alumno->correo)?$alumno->correo:''}}" id="Correo">
    </div>
    <br>
    <div class="form-group">
        <label for="Fecha">Fecha de Nacimiento</label>
        <input type="date" class="form-control" name="Fecha_nacimiento" value="{{ isset($alumno->fecha_nacimiento)?$alumno->fecha_nacimiento:''}}" id="Fecha_nacimiento">
    </div>
    <br>
    <div class="form-group">
        <label for="Telefono">Telefono</label>
        <input type="text" class="form-control" name="Telefono" value="{{ isset($alumno->telefono)?$alumno->telefono:''}}" id="telefono"  >
    </div>
    <br>
        <div>

                <input class="btn btn-success" type="submit" value="{{$modo}} datos">

                <a class="btn btn-primary" href="{{url('/alumno')}}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span>Regresar</a>
        </div>
    </div>
    </div>
</body>
</html>
