@extends('layouts.layout')

@section('content')
    <div class="auth-container">
        <h2>Registro</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" required placeholder="Nombre">
            <input type="email" name="email" required placeholder="Correo electrónico">
            <input type="password" name="password" required placeholder="Contraseña">
            <button type="submit">Registrar</button>
        </form>
    </div>
@endsection
