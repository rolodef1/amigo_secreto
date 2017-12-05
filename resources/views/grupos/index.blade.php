@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default cloud2">
				<div class="panel-heading"><h3>Mis Grupos</h3>					
				</div>
				<div class="panel-body">
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
								<th>Minimo</th>
								<th>Maximo</th>
								<th>Acciones</th>
							</tr>
							@foreach($grupos as $grupo)
							<tr>
								<td>{{$grupo->nombre}}</td>
								<td>{{$grupo->minimo}} USD</td>
								<td>{{$grupo->maximo}} USD</td>
								<td><a href="{{ route('grupos.edit',[$grupo->id]) }}">Editar</a></td>
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