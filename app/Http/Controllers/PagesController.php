<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class PagesController extends Controller
{
    public function fnIndex() {
        return view('welcome');
    }

    public function fnRegistrar(Request $request){

        //return $request->all();         //Prueba de "token" y datos recibidos

        $request ->validate([
            'CodEst' => 'required',
            'NomEst' => 'required',
            'ApeEst' => 'required',
            'fnaEst' => 'required',
            'TurMat' => 'required',
            'SemMat' => 'required',
            'EstMat' => 'required'
        ]);

        $nuevoEstudiante = new Estudiante;
        $nuevoEstudiante->CodEst = $request->CodEst;
        $nuevoEstudiante->NomEst = $request->NomEst;
        $nuevoEstudiante->ApeEst = $request->ApeEst;
        $nuevoEstudiante->fnaEst = $request->fnaEst;
        $nuevoEstudiante->TurMat = $request->TurMat;
        $nuevoEstudiante->SemMat = $request->SemMat;
        $nuevoEstudiante->EstMat = $request->EstMat;
        
        $nuevoEstudiante->save();
        
        //$xAlumnos = Estudiante1::all();                      //Datos de BD
        //return view('pagLista', compact('xAlumnos'));        //Pasar a pagLista
        return back()->with('msj','Se registro con éxito...'); //Regresar con msj
    }

    public function fnEstActualizar ($id) {                 //ACTUALIZAR. PASO 1/2
        $xActAlumnos = Estudiante::findOrFail($id); 
        return view('Estudiante.pagActualizar', compact('xActAlumnos'));
    }


    public function fnUpdate(Request $request, $id){        //Paso 2

        //return $request->all();         //Prueba de "token" y datos recibidos

        $xUpdateAlumnos = Estudiante::findOrFail($id);

        $xUpdateAlumnos->CodEst = $request->CodEst;
        $xUpdateAlumnos->NomEst = $request->NomEst;
        $xUpdateAlumnos->ApeEst = $request->ApeEst;
        $xUpdateAlumnos->fnaEst = $request->fnaEst;
        $xUpdateAlumnos->TurMat = $request->TurMat;
        $xUpdateAlumnos->SemMat = $request->SemMat;
        $xUpdateAlumnos->EstMat = $request->EstMat;
        
        $xUpdateAlumnos->save();
        
        //$xAlumnos = Estudiante1::all();                        //Datos de BD
        //return view('pagLista', compact('xAlumnos'));          //Pasar a pagLista
        return back()->with('msj','Se actualizó con éxito...');  //Regresar con msj
    }

    public function fnEliminar ($id) {
        $deleteAlumno = Estudiante::findOrFail($id);
        $deleteAlumno->delete();
        return back()->with('msj', 'Se eliminó con éxito...');
    }

    public function fnEstDetalle($id) {
        $xDetAlumnos = Estudiante::findOrFail($id);     //DAtos de base de datos por id
        return view('Estudiante.pagDetalle', compact('xDetAlumnos'));
    }

    public function fnLista() {
        $xAlumnos = Estudiante::all();    //datos de db
        return view('dashboard', compact('xAlumnos'));
    }
     
    public function fnGaleria ($numero=69) {
        //return "FOTO DE CODIGO: ".$numero ;
        return view('pagGaleria', ['valor'=>$numero, 'otro'=>132]);
    }


}