@extends('layouts.app')

@section('content')
<h1 class="row justify-content-center">Hola {{ Auth::user()->name }} bienvenido.</h1>

<div class="row justify-content-center">
    <div class="card col-6 text-center">
        <h5 class="card-header">Mis categorias</h5>
        <div class="card-body">
            <table class="table">
                @foreach($categorias as $categoria)
                    <tr>
                        <td >{{ $categoria->nombreCategoria }}</td>
                        <td >
                            <a class="btn btn-success" href="{{ route('categorias.edit', $categoria) }}">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('categorias.destroy', $categoria) }}" method="POST">
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
            <a class="btn btn-secondary btn-lg" href="{{ route('categorias.create') }}" >Nueva categoria</a>
        </div>
    </div>
</div>



@endsection