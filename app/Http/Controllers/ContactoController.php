<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    //
    public function index(){
        return view('contacto.index');
    }

    public function enviar(Request $request){

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);

        $correo = new ContactoMailable($request->all());
        Mail::to('bandeja@email.com.ar')->send($correo);

        return redirect()->route('contacto.index')->with('alerta', 'Mensaje enviado');
    }
}
