@extends('layouts.app')

@section('content')
<h1 class="row justify-content-center">Hola {{ Auth::user()->name }} bienvenido.</h1>

<div class="row justify-content-center">
    <div class="card col-6 text-center">
        <h5 class="card-header">Mis Platillos</h5>
        <div class="card-body">
            <table class="table">
                @foreach($menus as $menu)
                    <tr>
                        <td >{{ $menu->nombrePlatillo }}</td>
                        <td >
                            <a class="btn btn-success" href="{{ route('menus.edit', $menu) }}">Editar</a>
                        </td>
                        <td>
                            <form action="" method="POST">
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
            <a class="btn btn-secondary btn-lg" href="{{ route('menus.create') }}" >Nuevo platillo</a>
        </div>
    </div>
</div>



@endsection