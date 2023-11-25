@extends('dashboard.master')
@section('titulo','Autor')
@include('layouts.navigation')
@section('contenido')
<main>
    <div class="container py-4">
        <div class="center"> <h1>Autores Creados:</h1></div>
        <a href="{{ url('dashboard/autor/create') }}" class="btn btn-primary btn-sm">Nuevo Autor</a>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Fecha de creacion</th>
                    <th>Fecha de modificacion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autor as $autor )
                    <tr>
                        <td>{{ $autor->id }}</td>
                        <td>{{ $autor->Cedula }}</td>   
                        <td>{{ $autor->Nombre }}</td>   
                        <td>{{ $autor->created_at }}</td>   
                        <td>{{ $autor->updated_at }}</td> 
                        <td><a href="{{ url('dashboard/autor/'.$autor->id.'/edit') }}" class="bi bi-pencil"></a></td>
                        <td>
                            <form action="{{ url('dashboard/autor/'.$autor->id) }}" method="post">
                                @method("DELETE")
                                @csrf
                                <button class="bi bi-eraser-fill" type="submit" ></button>                                
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</main>
@endsection