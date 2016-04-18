<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrapFlatly.css') }}">
	<style>
		body{
			background-color: #7B7B7B;
		}
		.lista{
			background-color: #C7C7C7;
		}
		.listaCarrera{
			color: #000;
		}
		.listaCarrera:hover{
			color: #000;
		}
	</style>
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-xs-8 col-sm-11">
                <h1 style="color: #000;">UAS</h1>
                <hr>
            </div>
            <div class="col-xs-1">
                 <img src="{{ asset('imagenes/uas.png') }}" alt="" width="90px" height="110px" class="img-rounded">
            </div>
            <div id="menu" class="col-xs-12 col-sm-3">
                <ul class="nav nav-pills nav-stacked">
                    @if($id == null)
                        <li class="active" role="presentation"><a>Inicio</a></li>
                    @else
                        <li role="presentation"><a href="{{url('/')}}">Inicio</a></li>
                    @endif
                    @foreach($carreras as $c)
                        @if($c->id==$id)
						  <li id="{{$c->id}}" class="active" role="presentation"><a>{{$c->nombre}}</a></li>
                        @else
                            <li id="{{$c->id}}" role="presentation"><a href="{{url('/materias')}}/{{$c->id}}">{{$c->nombre}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            @yield('inicio')
            @yield('materias')
        </div>

        <br>
        <footer class="row">
            <div class="lista col-xs-12">
                <strong style="font-family: cursive;">Jesús Eduardo Millan Angulo</strong>
            </div>
        </footer>
    </div>
</body>
</html>