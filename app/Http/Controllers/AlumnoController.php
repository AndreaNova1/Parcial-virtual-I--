<?php

namespace App\Http\Controllers;


use App\Models\Alumno;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['alumnos']=Alumno::paginate(5);
        return view('alumno.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'Carne'=>'required|string|max:100',
            'Nombre'=>'required|string|max:100',
            'Alias'=>'required|string|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
            'Correo'=>'required|email',
            'Fecha_nacimiento'=>'required|date|max:100',
            'Telefono'=>'required|string|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Foto.requerid'=>'La foto es requerida'
        ];

        $this->validate($request, $campos,$mensaje);

        //$datosAlumno = $request->all();
        $datosAlumno = request()->except('_token');
        Alumno::insert($datosAlumno);
        //restriccion de fotografica
        if($request->hasFile('Foto')){
            $datosAlumno['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
       // return response()->json($datosAlumno);
        return  redirect('alumno')->with('mensaje','Alumno agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($carne)
    {
        $alumno=Alumno::findOrFail($carne);
        return view('alumno.edit', compact('alumno') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $carne)
    {
        $datosAlumno = request()->except(['_token', '_method']);

        if ($request->hasFile('Foto')) {
            $alumno = alumno::findOrFail($carne);
            Storage::delete('public/' .$alumno->Foto);
            $datosAlumno['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }
            alumno::where('carne', '=', $carne)->update($datosAlumno);
            $alumno = alumno::findOrFail($carne);
            return redirect('/alumno/')->with('AlumnoMoficicado', 'Estudiante Modificado');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($carne)
    {
        $alumno = alumno::findOrFail($carne);
        Alumno::destroy($carne);
        if (Storage::delete('public/' . $alumno->Foto)){
        }
        return redirect('/alumno')->with('mensaje','Alumno Borrado con exito');

    }
}
