<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <title>Pagina De Alumnos</title>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark text-white">
    <a class="navbar-brand" href="#">
        <img src="https://umg.edu.gt/assets/umg.png" width="40" height="40" alt="">
    </a>
    <a class="navbar-brand" >SISTEMA DE REGISTRO ESTUDIANTIL</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"> </ul>
        <li class="nav-link">
            <a  href=" {{ url('/alumno') }}" class="btn btn-outline-btn bg-info text-white " type="submit">Tabla de Datos</a>
        </li>
        <li class="nav-link">
            <a  href=" {{ url('/alumno/create') }}" class="btn btn-outline-btn bg-info text-white" type="submit">Creacion de Datos</a>
        </li>
        <li class="nav-link">
            <a  href=" {{ url('/categoria') }}" class="btn btn-outline-btn bg-info text-white" type="submit">Categoria</a>
        </li>
    </div>
</nav>
<div class="container mt-5"> @yield('content')
    <center>
        <a class=" container  navbar-center" href="#">
            <img src="https://umg.edu.gt/assets/umg.png" width="250" height="225" alt="">
        </a>
        <h1>Andrea Fernanda Nova López</h1>
        <h1>0909-19-19848</h1>
        <h1>Programación III</h1>
        <h1>Parcial I</h1>
        <h1> Tablas Relacionadas</h1>
    </center>
</div>
</body>
</html>
