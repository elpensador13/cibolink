@extends('layouts.app')
    
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Código QR</div>
                <div class="card-body text-center">
                    <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt=" código QR">
                    <p>Escanee el código QR para acceder al enlace.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
