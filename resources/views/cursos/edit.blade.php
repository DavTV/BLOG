@extends('layout.plantilla')
@section('title','Cursos Edit')
@section('content')
<h1>VISTA EDITAR CURSO</h1>
{{-- le damos la ruta que va a procesar la info --}}
                                         {{-- envia los datos al metodo post  en el web  --}}
<form action="{{route('cursos.update',$curso)}}" method="POST">
    {{-- tenemos que agragarle el toke n para que funcione --}}
    @csrf
    @method('put');
    <br>
                                                    {{-- retorna pero mantiene los cambios últmos --}}
    <label >
        Nombre:
        <input type="text" name="name" id="" value="{{old('name',$curso->name)}}">
    </label>
    @error('name')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <br>
    <label >
        Descripción:
        <textarea name="description" id=""  rows="5">{{$curso->description}}</textarea>
    </label>
    @error('description')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <br>
    <label >
        Categoría:
        <input type="text" name="categoria" id=""value="{{$curso->categoria}}" >
    </label>
    @error('categoria')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <br>
    <button type="submit">Actualizar Formulario</button>
</form>
@endsection
