
<a href="{{route('plazas.create')}}" class="btn button btn-primary">Nuevo</a>
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
                 <th scope="col">Id de la Plaza</th>
                 <th scope="col">Nombre</th>
                 <th></th>
                 <th></th>
                 <th></th>
                
             </tr>
         </thead>
         <tbody>
         @foreach ($plazas as $plaza )
             <tr class="">
                 <td>{{$plaza->idPlaza}}</td>
                 <td>{{$plaza->nombrePlaza}}</td>
                 <td><a href="{{ route('plazas.edit', $plaza->id) }}" class="btn button btn-primary">ED</a></td>
                 <td><a href="{{ route('plazas.destroy', $plaza->id) }}" class="btn button btn-primary">X</a></td>
                 <td><a href="{{ route('plazas.show', $plaza->id) }}"class="btn button btn-primary">ver</a></td>
             </tr>
            
         @endforeach
           
         </tbody>
     </table>