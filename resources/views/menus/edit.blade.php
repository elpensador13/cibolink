@extends('layouts.app')

@section('content')
<div>
    <form action="{{ route('menus.update' , $menu) }}" method="POST">
        
        @method('PUT')
        @include('menus._form')

    </form>
</div>
@endsection