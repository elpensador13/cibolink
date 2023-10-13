@extends('layouts.app')

@section('content')

<?php
$UsuarioId = Auth::user()->id ;
$establecimientoId = 0;
?>
<div class="container">
    <h1 class="row justify-content-center">Hola {{ Auth::user()->name }} bienvenido.</h1>

    @foreach($establecimientos  as $establecimiento) 
        @if ($establecimiento->user_id == $UsuarioId )
        <?php $establecimientoId = $establecimiento['id']?>
        @else
        @endif
    @endforeach

        @if ($establecimientoId)
            <a class="btn btn-success btn-lg" href="{{ route('establecimientos.edit', $establecimientoId) }}">Mi establecimiento</a>
            <a class="btn btn-success btn-lg" href="{{ route('categorias.index' , ['establecimientoId' => $establecimientoId]) }}">Categorias</a>
            <a class="btn btn-success btn-lg" href="{{ route('menus.index' , ['establecimientoId' => $establecimientoId]) }}">Menus</a>

            <a class="btn btn-success btn-lg" href="{{ route('qr', ['establecimientoId' => $establecimientoId]) }}">QR</a>
        @else
            <a class="btn btn-success btn-lg" href="{{ route('establecimientos.create') }}" >Registrar mi establecimiento</a>
</div>            
        @endif

        @include('mimenu')
@endsection
