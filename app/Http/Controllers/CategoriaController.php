<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['categoria'] = categoria::paginate(10);

        return view('Categoria.ListaCategoria', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Categoria.formCategoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validate($request,['descripcion'=>'required|string|max:45:categorias']);

        categoria::create([
            'descripcion' => $validator['descripcion'],
        ]);

        return redirect('/categoria')->with('categoriaGuardada', 'Categoria Guardada');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id_categoria)
    {
        $categoria = categoria::findOrFail($id_categoria);

        return view('Categoria.editCategoria', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_categoria)
    {
        $datoCategoria = request()->except((['_token', '_method']));
        categoria::where('id_categoria', '=', $id_categoria)->update($datoCategoria);

        return redirect('/categoria')->with('categoriaModificada', "La categoria a sido moficiada");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */

    public function destroy($id_categoria)
    {
        categoria::destroy($id_categoria);

        return redirect('/categoria')->with('categoriaEliminada', "Esta categoria a sido eliminada");
    }
}

