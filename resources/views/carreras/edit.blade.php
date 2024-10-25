@extends("carreras")


@section("contenido1")
    @include("carreras.tablahtml")
@endsection

@section("contenido2")
<br>
<h1>Editando</h1>
<form action="{{route('carreras.update',$carrera->id)}}" method="POST">
  @csrf
  <div class="row mb-3">
    <label for="idCarrera" class="col-sm-3 col-form-label">Id de la Carrera</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idCarrera" name="idCarrera" value="{{$alumno->noCtrl}}">
    </div>
  </div> 
  <div class="row mb-3">
     <label for="nombreAlumno" class="col-sm-3 col-form-label">Nombre Carrera</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="nombreAlumno" name="nombreAlumno" value="{{$alumno->nombreAlumno}}">
     </div>
   </div>
   <div class="row mb-3">
      <label for="apellidoPaterno" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" value="{{$alumno->apellidoPaterno}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="apellidoMaterno" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" value="{{$alumno->apellidoMaterno}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="sexo" class="col-sm-3 col-form-label">Id del Departamento</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="sexo" name="sexo" value="{{$alumno->sexo}}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
@endsection
