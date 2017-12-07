<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Integrante;

class NotificarAmigoSecreto extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Integrante $integrante)
    {
        $this->integrante = $integrante;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Amigo secreto en ETAFASHION.COM")->view('emails.notificarAmigoSecreto')->with('integrante',$this->integrante);
    }
}
