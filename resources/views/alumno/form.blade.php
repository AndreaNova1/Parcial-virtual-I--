<!--formulario que tendra los datos en comun con create y edit-->
<div class="display: flex">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
<form>
<div class="card-header border-success text-center text-white" style="background-color: #3193A5"; >AGREGAR ESTUDIANTE</div>

<div class="card-body" style="background-color: #C6F1F9;">
    <div class="row form-group">
        <label for="Carne">Carné</label> <!--se utiliza para capturar el dato-->
        <input type="text" name="Carne" value="{{ isset($alumno->carne)?$alumno->carne:''}}" id="Carne" class="form-control col-md-4">
    </div>
<br>

    <div class="row form-group">
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" value="{{ isset($alumno->nombre)?$alumno->nombre:''}}" id="Nombre" class="form-control col-md-4">
    </div>
<br>

    <div class="row form-group">
        <label for="Alias">Alias</label>
        <input type="text" name="Alias" value="{{ isset($alumno->alias)?$alumno->alias:''}}" id="Alias" class="form-control col-md-4">
    </div>
<br>

    <div class="row form-group">
        <label for="Foto"> Foto</label>
        @if(isset($alumno->Foto))
        <img src="{{asset('storage').'/'.$alumno->Foto}}" width="100px" att="">
        @endif
        <input type="file" name="Foto" value="" id="Foto" class="form-control col-md-4">
    </div>
<br>

    <div class="row form-group">
        <label for="Correo">Correo</label>
        <input type="text" name="Correo" value="{{ isset($alumno->correo)?$alumno->correo:''}}" id="Correo" class="form-control col-md-4">
    </div>
    <br>

    <div class="row form-group">
        <label for="Fecha">Fecha de Nacimiento</label>
        <input type="date" name="Fecha_nacimiento" value="{{ isset($alumno->fecha_nacimiento)?$alumno->fecha_nacimiento:''}}" id="Fecha_nacimiento" class="form-control col-md-4">
    </div>
    <br>

    <div class="row form-group">
        <label for="Telefono">Telefono</label>
        <input type="text" name="Telefono" value="{{ isset($alumno->telefono)?$alumno->telefono:''}}" id="telefono" class="form-control col-md-4" >
    </div>
    <br>

    <div class="row form-group">
        <button type="submit" class="btn btn col-md-3" style="background-color: #3193A5;">
        <input type="submit" value="{{$modo}} datos">
        </button>
        <p>
            <a href="{{url('/alumno')}}" class="btn btn-primary">
                <span class="fas fa-user-plus"></span>Agregar Alumno</a>
        </p>

    </div>
</div>

</form>
</div>
    </div>
</div>
