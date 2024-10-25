
<a href="{{route('deptos.create')}}" class="btn button btn-primary">Nuevo</a>
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
                 <th scope="col">Id del Departamento</th>
                 <th scope="col">Nombre Depto</th>
                 <th scope="col">Nombre Mediano</th>
                 <th scope="col">Nombre Corto</th>
                 <th></th>
                 <th></th>
                 <th></th>
                
             </tr>
         </thead>
         <tbody>
         @foreach ($deptos as $depto )
             <tr class="">
                 <td>{{$depto->idDepto}}</td>
                 <td>{{$depto->nombreDepto}}</td>
                 <td>{{$depto->nombreMediano}}</td>
                 <td>{{$depto->nombreCorto}}</td>
                 <td><a href="{{ route('deptos.edit', $depto->id) }}" class="btn button btn-primary">ED</a></td>
                 <td><a href="{{ route('deptos.destroy', $depto->id) }}" class="btn button btn-primary">X</a></td>
                 <td><a href="{{ route('deptos.show', $depto->id) }}"class="btn button btn-primary">ver</a></td>
             </tr>
            
         @endforeach
           
         </tbody>
     </table>