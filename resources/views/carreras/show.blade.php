@extends("carreras")


@section("contenido1")
    @include("carreras.tablahtml")
@endsection

@section("contenido2")
<br>
<h1>Ver Alumno</h1>
<form action="{{ route('carreras.index') }}" method="">
  @csrf
  <div class="row mb-3">
    <label for="idCarrera" class="col-sm-3 col-form-label">id Carrera</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idCarrera" name="idCarrera" value="{{$carrera->idCarrera}}" disabled>
    </div>
  </div> 
  <div class="row mb-3">
     <label for="nombreCarrera" class="col-sm-3 col-form-label">Nombre de la Carrera</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" value="{{$carrera->nombreCarrera}}" disabled>
     </div>
   </div>
   <div class="row mb-3">
      <label for="nombreMediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" value="{{$carrera->nombreMediano}}" disabled>
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" value="{{$carrera->nombreCorto}}" disabled>
      </div>
    </div>
    <div class="row mb-3">
      <label for="idDepto" class="col-sm-3 col-form-label">id Del Departamento</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idDepto" name="idDepto" value="{{$carrera->idDepto}}" disabled>
      </div>
    </div>
    <button href="" type="submit" class="btn btn-primary">Regresar</button>
  </form>
@endsection
