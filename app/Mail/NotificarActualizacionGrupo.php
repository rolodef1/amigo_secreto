<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Integrante;
use App\Grupo;

class NotificarActualizacionGrupo extends Mailable
{
	use Queueable, SerializesModels;

	protected $integrante;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Integrante $integrante, Grupo $grupo)
    {
    	$this->integrante = $integrante;
    	$this->grupo = $grupo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	$amigo_secreto = Integrante::find($this->integrante->entrega_a);
    	return $this->subject("Noticias de tu grupo de amigo secreto")->view('emails.notificarActualizacionGrupo')->with('integrante',$this->integrante)->with('amigo_secreto',$amigo_secreto)->with('grupo',$this->grupo)->with('user',$this->grupo->user);
    }
}
