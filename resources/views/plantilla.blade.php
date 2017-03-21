{{-- Esta platilla se usa en toda las vistas --}}
{{-- Variables Obligatorias para el uso de esta plantilla --}}
{{-- $carreras  array  Carreras --}}
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Instituto Tecnológico De Culiacán</title>
</head>
<body>
    {{-- Se inclulle la barra superior  --}}
    {{-- vista que se encuentra en views/navbar.blade.php --}}
    @include('navbar')

    {{-- Se inclulle la el menú izquierdo y se le manda el arreglo de todas las carreras --}}
    {{-- Pregunta primero se se le envio una carrera en especifico --}}
    {{-- si asi lo es entonces le manda tambien a la vista de sidebar para ponerle la clase active --}}
    {{-- vista que se encuentra en views/sidebar.blade.php --}}
    @if (isset($carrera))
        @include('sidebar',compact('carreras','carrera'))
    @else
        @include('sidebar',compact('carreras'))
    @endif

    {{-- Aqui se inserta el contenido de la vista que use esta plantilla --}}
 	@yield('content')
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
 <head>
   