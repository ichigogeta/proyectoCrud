@extends('layouts.app')

@section('meta')
    <meta name="description"
          content="Página de inicio">
    <meta name="keywords" content="xerintel,projecto,web">
    {{-- <meta name="author" content="Javier García"> --}}
@endsection

@section('title')
    @parent
    - Inicio
@endsection

@section('content')
    <div id="homepage">
        <!-- Esto es un comentario público-->
        {{-- Esto es un comentario privado --}}
        <h1>Si puedes leer esto, es que se instaló bien.</h1>
        <p>Barra de cookies ocultada, ver más en views/layouts/app.blade.php</p>
    </div>
@endsection