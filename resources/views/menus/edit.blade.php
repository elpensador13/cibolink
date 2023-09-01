@extends('layouts.app')

@section('content')
<div>
    <form action="{{ route('menus.update' , $menu) }}" method="POST" enctype="multipart/form-data">
        
        @method('PUT')
        @include('menus._form')

    </form>
</div>
@endsection