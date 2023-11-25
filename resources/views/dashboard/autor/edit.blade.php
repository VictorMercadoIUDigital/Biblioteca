@extends('dashboard.master')
@section('titulo','Autor')
@include('layouts.navigation')
@section('contenido')

<div class="container py-4">
    <div class="center"> <h1>Editando Autor:</h1></div>
    <form action="{{ url('dashboard/autor/'.$autor->id)}}" method="post">
        @csrf
        @method("PUT")
        <label for="cedula"> Cedula:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="cedula" value="{{ $autor->Cedula }}">
        </div>
        <label for="name"> Nombre:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="name" value="{{ $autor->Nombre }}">
        </div>
        <div class="col s6">
            <button class="btn btn-success btn-sm" type="submit">Guardar</button>
            <a href="{{ url('dashboard/autor') }}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>

    
    </form>
</div>
@endsection