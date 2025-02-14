@extends('layouts.layout')

@section('content')
    @auth
        <div class="card">
            <h3>Ver Alumnos</h3>
        </div>
    @else
        <img src="https://via.placeholder.com/500" alt="Imagen representativa">
    @endauth
@endsection
