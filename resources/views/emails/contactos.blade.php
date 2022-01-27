<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <style>
    .container{
      text-align: center;
      font-family:  Roboto;
    }
    h1{
      color: brown;
      font-size:larger;
    }
  </style>
  </head>
  <body>
      <div class="container">
          <h1>Correo Electrónico</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio placeat sint corrupti officia rem veniam, corporis numquam harum velit voluptate voluptatum quidem consequuntur, aut, eum quia libero fuga saepe omnis.</p>
      </div>
      {{-- <small>{{$contacto}}</small> --}}
      {{-- así accedemos a las propiedades de el objeto --}}
      <strong><small>nombre:</small> {{{$contacto['name']}}}</strong>
      <strong><small>correo:</small> {{{$contacto['correo']}}}</strong>
      <strong><small>mensaje:</small> {{{$contacto['contenido']}}}</strong>
    
  </body>
</html>