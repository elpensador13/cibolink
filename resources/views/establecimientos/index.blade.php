@extends('layouts.app')

@section('content')
<h1 class="row justify-content-center">Hola {{ Auth::user()->name }} bienvenido.</h1>
<button id="b1">prueba</button>

<div class="row justify-content-center">
    <div class="card col-6 text-center">
        <h5 class="card-header">Mis establecimientos</h5>
        <div class="card-body">
            <table class="table">
                @foreach($establecimientos as $establecimiento)
                    <tr>
                        <td >{{ $establecimiento->nombreEstablecimiento }}</td>
                        <td >
                            <a class="btn btn-success" href="{{ route('establecimientos.edit', $establecimiento) }}">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('establecimientos.destroy', $establecimiento) }}" method="POST">
                                @csrf 
                                @method('DELETE')

                                <input 
                                    type="submit" 
                                    value="Eliminar" 
                                    class="btn btn-danger" 
                                    onclick="return confirm('¿Desea Eliminar?')"
                                >
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <a class="btn btn-secondary btn-lg" href="{{ route('establecimientos.create') }}" >Nuevo establecimiento</a>
        </div>
    </div>
</div>

@endsection