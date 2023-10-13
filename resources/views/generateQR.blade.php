
@extends('layouts.app')
    
@section('content')

<div class="card">
            <div class="card-header">
                <h2>Ejemplo de código QR con color</h2>
            </div>
            <div class="card-body">
                {!! QrCode:: size(300)->backgroundColor(255,90,0)->generate($data, '../public/qrcodes/'.$archivo) !!}
                {!! QrCode::generate($data); !!}
                <p>Escanee el código QR para acceder al enlace.</p>
                <a href="{{ asset('qrcodes/' .$archivo) }}" download>Descargar qr1.svg</a>
            </div>
        </div>    </div>
@endsection