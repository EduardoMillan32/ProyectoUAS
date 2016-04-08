<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDF materia</title>
</head>
<body>
	<h1>UAS - {{$carrera->nombre}}</h1>
	<img style="position: absolute; top: -3%; left: 92%;" src="{{ asset('imagenes/uas.png') }}" alt="" width="90px" height="110px" class="img-rounded">
	<hr>
	<h3>Materia: <u>{{$materia->nombre}}</u></h3>
	<strong>Temas:</strong>
	<ol>
		@foreach($temas as $t)
			<li>{{$t->nombre}}</li>
        @endforeach
	</ol>
</body>
</html>