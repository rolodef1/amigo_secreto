@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default cloud2">
				<div class="panel-heading"><h3>Editar integrante</h3></div>
				<div class="panel-body">
					@if (session('status'))
					<div class="alert alert-danger">
						{{ session('status') }}
					</div>
					@endif
					<div class="alert alert-info" style="text-align: center;">
						<span>
							Ingresa el nombre del integrante y su correo electronico, no olvides guardar tu nuevo integrante.
						</span>
					</div>
					<form class="form-horizontal" method="POST" action="{{ route('integrantes.update',[$integrante->id,$integrante->grupo->id]) }}" id="frmUpdate">
						{{ csrf_field() }}
						<input name="_method" type="hidden" value="PUT">
						<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
							<label for="nombre" class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input id="nombre" type="text" class="form-control" name="nombre" value="{{ $integrante->nombre }}" required autofocus>
								@if ($errors->has('nombre'))
								<span class="help-block">
									<strong>{{ $errors->first('nombre') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<input id="email" type="text" class="form-control" name="email" value="{{ $integrante->email }}" required autofocus>
								@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
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
							<div class="col-md-3 col-md-offset-3" style="float: right;">
								<button type="button" class="btn btn-warning" id="btnEliminar">
									Eliminar
								</button>
							</div>
						</div>
					</form>
					<form class="form-horizontal" method="POST" action="{{ route('integrantes.destroy',[$integrante->id,$integrante->grupo->id]) }}" id="frmDelete">
						{{ csrf_field() }}
						<input name="_method" type="hidden" value="DELETE">						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('js')
<script>
	$("#btnGuardar").click(function(){  
		$("#frmUpdate").submit();
	});
	$("#btnEliminar").click(function(){  
		$("#frmDelete").submit();
	});
</script>
@endpush