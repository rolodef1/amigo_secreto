<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Integrante;

class NotificarListaDeseos extends Mailable
{
    use Queueable, SerializesModels;

    protected $integrante;
    protected $shared_code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Integrante $integrante,$shared_code)
    {
        $this->integrante = $integrante;
        $this->shared_code = $shared_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Tu amigo secreto agrego productos a su lista de deseos")->view('emails.notificarListaDeseos')->with('integrante',$this->integrante)->with('shared_code',$this->shared_code);
    }
}
