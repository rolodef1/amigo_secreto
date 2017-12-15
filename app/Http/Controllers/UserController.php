<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificarLiderGrupo;

class UserController extends Controller
{
	public function notificarUsers(){
		$users = User::all();
		foreach ($users as $user) {
			Mail::to($user->email)->send(new NotificarLiderGrupo($user));
		}
	}
}
