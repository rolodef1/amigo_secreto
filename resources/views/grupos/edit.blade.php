@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default cloud2">
				<div class="panel-heading"><h3>Editar grupo</h3>					
				</div>
				<div class="panel-body">
					<div class="alert alert-info" style="text-align: center;">
						<span>
							Ingresa un nombre para tu grupo y un precio base para los regalos, no olvides guardar tu nuevo grupo.
						</span>
					</div>
					<div class="row">
						<div class="col-md-10" style="margin-bottom: 10px;">
							<a style="float:right;" class="btn btn-success" href="{{ route('integrantes.index',[$grupo->id]) }}" role="button">Ver integrantes</a>
						</div>
					</div>
					<form class="form-horizontal" method="POST" action="{{ route('grupos.update',[$grupo->id]) }}" id="frmUpdate">
						{{ csrf_field() }}
						<input name="_method" type="hidden" value="PUT">
						<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
							<label for="nombre" class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input id="nombre" type="text" class="form-control" name="nombre" value="{{$grupo->nombre}}" required autofocus>
								@if ($errors->has('nombre'))
								<span class="help-block">
									<strong>{{ $errors->first('nombre') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('minimo') ? ' has-error' : '' }}">
							<label for="minimo" class="col-md-4 control-label">Precio base para el regalo (USD)</label>
							<div class="col-md-6">
								<input id="minimo" type="number" min="0" class="form-control" name="minimo" value="{{$grupo->minimo}}" required autofocus>
								@if ($errors->has('minimo'))
								<span class="help-block">
									<strong>{{ $errors->first('minimo') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('fecha_entrega') ? ' has-error' : '' }}">
							<label for="fecha_entrega" class="col-md-4 control-label">Fecha de entrega de regalos</label>
							<div class="col-md-6">
								<input id="fecha_entrega" type="date" class="form-control" name="fecha_entrega" value="{{$grupo->fecha_entrega}}" autofocus>
								@if ($errors->has('fecha_entrega'))
								<span class="help-block">
									<strong>{{ $errors->first('fecha_entrega') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('hora_entrega') ? ' has-error' : '' }}">
							<label for="hora_entrega" class="col-md-4 control-label">Hora de entrega de regalos</label>
							<div class="col-md-6">
								<input id="hora_entrega" type="time" class="form-control" name="hora_entrega" value="{{$grupo->hora_entrega}}" autofocus>
								@if ($errors->has('hora_entrega'))
								<span class="help-block">
									<strong>{{ $errors->first('hora_entrega') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('lugar_entrega') ? ' has-error' : '' }}">
							<label for="lugar_entrega" class="col-md-4 control-label">Lugar de entrega de regalos</label>
							<div class="col-md-6">
								<textarea id="lugar_entrega" class="form-control" name="lugar_entrega">{{$grupo->lugar_entrega}}</textarea>
								@if ($errors->has('lugar_entrega'))
								<span class="help-block">
									<strong>{{ $errors->first('lugar_entrega') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-3 col-md-offset-3" style="float: left;">
								<button type="button" class="btn btn-success" id="btnGuardar">
									Guardar
								</button>
							</div>
							<div class="col-md-3 col-md-offset-3"  style="float: right;">
								<button type="button" class="btn btn-warning" id="btnEliminar">
									Eliminar
								</button>
							</div>
						</div>
					</form>
					<form class="form-horizontal" method="POST" action="{{ route('grupos.destroy',[$grupo->id]) }}" id="frmDelete">
						{{ csrf_field() }}
						<input name="_method" type="hidden" value="DELETE">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('css')
<style>
	
</style>
@endpush
@push('js')
<script>
	$("#btnGuardar").click(function(){  
		console.log(1);
		$("#frmUpdate").submit();
	});
	$("#btnEliminar").click(function(){  
		console.log(2);
		$("#frmDelete").submit();
	});
</script>
@endpush