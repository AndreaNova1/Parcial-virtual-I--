@section('navbar')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="cold-md-11">
                <h1 class="text-center mb-5">Categoria</h1>

                <a class="btn btn-outline-success mb-3 " href="{{url('/categoria/create')}}">AGREGAR</a>


                <div class="col-xl-30">
                    <table class="table table-dark table-hover text-dark">
                        <thead>
                        <tr style="background-color: #ABEBC6;">
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>

                        <tbody style="background-color: #1D9283 ;">
                        @foreach($categoria as $categorias)
                            <tr>
                                <td class="text-white text-center">{{$categorias->id_categoria}}</td>
                                <td class="text-white">{{$categorias->descripcion}}</td>
                                <td>

                                    <div class="btn-group">

                                        <a href="{{route('categoria.edit', $categorias->id_categoria) }}" class="btn btn-primary mb-3 mr-2">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <form action="{{ route('categoria.destroy', $categorias->id_categoria)}}" method="POST">
                                            @csrf @method('DELETE')

                                            <button type="submit" onclick="return confirm('¿Desea eliminar al alumno?');" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                        </form>
                                    </div>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>

                <!--paginas-->
                {{ $categoria->links() }}

            </div>
        </div>
    </div>

@endsection
