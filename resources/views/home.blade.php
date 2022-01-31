@extends('layout.plantilla')
@section('title','Home')
@section('content')
@php
       // para simular una variable con contenido recuperado desde una bd
       $color = "danger";
       // para mostar un componente en específico
       $alert = "alert2";
@endphp
<body>
       <div class="text-center">
              <h1>PESTAÑA HOME</h1>
       </div>
       {{-- poner un companente --}}
       <div class="container">
              {{-- pintar el componente, no dejar espacios a la hora de definir el valor --}}
              <x-alert :color="$color" class="p-5">
                     {{-- se le pone los dos puntitos y se le pasa la variable --}}
                     <x-slot name="title">
                            Titulo 1 -- 
                     </x-slot>  
                     
              </x-alert>      
              
              
              <x-alert color="primary">
                     <x-slot name="title">
                            Titulo 2 -- 
                     </x-slot>       
                     Aquí va texto que va a ir dentro del componente, en este caso la alerta.
              </x-alert>  
              <hr>
              <H1>cOMPONENTE ANONIMO</H1>
              <x-alert2 color="success"/>    
              <x-alert2 color="success"/>    
            
              {{-- esto es u componente dinamico, cambiente ps --}}
                                   {{-- le paso la varable con el nombre del componente --}}
              <x-dynamic-component :component="$alert">
                     <x-slot name="title">
                            Titulo 2 -- 
                     </x-slot>       
                     Aquí va texto que va a ir dentro del componente, en este caso la alerta.
              </x-dynamic-component>
       </div>
</body>

@endsection
