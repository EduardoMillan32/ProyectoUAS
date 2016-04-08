@extends('welcome')

@section('inicio')
	<div class="lista col-xs-12 col-sm-9">
		<h2>{{$carrera->nombre}}</h2>
		
		<h4>Materias</h4>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
				</tr>
			</thead>
			<tbody>
				@foreach($materias as $m)
					<tr>
						<td>
							<ul  class="nav nav-pills nav-stacked">
								<li role="presentation"><a style="text-decoration: none;" class="listaCarrera" href="{{url('/generarPDF')}}/{{$m->id}}">{{$m->nombre}}</a></li>
							</ul>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop