<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mensaje Recibido</title>
</head>
<body>

	Contenido del Email

	<p>Recibiste un Mensaje de : {{$msg['name']}}</p>

	<p><strong>Asunto: </strong> {{$msg['asunto']}}</p>

	<p><strong>Contenido: </strong> {{$msg['cuerpo']}}</p>

	

</body>
</html>