@extends("deptos")


@section("contenido1")
    @include("deptos.tablahtml")
@endsection

@section("contenido2")
<br>
<h1>Editando</h1>
<form action="{{route('deptos.update',$depto->id)}}" method="POST">
  @csrf
  <div class="row mb-3">
    <label for="idDepto" class="col-sm-3 col-form-label">Id del Departamento</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idDepto" name="idDepto" value="{{$depto->idDepto}}">
    </div>
  </div> 
  <div class="row mb-3">
     <label for="nombreDepto" class="col-sm-3 col-form-label">Nombre del Departamento</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="nombreDepto" name="nombreDepto" value="{{$depto->nombreDepto}}">
     </div>
   </div>
   <div class="row mb-3">
      <label for="nombreMediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" value="{{$depto->nombreMediano}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" value="{{$depto->nombreCorto}}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
@endsection
