@extends("deptos")


@section("contenido1")
    @include("deptos.tablahtml")
@endsection

@section("contenido2")
<br>
<h1>Ver Puesto</h1>
<form action="{{ route('deptos.index') }}" method="">
  @csrf
  <div class="row mb-3">
    <label for="idDepto" class="col-sm-3 col-form-label">ID Depto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idDepto" name="idDepto" value="{{$depto->idDepto}}" disabled>
    </div>
  </div> 
  <div class="row mb-3">
     <label for="nombreDepto" class="col-sm-3 col-form-label">Nombre Depto</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="nombreDepto" name="nombreDepto" value="{{$depto->nombreDepto}}" disabled>
     </div>
   </div>
   <div class="row mb-3">
      <label for="nombreMediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" value="{{$depto->nombreMediano}}" disabled>
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" value="{{$depto->nombreCorto}}" disabled>
      </div>
    </div>
    <button href="" type="submit" class="btn btn-primary">Regresar</button>
  </form>
@endsection
