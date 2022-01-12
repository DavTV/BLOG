@extends('layout.plantilla')
@section('title','Cursos Create')
@section('content')
<h1>VISTA create CURSO</h1>
{{-- le damos la ruta que va a procesar la info --}}
                                         {{-- envia los datos al metodo post  en el web  --}}
<form action="{{route('cursos.store')}}" method="POST">
    {{-- tenemos que agragarle el toke n para que funcione --}}
    @csrf
    <br>
    <label >
        Nombre:                         
        <input type="text" name="name" id="" value="{{old('name')}}">
    </label>
    {{-- verifica si a habido error como un if --}}
    @error('name')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <br>    
    <label >
        Descripción:
        <textarea name="description" id=""  rows="5">{{old('description')}}"</textarea>
    </label>
    @error('description')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <br>
    <label >
        Categoría:
        <input type="text" name="categoria" id="" value="{{old('categoria')}}" >
    </label>
    @error('categoria')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <br>
    <button type="submit">EnviarFormulario</button>
</form>
@endsection
