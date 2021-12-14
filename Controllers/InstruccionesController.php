<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstruccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instrucciones = [
                ['title'=>' #1 Iniciar laravel'],
                ['title'=>' #2 Ejecutar en el navegador: ada3.test'],
                ['title'=>' #3 Visualizar y explorar las opciones'],
                ['title'=>' #4 En Formulario: Escribir un nombre (No se aceptan campos vacios).'],
                ['title'=>' #5 Enviar y se dara la Bienvenida'],
        ];

        return view('instrucciones', compact('instrucciones'));
    }
}
