{{-- Esta platilla se usa en toda las vistas --}}
{{-- Variables Obligatorias para el uso de esta vista --}}
{{-- $carreras  array  Carreras --}}


{{-- Pregunta si se envio aparte del arreglo carreras una carrera especifica --}}
{{-- Este proceso es para visualizacion de la carrera activa --}}
@php
$idCarreraSeleccionada = null;
if(isset($carrera)){
	$idCarreraSeleccionada = $carrera->id;
}
@endphp

<div class="col-sm-3 col-md-2 sidebar">
	<ul class="nav nav-sidebar">
		{{-- Recorre todo el arreglo de carreras y genera la lista  --}}
		@foreach ($carreras as $carea)
			{{-- lo que esta entre corchetes es un if que pregunta si el la carrera seleccionada es igual alguna del arreglo si es correcto entonces le agrega la clase active  --}}
			<li {{ ($idCarreraSeleccionada == $carea->id)?'class=active':'' }} ><a href="/carreras/{{$carea->id}}">{{$carea->nombre}}</a></li>    
		@endforeach
	</ul>
</div>
