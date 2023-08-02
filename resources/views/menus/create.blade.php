@extends('layouts.app')

@section('content')
    <h1 class="row justify-content-center">Nuevo Platillo</h1>
   
    <div>
        <form action="{{ route('menus.store') }}" method="POST">

            @include('menus._form')

        </form>
    </div>
@endsection