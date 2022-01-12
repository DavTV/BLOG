@extends('layout.plantilla')
@section('title','Cursos')
@section('content')
 <div class="text-center" >
        <h1>PESTAÑA DE INICIO, INDEX</h1>
        <a href="{{route('cursos.create')}}">Crear Curso</a>
        {{-- esto funciona  pero es poco practico --}}
       @foreach ($curso as $item)
      {{-- <ul>
              <li>
                 <a href="{{route('cursos.index')}}" >{{$item->name}}</a>
                {{-- {{router('cursos.show','abc')}}  
              </li>
          </ul>  --}}
         
              
              {{-- creamos la url --}}
              <ul>
                     <li>
                            {{-- asi no le indique que sawue el id, laravel sabe que debe sacar el id --}}
                            <a href="{{route('cursos.show',$item)}}" style="color: blue">{{$item->name}}</a>
                     {{-- le paso el parametro abc --}}
                     </li>
              </ul> 
       @endforeach
        
       {{-- para crear los botones de la paginación --}}
       <div style="background: lightcoral">
       {{$curso->links()}}
       {{--el fisico te lo debo, el caharro tambi[e, pero felices y lindos recuerdon nunca te vn a faltar--}}
       </div>
 </div>
@endsection