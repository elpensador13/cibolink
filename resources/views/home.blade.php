@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="row justify-content-center">Hola {{ Auth::user()->name }} bienvenido.</h1>
    <a class="btn btn-success" href="{{ route('establecimientos.index') }}" >Establecimiento</a>
    <a class="btn btn-success" href="{{ route('categorias.index') }}">Categorias</a>
    <a class="btn btn-success" href="{{ route('menus.index') }}">Menus</a>
    <a class="btn btn-success" href="{{ route('qr.generateQR',1) }}">QR </a>

</div>
@endsection
