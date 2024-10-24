
<a href="{{route('puestos.create')}}" class="btn button btn-primary">Nuevo</a>
<br> <br>
<div>
    @if (session('success'))
        <div class="alert alert-succes">
            {{session('succes')}}
            </div>   
    @endif
    </div>

<div
     class="table-responsive-md"
 >
     <table
         class="table table-primary"
     >
         <thead>
             <tr>
                 <th scope="col">Id Puesto</th>
                 <th scope="col">Nombre</th>
                 <th scope="col">Tipo</th>
                 <th></th>
                 <th></th>
                 <th></th>
                
             </tr>
         </thead>
         <tbody>
         @foreach ($puestos as $puesto )
             <tr class="">
                 <td>{{$puesto->idPuesto}}</td>
                 <td>{{$puesto->nombre}}</td>
                 <td>{{$puesto->tipo}}</td>
                 <td><a href="{{ route('puestos.edit', $puesto->id) }}" class="btn button btn-primary">ED</a></td>
                 <td><a href="{{ route('puestos.destroy', $puesto->id) }}" class="btn button btn-primary">X</a></td>
                 <td><a href="{{ route('puestos.show', $puesto->id) }}"class="btn button btn-primary">ver</a></td>
             </tr>
            
         @endforeach
           
         </tbody>
     </table>