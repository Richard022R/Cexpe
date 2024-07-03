<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido;

class ContactoController extends Controller
{
    public function store(){
        $mensaje = request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required|min:3',
        ],[
            'nombre.required' => 'Ingresa tu NOMBRE',
            'email.required' => 'Ingresa tu CORREO',
            'asunto.required' => 'Ingresa tu ASUNTO',
            'mensaje.required' => 'Ingresa tu MENSAJE',
        ]);
        Mail::to('ricardomcm022@gmail.com')->send(new MensajeRecibido($mensaje));
        return new MensajeRecibido($mensaje);
        //return 'Mensaje enviado';
    }
}