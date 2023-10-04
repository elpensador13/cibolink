
@extends('layouts.app')
    
@section('content')

<div class="container mt-4">        <div class="card">
            <div class="card-header">
                <h2>Generación de código QR</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9') !!}
            
            
            </div>
        <div class="card-footer">
            <button id="b1">Pulsa aquí para guardar el QR </button>
</div>
        </div>        <div class="card">
            <div class="card-header">
                <h2>Ejemplo de código QR con color</h2>
            </div>
            <div class="card-body">
                {!! QrCode:: size(300)->backgroundColor(255,90,0)->generate($data, '../public/qrcodes/qr3.svg') !!}
                <p>Escanee el código QR para acceder al enlace.</p>
            </div>
        </div>    </div>
@endsection