@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default cloud2">
				<div class="panel-heading">
					<div class="col-md-12">
						<h3>Lista de integrantes grupo "{{$grupo->nombre}}"</h3>
					</div>					
				</div>
				<div class="panel-body">					
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 10px;">
							@if(Auth::check())
							@if(count($grupo->integrantes)>2)
							<a style="float:left;" class="btn btn-warning" href="{{ route('integrantes.sortear',[$grupo->id]) }}" role="button">Sortear amigos secretos</a>
							@endif					
							<a style="float:right;" class="btn btn-success" href="{{ route('integrantes.create',[$grupo->id]) }}" role="button">Crear integrante</a>
							@endif
						</div>
						<table class="table table-hover">							
							@if(count($grupo->integrantes)>0)
							<tr>
								<th>Nombre</th>
								<th>Email</th>
								@if(Auth::check())
								<th>Acciones</th>
								@endif
							</tr>
							@foreach($grupo->integrantes as $integrante)
							<tr>
								<td>{{$integrante->nombre}}</td>
								<td>{{$integrante->email}}</td>
								@if(Auth::check())
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