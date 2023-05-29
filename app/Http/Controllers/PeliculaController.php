<?php

namespace App\Http\Controllers;

use App\Models\Director;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($sw)
    {
       // $peliculas= Pelicula::all()->where('activo','=',$sw);

        $peliculas=Pelicula::select(
            'peliculas.*',
            'directors.nombre as nombre_director',
            'directors.apellidos as apellidos_director'
            )
         ->join('directors','directors.id','=','peliculas.id_director')
         ->orderBy('peliculas.created_at','desc')
         ->where('peliculas.activo','=',$sw)
         ->get();

        if($sw==1){
            return view('pelicula/index',compact('peliculas'));
        }else{
            return view('pelicula/eliminados',compact('peliculas'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directores= Director::all();
        return view('pelicula/create',compact('directores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelicula= new Pelicula();
        $pelicula->nombre = $request->nombre;
        $pelicula->categoria = $request->categoria;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->anio = $request->anio;
        $pelicula->id_director = $request->director;
        $pelicula->save();

        return redirect(route('pelicula.index',1));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        $pelicula->nombre = $request->nombre;
        $pelicula->categoria = $request->categoria;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->anio = $request->anio;
        $pelicula->id_director = $request->director;
        $pelicula->update();

        return redirect(route('pelicula.index',1));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->activo=0;
        $pelicula->update();
        return redirect(route('pelicula.index',1));
    }
    public function restore(Pelicula $pelicula)
    {
        $pelicula->activo=1;
        $pelicula->update();
        return redirect(route('pelicula.index',0));
    }
    public function buscar(Pelicula $pelicula)
    {
        $directores= Director::all();
        return view('pelicula/editar',compact('pelicula','directores'));
    }
}
