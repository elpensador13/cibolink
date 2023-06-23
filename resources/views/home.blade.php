@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="row justify-content-center">Hola {{ Auth::user()->name }} bienvenido.</h1>
    <a class="btn btn-success" href="{{ route('establecimientos.index') }}" >Establecimiento</a>
    <a class="btn btn-success" href="{{ route('categorias.index') }}">Categorias</a>
</div>
@endsection
