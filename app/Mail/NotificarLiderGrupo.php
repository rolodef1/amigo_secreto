<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class NotificarLiderGrupo extends Mailable
{
	use Queueable, SerializesModels;

	protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
    	$this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	return $this->subject("Lider de amigo secreto en ETAFASHION.COM")->view('emails.notificarLiderGrupo')->with('user',$this->user);
    }
}
