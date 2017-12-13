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
			<h2>has sido agregado por "{{$user->name}}" para jugar al amigo secreto en ETAFASHION.COM</h2>
		</p>
		<p>
			<h3>Estas participando dentro del grupo "{{$grupo->nombre}}" y el precio base para el regalo es "${{$grupo->minimo}}"</h3>
		</p>
		<p>
			<h3>El sorteo ha sido realizado y tu amigo secreto a quien debes entregar el regalo es "{{$amigo_secreto->nombre}}"</h3>
		</p>
		<p>
			<h4>Asi como tu tienes un amigo secreto a quien entregar el regalo, tambien hay alguien del grupo que tiene que darte un regalo a ti</h4>
		</p>
		<p>
			<h4>Para hacer que este juego sea mucho más facil y tanto tu como tus amigos reciban los regalos que les gustan y necesitan, puedes seleccionar varias opciones de regalo en ETAFASHION.COM y agregarlas a tu lista de deseos</h4>
		</p>
		<p>
			<h4>Una vez que hayas llenado tu lista de deseos tu amigo sera notificado de los productos que podria regalarte, <a href="https://www.etafashion.com/amigo-secreto">ingresa aqui para aprender como llenar tu lista de deseos</a>.</h4>
		</p>
	</div>
</body>
</html>