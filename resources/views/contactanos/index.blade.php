@extends('layout.plantilla')
@section('title','contactanos')
@section('content')
 <div class="text-center container my-3">
        <h1>PESTAÑA contactos</h1>
        <form action="{{route("contactanos.store")}}" method="post">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" aria-describedby="emailHelp" name="correo">
             @error('correo')
                 <small>{{$message}}</small>
             @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Name</label>
              <input type="text" class="form-control"  name="name">
              @error('name')
                <small>{{$message}}</small>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mensaje</label>
              <div class="mb-3">
                <label for="" class="form-label"></label>
                <textarea class="form-control" name="contenido" id="" rows="3"></textarea>
                @error('contenido')
                  <small>{{$message}}</small>
                @enderror
              </div>
            </div>

            <button type="submit" class="btn btn-outline-danger">Submit</button>
          </form>
 </div>
 {{-- validadmos si hay un mensaje de sesión, si existe debemos crear un scrip para lanzar el alerta, este código se ejecunta sólo si hay un mensaje de sessión --}}
 @if (session('info'))
  <script>
    alert("{{session('info')}}")  
  </script>     
 @endif
@endsection
