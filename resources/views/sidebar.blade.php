<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    @foreach ($carreras as $carrera)
      <li><a href="/carreras/{{$carrera->id}}">{{$carrera->nombre}}</a></li>    
    @endforeach
  </ul>
</div>
