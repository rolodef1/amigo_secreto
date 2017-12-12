<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
	<meta charset="utf-8">
</head>
<body>	
	<div style="text-align: center;">
		<img src="{{ asset('images/banner-mail.jpg') }}">
		<p>
			<h1>Hola {{$integrante->nombre}}</h1>
		</p>
		<p>
			<h2>Tu amigo secreto a creado su lista de deseos</h2>
		</p>
		<p>
			<h2>Ingresa a <a href="https://www.etafashion.com/wishlist/shared/index/code/{{$shared_code}}/">este link</a> para ver los productos que le gustaria que le regalen</h2>
		</p>		
	</div>
</body>
</html>