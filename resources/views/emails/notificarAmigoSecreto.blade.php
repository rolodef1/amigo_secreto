<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
	<meta charset="utf-8">
</head>
<body >
	<img src="{{ asset('images/banner-mail.jpg') }}">
	<div style="text-align: center;">
		<p>
			<h1>Hola {{$integrante->nombre}}</h1>
		</p>
		<p>
			<h2>has sido agregado por "{{$user->name}}" para jugar al amigo secreto en ETAFASHION.COM</h2>
		</p>
		<p>
			<h3>Estas participando dentro del grupo "{{$grupo->nombre}}" y el precio base para el regalo es "${{$grupo->minimo}}"</h3>
		</p>
		<p>
			<h3>El sorteo ha sido realizado y tu amigo secreto a quien debes entregar el regalo es "{{$amigo_secreto->nombre}}"</h3>
		</p>
	</div>
</body>
</html>