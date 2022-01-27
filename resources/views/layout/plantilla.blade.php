<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
    @section('css')


    <style>
        .active{
            background: #000 !important;
            color: bisque !important;
        }
    </style>
    @endsection
    
</head>
<body>
    @include('layout/parts/header')

    @yield('content')

    @include('layout/parts/footer')
    @section('js')

    @endsection
</body>
</html>
