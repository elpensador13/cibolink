@extends('layouts.app')

@section('content')
<div>
    <form action="{{ route('categorias.update' , $categoria) }}" method="POST">
        
        @method('PUT')
        @include('categorias._form')

    </form>
</div>
@endsection