<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Carrera;
use App\Materias;
use App\Temas;

use App\Http\Controllers\Controller;

class UASController extends Controller
{
    function index(){
    	$carreras = Carrera::all();
        $id=null;
    	return view('inicio', compact('carreras', 'id'));
    }

    function materias($id){
        $carreras = Carrera::all();
        $carrera=Carrera::find($id);
        $materias = Materias::where('id_carrera', '=', $id)->get();
        return view('materias', compact('carreras', 'carrera', 'materias', "id"));
    }

    public function generarPDF($idMateria){
        $materia=Materias::find($idMateria);
        $carrera=Carrera::find($materia->id_carrera);
        $temas = Temas::where('id_materia', '=', $idMateria)->get();
        $view=\View::make('materiasPDF', compact('materia', 'carrera', 'temas'))->render();

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Materias');
    }
}
