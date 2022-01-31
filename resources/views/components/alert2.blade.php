@props(['color'=> 'danger'])
{{-- recibe la variable del componente1, en este caso la variable color --}}
<button class="btn">
        Notification <span class="badge bg-{{$color}}">span</span>
</button>