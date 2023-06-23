@extends('layouts.app')

@section('content')
    <h1 class="row justify-content-center">Nuevo establecimiento</h1>
    <div>
        <form action="{{ route('establecimientos.store') }}" method="POST">

            @include('establecimientos._form')

        </form>
    </div>
@endsection