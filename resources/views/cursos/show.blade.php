@extends('layout.plantilla')
{{-- que solo imprima el name --}}
@section('title','Cursos '. $curso->name)
@section('content')
<h1>VISTA SHOW {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}">Volver a cursos</a>
<br>
{{-- aquí le paso el curso completo, luego el metodo edit escogeel id --}}
<a href="{{route("cursos.edit", $curso)}}">EditarCurso</a>
<p><strong>Categorpia:</strong> {{$curso->categoria}}</p>
<p><strong>Descripcion:</strong> {{$curso->description}}</p>
<form action="{{route('cursos.destroy',$curso)}}" method="POST">
    @csrf
    @method('delete');
    <button type="submit">Eliminar</button>
</form>
@endsection

