{{-- Variables obligatorias --}}
{{-- $carrera Carrera --}}

{{-- Se extiende de la vista platilla  --}}
@extends('plantilla')

{{-- a la platilla en la seccion o yield llamado content se le agrega el siguiente contenido--}}

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Materias de {{$carrera->nombre}}
	<a target="_blank" href="{{ asset($carrera->url_reticula) }}"><span class="badge btn-warning text-right">Reticula</span></a>
    </h1>
	<ul class="list-group">
		{{-- Recorrido de todas las materias de la carrer seleccionada  --}}
		{{-- Esto es posible gracias al ORM de laravel y sus relaciones  --}}
		@foreach ($carrera->materias as $materia)
			<li class="list-group-item">
				{{$materia->nombre}}
				{{-- la materia tiene un atributo de plan de estudios la cual apunta a un archivo en la carpeta /public/documentos --}}
				<a href="{{ asset($materia->url_plan_estudio) }}" target="_blank"><span class="badge btn-primary pull-right">Plan de Estudios</span></a>
			</li>
		@endforeach
	</ul>
</div>
@endsection
