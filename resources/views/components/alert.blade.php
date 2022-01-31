<div>
    <!-- compnente -->
    <div {{$attributes->merge(['class'=>"alert alert-$color alert-dismissible fade show"])}} role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    
        {{-- slot es la variable que almacena el texto que tiene dentro el componente --}}
        <strong>{{$title}}</strong> {{$slot}}
        <p>los atributos no definidos , en este caso clases se imprimen en <strong>{{$attributes}}</strong></p>
            {{-- llamado a un metodo del componente --}}
            {{$prueba()}}
    </div>
    
</div>