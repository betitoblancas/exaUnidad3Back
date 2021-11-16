@extends('layaout.plantilla')
@section('content')
<h1>Bienvenido</h1>
<div class="row">
    <div class="col-md-8">
        <div class="mt-2 table-responsive-md">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">sexo</th>
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
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{ $libro->links() }}
@endsection