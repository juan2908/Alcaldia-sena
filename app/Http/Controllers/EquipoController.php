<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use App\Models\localidad;
use Illuminate\Http\Request;

class EquipoController extends Controller
{

    public function listarequipos(){
        $equipos = equipo::orderBy('localidad_id','DESC')->get();
        $localidades = localidad::all();
        return view('equipo.index', compact('equipos','localidades'));
    }

    public function crearequipos(){
        $localidades = localidad::all();
        return view('equipo.crear',compact('localidades'));
    }

    public function guardarequipos(Request $request){
        $request=equipo::create($request->all());
        return redirect()->route('equipo.index')->with([
            'message'=>'Equipo Registrado Correctamente',
            'type'=>'info'
        ]);
    }

    public function editarequipos($id){
        $equipo=equipo::find($id);
        $localidades=localidad::all();
        return view('equipo.editar',compact('equipo'),compact('localidades'));
    }
    public function actualizarequipos(Request $request,$id){
        $equipo=equipo::find($id)->update($request->all());
        return redirect()->route('equipo.index')->with([
            'message'=>'Equipo actualizado correctamente',
            'type'=>'warning'
        ]);
    }
    public function eliminarequipos($id){
        $equipo=equipo::find($id)->delete();
        return redirect()->route('equipo.index')->with([
            'message'=>'Equipo eliminado correctamente',
            'type'=>'danger'
        ]);
    }
}
