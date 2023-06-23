@extends('layouts.app')

@section('content')
    <h1 class="row justify-content-center">Nueva categoria</h1>
    <div>
        <form action="{{ route('categorias.store') }}" method="POST">

            @include('categorias._form')

        </form>
    </div>
@endsection