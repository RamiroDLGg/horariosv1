
<a href="{{route('carreras.create')}}" class="btn button btn-primary">Nuevo</a>
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
                 <th scope="col">Id Carrera</th>
                 <th scope="col">Nombre de la Carrera</th>
                 <th scope="col">Nombre Mediano</th>
                 <th scope="col">Nombre Corto</th>
                 <th scope="col">Id Depto</th>
                 <th scope="col">Hora de Registro</th>
                 <th></th>
                 <th></th>
                 <th></th>
                
             </tr>
         </thead>
         <tbody>
         @foreach ($carreras as $carrera )
             <tr class="">
                 <td>{{$carrera->idCarrera}}</td>
                 <td>{{$carrera->nombreCarrera}}</td>
                 <td>{{$carrera->nombreMediano}}</td>
                 <td>{{$carrera->nombreCorto}}</td>
                 <td>{{$carrera->idDepto}}</td>
                 <td>{{$carrera->created_at}}</td>
                 <td><a href="{{ route('carreras.edit', $carrera->id) }}" class="btn button btn-primary">ED</a></td>
                 <td><a href="{{ route('carreras.destroy', $carrera->id) }}" class="btn button btn-primary">X</a></td>
                 <td><a href="{{ route('carreras.show', $carrera->id) }}"class="btn button btn-primary">ver</a></td>
             </tr>
            
         @endforeach
           
         </tbody>
     </table>