<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ConactosMailable;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    //
    //muestra el formulario
    public function index()
    {
        # code...
        return view('contactanos.index');
    }
    //procesar formularo y enviar el correo electrnico
    // le enviamos el request que contiene todos los datos del form
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'contenido' => 'required'
        ]);
        # se lo pasamos al constructor
        $correo = new ConactosMailable($request->all());
        // correo al que se va a mandar la info
        Mail::to('atellov1@upao.edu.pe')->send($correo);
        //le pasamos un mensaje de sesión con el with
        return redirect()->route('contactanos.index')->with('info','Mensaje enviado');
    }
}
