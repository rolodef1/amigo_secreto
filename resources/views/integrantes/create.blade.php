@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default cloud2">
				<div class="panel-heading"><h3>Crear integrante</h3></div>
				<div class="panel-body">
					@if (session('status'))
					<div class="alert alert-danger">
						{{ session('status') }}
					</div>
					@endif
					<form class="form-horizontal" method="POST" action="{{ route('integrantes.store',[$grupo->id]) }}">
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
						
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
								@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
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