<?php

namespace App\Http\Controllers;

use App\Models\localidad;
use Illuminate\Http\Request;

class LocalidadController extends Controller
{
    public function index(){
        return view('index');
    }

    public function localidadesIndex(){

        return view('localidad.Index');

    }

    public function localidadesListar(){

        $localidad = localidad::orderBy('localidad','ASC')->get();

        return view('localidad.Index', compact('localidad'));

    }

    public function crearlocalidad(){
        return view('localidad.crear');
    }
    public function guardarlocalidad(Request $request)
    {
        $localidad = localidad::create($request->all());
        return redirect()->route('localidad.listar')->with([
            'message' => 'Localidad Registrada Correctamente',
            'type' => 'info'
        ]);
    }
    public function editarlocalidad($id)
    {
        $localidad = localidad::find($id);
        return view('localidad.editar',compact('localidad'));
    }

    public function actualizarlocalidad(Request $request, $id)
    {
        $localidad=localidad::find($id)->update($request->all());
        return redirect()->route('localidad.listar')->with([
            'message'=>'Localidad actualizada correctamente',
            'type'=>'warning'
        ]);
    }
    public function eliminarlocalidad($id){
        $localidad = localidad::find($id)->delete();
        return redirect()->route('localidad.listar')->with([
            'message'=>'Localidad Eliminarada correctamente',
            'type'=>'danger'
        ]);
    }
}
