@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default cloud2">
				<div class="panel-heading">
					<h3>Lista de integrantes del grupo "{{$grupo->nombre}}"</h3>				
				</div>
				<div class="panel-body">	
					@if(!$grupo->sorteado)
					<div class="alert alert-info" style="text-align: center;">
						<span>
							Crea un integrante presionando el boton "Crear integrante", al menos deberás ingresar 3 para poder realizar el sorteo en cada grupo.</br>Una vez que todos los integrantes esten registrados podras realizar el sorteo de amigos secretos presionado el boton "Sortear amigos secretos".</br>NOTA: Una vez realizado el sorteo ya no podras ingresar más integrantes para este grupo.
						</span>
					</div>	
					@endif			
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 10px;">
							@if(Auth::check())
							@if(!$grupo->sorteado)
							@if(count($grupo->integrantes)>2)
							<a style="float:left;font-size: 0.9em;" class="btn btn-warning" role="button" onclick="sortear();">Sortear amigos secretos</a>
							@endif					
							<a style="float:right;font-size: 0.9em;" class="btn btn-success" href="{{ route('integrantes.create',[$grupo->id]) }}" role="button">Crear integrante</a>
							@else
							<div class="alert alert-info" style="text-align: center;">
								<span>El sorteo de amigo secreto para este grupo ha sido realizado y se ha notificado a cada integrante por correo electronico</span>
							</div>								
							@endif
							@endif
						</div>
						<table class="table table-hover">							
							@if(count($grupo->integrantes)>0)
							<tr>
								<th>Nombre</th>
								<th>Email</th>
								@if(Auth::check() && !$grupo->sorteado)
								<th>Acciones</th>
								@endif
							</tr>
							@foreach($grupo->integrantes as $integrante)
							<tr>
								<td>{{$integrante->nombre}}</td>
								<td>{{$integrante->email}}</td>
								@if(Auth::check() && !$grupo->sorteado)
								<td><a href="{{ route('integrantes.edit',[$integrante->id]) }}">Editar</a></td>
								@endif
							</tr>
							@endforeach
							@else
							<tr><th style="text-align: center;">No hay ningun integrante en este grupo</th></tr>
							@endif
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('js')
<script>
	function sortear(){
		if(confirm('Si realíza el sorteo ya no podrá agregar más integrantes al grupo, desea continuar?')){
			location.href = "{{ route('integrantes.sortear',[$grupo->id]) }}";
		}
	}
</script>
@endpush
