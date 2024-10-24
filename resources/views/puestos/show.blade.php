@extends("puestos")


@section("contenido1")
    @include("puestos.tablahtml")
@endsection

@section("contenido2")
<br>
<h1>Ver Puesto</h1>
<form action="{{ route('puestos.index') }}" method="">
  @csrf
  <div class="row mb-3">
    <label for="idPuesto" class="col-sm-3 col-form-label">Id del Puesto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idPuesto" name="idPuesto" value="{{$puesto->idPuesto}}" disabled>
    </div>
  </div> 
  <div class="row mb-3">
     <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="nombre" name="nombre" value="{{$puesto->nombre}}" disabled>
     </div>
   </div>
   <div class="row mb-3">
      <label for="puesto" class="col-sm-3 col-form-label">Apellido Paterno</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="puesto" name="puesto" value="{{$puesto->tipo}}" disabled>
      </div>
    </div>
    <button href="" type="submit" class="btn btn-primary">Regresar</button>
  </form>
@endsection
