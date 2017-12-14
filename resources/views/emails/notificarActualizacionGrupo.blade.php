<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
	<meta charset="utf-8">
</head>
<body style="width: 600px;">	
	<div style="text-align: center;">
		<img src="{{ asset('images/banner-mail.jpg') }}">
		<p>
			<h1>Hola {{$integrante->nombre}}</h1>
		</p>
		<p>
			<h2>{{$user->name}} ha cambiado la informacion de tu grupo de amigo secreto en ETAFASHION.COM</h2>
		</p>
		<p>
			<h3>Precio base para el regalo es "${{$grupo->minimo}}"</h3>
			@if($grupo->fecha_entrega)
			<h3>La fecha de entrega del regalo es "{{$grupo->fecha_entrega}} {{$grupo->hora_entrega}}"</h3>
			@endif
			@if($grupo->lugar_entrega)
			<h3>El lugar de entrega es "{{$grupo->lugar_entrega}}"</h3>
			@endif
		</p>
		<p>
			<h3>No olvides revisar la lista de deseos de tu amigo secreto, comprale alguno de los productos de la lista y lleva el regalo el dia de la entrega.</h3>
		</p>		
		<p>
			<h4>Si aun no tienes llena tu lista de deseos, <a href="https://www.etafashion.com/amigo-secreto">sigue esta guia</a> para que tu amigo sepa que te gustaria que te regalen.</h4>
		</p>
	</div>
</body>
</html>