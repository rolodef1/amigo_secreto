@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default cloud2">
				<div class="panel-heading"><h3>Mis Grupos</h3>					
				</div>
				<div class="panel-body">
					<div class="alert alert-info" style="text-align: center;">
						<span>
							Crea un grupo presionando el boton "Nuevo grupo", luego regresa aquí y crea integrantes dentro de tu grupo, esto lo puedes hacer presionando sobre el link "Ver integrantes" junto a cada registro de la lista.
						</span>
					</div>
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 10px;">
							<a style="float:right;" class="btn btn-success" href="{{ route('grupos.create') }}" role="button">Nuevo grupo</a>
						</div>
					</div>
					<div class="row">
						<table class="table table-hover">							
							@if(count($grupos)>0)
							<tr>
								<th>Nombre</th>
								<th>Precio base para el regalo</th>
								<th>Fecha de entrega</th>
								<th>Acciones</th>
							</tr>
							@foreach($grupos as $grupo)
							<tr>
								<td>{{$grupo->nombre}}</td>
								<td>{{$grupo->minimo}} USD</td>
								<td>{{$grupo->fecha_entrega}} {{$grupo->hora_entrega}}</td>
								<td>
									<a href="{{ route('grupos.edit',[$grupo->id]) }}">Editar</a> | 
									<a href="{{ route('integrantes.index',[$grupo->id]) }}">Integrantes</a>
								</td>
							</tr>
							@endforeach
							@else
							<tr><th style="text-align: center;">No hay ningun grupo creado</th></tr>
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

</script>
@endpush