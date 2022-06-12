<?php

namespace App\Http\Controllers;

use App\Models\registros;
use Illuminate\Http\Request;


class RegistrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['registros']=registros::paginate(1000);
        return view ('usuarios.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view ('usuarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $datosUsuarios = request()->all();
        $datosUsuarios = request()->except('_token');
        registros::insert($datosUsuarios);
        // return response()->json($datosUsuarios);
        // return view ('usuarios.crear');
        return redirect('usuarios')->with('mensaje','Usuario Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function show(registros $registros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $registros=registros::findOrFail($id);
        return view ('usuarios.editar', compact('registros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuarios = request()->except(['_token', '_method']);
        registros::where('id','=',$id)->update($datosUsuarios);
        $registros=registros::findOrFail($id);
        return view ('usuarios.editar', compact('registros'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        registros::destroy($id);
        return redirect('usuarios')->with('mensaje', 'Usuario Eliminado');
    }
}
