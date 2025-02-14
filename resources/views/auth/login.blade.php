@extends('layouts.layout')

@section('content')
    <div class="auth-container">
        <h2>Iniciar sesión</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" required placeholder="Correo electrónico">
            <input type="password" name="password" required placeholder="Contraseña">
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
@endsection
