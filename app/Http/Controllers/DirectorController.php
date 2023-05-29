<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($sw)
    {
        $directores= Director::all()->where('activo','=',$sw);
        if($sw==1){
            return view('director/index',compact('directores'));
        }else{
            return view('director/eliminados',compact('directores'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('director/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $director= new Director();
        $director->nombre = $request->nombre;
        $director->apellidos = $request->apellidos;
        $director->edad = $request->edad;
        $director->ci = $request->ci;
        $director->genero = $request->genero;
        $director->direccion = $request->direccion;
        $director->telefono = $request->celular;
        $director->correo = $request->correo;

        $director->save();

        return redirect(route('director.index',1));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(Director $director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $director)
    {
        $director->nombre = $request->nombre;
        $director->apellidos = $request->apellidos;
        $director->edad = $request->edad;
        $director->ci = $request->ci;
        $director->genero = $request->genero;
        $director->direccion = $request->direccion;
        $director->telefono = $request->celular;
        $director->correo = $request->correo;

        $director->update();

        return redirect(route('director.index',1));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {
        $director->activo=0;
        $director->update();
        return redirect(route('director.index',1));
    }

    public function restore(Director $director)
    {
        $director->activo=1;
        $director->update();
        return redirect(route('director.index',0));
    }

    public function buscar(Director $director)
    {
        return view('director/editar',compact('director'));
    }
}
