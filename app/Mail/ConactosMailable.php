<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConactosMailable extends Mailable
{
    use Queueable, SerializesModels;
    //definir los elementos a enviar
    public $subject = "información de contacto";
    
    //tenemos que declararla pra usarla en todas partes
    public $contacto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    // recibimos los datos del contacto aquí, debido que si los declaramos aquí se puede usar en la vista cotactos y enviar al correo
    public function __construct($contacto)
    {
        //
        $this->contacto=$contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contactos');
    }
}
