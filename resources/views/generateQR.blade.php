@extends('layouts.app')
    
@section('content')

<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <title>vista qr </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head><body>    <div class="container mt-4">        <div class="card">
            <div class="card-header">
                <h2>Generación de código QR</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9') !!}
            </div>
        </div>        <div class="card">
            <div class="card-header">
                <h2>Ejemplo de código QR con color</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9') !!}
                <p>Escanee el código QR para acceder al enlace.</p>
            </div>
        </div>    </div>
</body>
</html>
@endsection