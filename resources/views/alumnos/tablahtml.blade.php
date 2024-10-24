
<a href="{{route('alumnos.create')}}" class="btn button btn-primary">Nuevo</a>
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
                 <th scope="col">No.Control</th>
                 <th scope="col">Nombre</th>
                 <th scope="col">Apellido P</th>
                 <th scope="col">Apellido M</th>
                 <th scope="col">Sexo</th>
                 <th scope="col">Hora de Registro</th>
                 <th></th>
                 <th></th>
                 <th></th>
                
             </tr>
         </thead>
         <tbody>
         @foreach ($alumnos as $alumno )
             <tr class="">
                 <td>{{$alumno->noCtrl}}</td>
                 <td>{{$alumno->nombreAlumno}}</td>
                 <td>{{$alumno->apellidoPaterno}}</td>
                 <td>{{$alumno->apellidoMaterno}}</td>
                 <td>{{$alumno->sexo}}</td>
                 <td>{{$alumno->created_at}}</td>
                 <td><a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn button btn-primary">ED</a></td>
                 <td><a href="{{ route('alumnos.destroy', $alumno->id) }}" class="btn button btn-primary">X</a></td>
                 <td><a href="{{ route('alumnos.show', $alumno->id) }}"class="btn button btn-primary">ver</a></td>
             </tr>
            
         @endforeach
           
         </tbody>
     </table>