<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificarAmigoSecreto;
use App\Mail\NotificarListaDeseos;
use App\User;
use App\Grupo;
use App\Integrante;
use Illuminate\Support\Facades\Log;

class IntegranteController extends Controller
{
	public function index($grupo_id){	
		$grupo = Grupo::find($grupo_id);
		return view('integrantes.index')->with('grupo',$grupo);
	}

	public function create($grupo_id){
		$grupo = Grupo::find($grupo_id);
		return view('integrantes.create')->with('grupo',$grupo);
	}

	public function store(Request $request,$grupo_id){		
		$this->validator($request->all())->validate();
		$email = $request->email;
		$grupo = Grupo::find($grupo_id);
		$grupo_filter = $grupo->integrantes->filter(function($value, $key) use ($email){
			if($email==$value->email){
				return true;
			}
		});
		if($grupo_filter->count()==0){
			$integrante = new Integrante($request->all());
			$integrante->grupo_id = $grupo_id;		
			$integrante->save();				
			return redirect()->route('integrantes.index',[$grupo_id]);
		}else{
			$request->session()->flash('status', 'El email ya esta registrado como integrante de este grupo');
			return redirect()->route('integrantes.create',[$grupo_id]);
		}		
	}

	public function show($id){
		$integrante = Integrante::find($id);		
		return view('integrantes.show')->with('integrante',$integrante);
	}

	public function edit($id){		
		$integrante = Integrante::find($id);		
		return view('integrantes.edit')->with('integrante',$integrante);
	}

	public function update(Request $request,$id,$grupo_id){	
		$this->validator($request->all())->validate();
		$email = $request->email;
		$grupo = Grupo::find($grupo_id);
		$grupo_filter = $grupo->integrantes->filter(function($value, $key) use ($email){
			if($email==$value->email){
				return true;
			}
		});

		if($grupo_filter->count()==0){
			$integrante = Integrante::find($id);
			$integrante->fill($request->all());				
			$integrante->save();				
			return redirect()->route('integrantes.index',[$grupo_id]);
		}else{
			$request->session()->flash('status', 'El email ya esta registrado como integrante de este grupo');
			return redirect()->route('integrantes.edit',[$id]);
		}
	}

	public function destroy($id,$grupo_id){	
		$integrante = Integrante::find($id);
		$integrante->delete();		
		return redirect()->route('integrantes.index',[$grupo_id]);
	}

	public function sortear($grupo_id){
		$grupo = Grupo::find($grupo_id);
		$not_in = [];
		$result_sorteo = [];
		foreach ($grupo->integrantes as $integrante) {
			$integrantes_sorteo = Integrante::where('id','<>',$integrante->id)->where('grupo_id',$grupo_id);
			if(count($not_in)>0){
				$integrantes_sorteo->whereNotIn('id', $not_in);
			}
			if($integrantes_sorteo->count()>0){
				$random = $integrantes_sorteo->get()->random();
				$result_sorteo[$integrante->id]=$random->id;
				$not_in[]=$random->id;
			}
		}
		if(count($result_sorteo)!=$grupo->integrantes->count()){
			$this->sortear($grupo_id);
		}else{
			foreach ($result_sorteo as $emisor_id => $receptor_id) {
				$integrante = Integrante::find($emisor_id);
				$integrante->entrega_a = $receptor_id;
				$integrante->save();
				Mail::to($integrante->email)->send(new NotificarAmigoSecreto($integrante,$grupo)); 
			}
			$grupo->sorteado = true;
			$grupo->save();
		}
		return redirect()->route('integrantes.index',[$grupo_id]);
	}

	public function notificar($email,$shared_code){
		$integrante = Integrante::where('email',$email)->first();
		$amigo_secreto = Integrante::where('entrega_a',$integrante->id)->first();
		Mail::to($amigo_secreto->email)->send(new NotificarListaDeseos($amigo_secreto,$shared_code));
	}


	protected function validator(array $data)
	{				
		return Validator::make($data, [     
			'nombre' => "required|max:50",  
			'email' => "required|email",
			]);
	}
}
