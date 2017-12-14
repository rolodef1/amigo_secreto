@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default cloud2">
				<div class="panel-heading"><h3>Crear grupo</h3></div>
				<div class="panel-body">
					<div class="alert alert-info" style="text-align: center;">
						<span>
							Ingresa un nombre para tu grupo y un precio base para los regalos, no olvides guardar tu nuevo grupo.
						</span>
					</div>					
					<form class="form-horizontal" method="POST" action="{{ route('grupos.store') }}">
						{{ csrf_field() }}
						<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
							<label for="nombre" class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>
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
								<input id="minimo" type="number" min="0" class="form-control" name="minimo" value="{{ old('minimo') }}" required autofocus>
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
								<input id="fecha_entrega" type="date" class="form-control" name="fecha_entrega" value="{{ old('fecha_entrega') }}" autofocus>
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
								<input id="hora_entrega" type="time" class="form-control" name="hora_entrega" value="{{ old('hora_entrega') }}" autofocus>
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
								<textarea id="lugar_entrega" class="form-control" name="lugar_entrega">{{ old('lugar_entrega') }}</textarea>
								@if ($errors->has('lugar_entrega'))
								<span class="help-block">
									<strong>{{ $errors->first('lugar_entrega') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-5">
								<button type="submit" class="btn btn-success">
									Guardar
								</button>
							</div>
						</div>
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

</script>
@endpush