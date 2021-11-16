<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>examenunidad3</title>
  </head>
  <body>
    <h1>Bienvenido</h1>
      <div class="container">
        <h2>Datos</h2>
        <p></p>            
        <table class="table table-dark table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Descripción</th>
                      <th scope="col">Cantidad</th>
                      <th scope="col">sexo</th>
                      <th scope="col">edad</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($libro as $libros)
                          <tr>
                              <td>{{ $libros->id }}</td>
                              <td>{{ $libros->nombre }}</td>
                              <td>{{ $libros->paterno }}</td>
                              <td>{{ $libros->materno }}</td>
                              <td>{{ $libros->sexo }}</td>
                              <td>{{$libros->edad}}</td>
                              <td>
                                <div class="btn-group btn-group-lg">
                                  @csrf
                                  @method('delete')
                                <button type="button" class="btn btn-primary">Editar</button></a>
                                <button type="button" class="btn btn-primary">Borrar</button>
                                <button type="button" class="btn btn-primary">ver</button>
                              </div></td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
  </div>
  {{ $libro->links() }}
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>