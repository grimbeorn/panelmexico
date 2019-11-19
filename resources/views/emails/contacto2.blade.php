<html>

<head>
	<title> Nuevo Contacto</title>
</head>

<body>
	<p>Has recibido un nuevo e-mail, estos son los datos:</p>
	<ul>
		<li>
			<strong>Nombre: </strong>
			{{ $n }}
		</li>
		<li>
			<strong>Correo: </strong>
			{{ $c }}
		</li>
		<li>
			<strong>Mensaje: </strong>
			{{ $m }}
		</li>
	</ul>
</body>

</html>