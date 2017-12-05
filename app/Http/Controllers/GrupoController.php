<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Grupo;
use App\User;

class GrupoController extends Controller
{
	public function index(){	
		$user = Auth::user();			
		return view('grupos.index')->with('grupos',$user->grupos);
	}

	public function create(){
		$user = Auth::user();
		return view('grupos.create');
	}

	public function store(Request $request){	
		//dd($request);
		$user = Auth::user();
		$this->validator($request->all())->validate();
		$grupo = new Grupo($request->all());
		$grupo->user_id = $user->id;			
		$grupo->save();				
		return redirect()->route('grupos.index');
	}

	public function show($id){
		$grupo = Grupo::find($id);		
		return view('grupos.show')->with('grupo',$grupo);
	}

	public function edit($id){	
		$user = Auth::user();
		$grupo = Grupo::find($id);
		return view('grupos.edit')->with('grupo',$grupo);
	}

	public function update(Request $request,$id){	
		$user = Auth::user();
		$this->validator($request->all())->validate();
		$grupo = Grupo::find($id);
		$grupo->fill($request->all());				
		$grupo->save();				
		return redirect()->route('grupos.index');
	}

	public function destroy($id){	
		$grupo = Grupo::find($id);
		$grupo->delete();		
		return redirect()->route('grupos.index');
	}

	protected function validator(array $data)
	{			
		$minimo = 10;	
		if($data['minimo'] > 0){
			if($data['minimo'] < 10){
				$minimo = 10;
			}else{
				$minimo = $data['minimo'];
			}	
		}
		return Validator::make($data, [     
			'nombre' => "required|max:50",
			'minimo' => "required|numeric|min:0",
			'maximo' => "required|numeric|min:$minimo"
			]);
	}
}
