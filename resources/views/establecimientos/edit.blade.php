@extends('layouts.app')

@section('content')
<div>
    <form action="{{ route('establecimientos.update' , $establecimiento) }}" method="POST" enctype="multipart/form-data">
        
        @method('PUT')
        @include('establecimientos._form')

    </form>
</div>
@endsection