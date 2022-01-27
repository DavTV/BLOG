<header class="text-center">
    <ul class="nav justify-content-center bg-danger">
        <li class="nav-item">
                                                                {{-- para saber en que ruta me encuentro agregando clase --}}
            <a  href="{{route('home')}} " class=" nav-link {{request()->routeIs('home') ? 'active' : ''}}">Home</a>
            {{-- para saber en que ruta me encuentro --}}
           {{-- @dump(dump(request()->routeIs('home'))) --}}
        </li>
        <li class="nav-item">
            {{-- con el asteristico no importa lo quevenga, si empieza con curso --}}
            <a  href="{{route('cursos.index')}}" class=" nav-link {{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
            
        </li>
        <li class="nav-item">
            <a  href="{{route('nosotros')}}" class=" nav-link {{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>
           
        </li>
        <li class="nav-item">
            <a  href="{{route('contactanos.index')}}" class=" nav-link {{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contaáctanos</a>
           
        </li>
    </ul>
</header>