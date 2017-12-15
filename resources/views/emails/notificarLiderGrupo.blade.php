<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
	<meta charset="utf-8">
</head>
<body style="width: 600px;">	
	<div style="text-align: center;">
		<img src="{{ asset('images/banner-mail.jpg') }}">
		<p>
			<h1>Hola {{$user->name}}</h1>
		</p>
		<p>
			<h2>tu cuenta fue creada exitosamente, tu serás el lider de tus grupos de amigos</h2>
		</p>
		<p>
			<h2>¿Cúal es tu labor como lider?</h2>
		</p>
		<p>
			<h3>1. Debes crear uno o más grupos (Ej: Familia, amigos trabajo), los datos para cada grupo son: nombre, valor base del regalo, fecha, hora y lugar de entrega</h3>
			<h3>2. Debes agregar dentro de tus grupos al menos 3 integrantes que quieran jugar, si deseas estar dentro de algun grupo debes crearte como integrante tambien.</h3>
			<h3>3. Una vez que todos los integrantes del grupo esten inscritos, podras realizar el sorteo aleatorio de amigos secretos (Nota: Si realizas el sorteo ya no podrás agregar más integrantes para ese grupo)</h3>
			<h3>4. Todos los integrantes del grupo recibirán un email al correo que registraste, dentro del email se informará lo siguiente: nombre del grupo, monto basico para el regalo, nombre del amigo secreto, fecha, hora y lugar de entrega de los regalos (Podras modificar esta información y los integrantes serán notificados por email)</h3>
			<h3>4. Como lider tu deber es avisar a los integrantes de los grupos para que revisen sus correos y conozcan quien es su amigo secreto</h3>
			<h3>5. Los integrantes del grupo deben crear una cuenta en ETAFASHION.COM con el email con el que fueron inscritos, luego deben llenar su lista de deseos seleccionado productos y agregandolos a favoritos. <a href="https://www.etafashion.com/amigo-secreto">Aprende como aquí</a></h3>
			<h3>6. Cuando tu o tus amigos llenen sus listas de deseos, su amigo secreto recibirá automaticamente un email informando los regalos que ha elegido (Nota: Si no se han registrado con el correo electronico con el que fueron inscritos esta notificación automatica no funcionará)</h3>
			<h3>7. Asegúrate de que todos tus amigos inscritos llenen su lista de deseos, preguntales si todos han recibido información de la lista de deseos de su amigo secreto</h3>
			<h3>8. Recuerdales dejar un detalle todos los dias.</h3>
		</p>
		<p>
			<h2>Felices fiestas de parte de ETAFASHION.COM</h2>
		</p>
	</div>
</body>
</html>