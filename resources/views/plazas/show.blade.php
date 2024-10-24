@extends("plazas")


@section("contenido1")
    @include("plazas.tablahtml")
@endsection

@section("contenido2")
<br>
<h1>Ver Alumno</h1>
<form action="{{ route('plazas.index') }}" method="">
  @csrf
  <div class="row mb-3">
    <label for="idPlaza" class="col-sm-3 col-form-label">Id de la Plaza</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idPlaza" name="idPlaza" value="{{$plaza->idPlaza}}" disabled>
    </div>
  </div> 
  <div class="row mb-3">
     <label for="nombrePlaza" class="col-sm-3 col-form-label">Nombre</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="nombrePlaza" name="nombrePlaza" value="{{$plaza->nombrePlaza}}" disabled>
     </div>
   </div>
    <button href="" type="submit" class="btn btn-primary">Regresar</button>
  </form>
@endsection
