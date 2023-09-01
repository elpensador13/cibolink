@csrf

<?php
$numero = Auth::user()->id ;
?>

<div class="row mb-3">
    <label for="nombrePlatillo" class="col-sm-4 col-form-label">Nombre: </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="nombrePlatillo" name="nombrePlatillo" value="{{ old('nombrePlatillo', $menu->nombrePlatillo)}}"   /> 
    </div>
</div>

@foreach($establecimientos  as $id => $user_id)
    @if ($user_id == $numero )
    <div class="row mb-3">
    <label for="establecimiento_id" class="col-sm-4 col-form-label">establecimiento id: </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="establecimiento_id" name="establecimiento_id" value="{{ $id}}"   /> 
        </div>
    </div>
    @endif
@endforeach

<div class="row mb-3">
    <label for="categoria_id" class="col-sm-4 col-form-label">Categoria: </label>
    <div class="col-sm-8">
        <select class="form-select" id="categoria_id" name="categoria_id" >
            <option value="{{ old('categoria_id', $menu->categoria_id)}}" >Sin cambios</option>
            @foreach($categoria  as $id => $nombreCategoria)
                <option value="{{ $id}}">{{ $nombreCategoria}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row mb-3">
    <label for="descripcionPlatillo" class="col-sm-4 col-form-label">Descripcion: </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="descripcionPlatillo" name="descripcionPlatillo" value="{{ old('descripcionPlatillo', $menu->descripcionPlatillo)}}"   /> 
    </div>
</div>

<div class="row mb-3">
    <label for="precioPlatillo" class="col-sm-4 col-form-label">Precio: </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="precioPlatillo" name="precioPlatillo" value="{{ old('precioPlatillo', $menu->precioPlatillo)}}"   /> 
    </div>
</div>

<div class="row mb-3">
    <label for="imagenPlatillo1" class="col-sm-4 col-form-label">Imagen 1: </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="imagenPlatillo1" name="imagenPlatillo1" value="{{ old('imagenPlatillo1', $menu->imagenPlatillo1)}}"   /> 
    </div>
</div>

<div class="row mb-3">
    <label for="imagenPlatillo2" class="col-sm-4 col-form-label">Imagen 2: </label>
    <div class="col-sm-8">
        <input type="file" class="form-control" id="imagenPlatillo2" name="imagenPlatillo2" value="{{ old('imagenPlatillo2', $menu->imagenPlatillo2)}}"  accept="image/*"  /> 
    </div>
</div>

<div class="row mb-3">
    <label for="ordenPlatillo" class="col-sm-4 col-form-label">Orden: </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="ordenPlatillo" name="ordenPlatillo" value="{{ old('ordenPlatillo', $menu->ordenPlatillo)}}"   /> 
    </div>
</div>

<div class="row mb-3">
    <label for="colorFondoMenu" class="col-sm-4 col-form-label">Color de fondo de menu: </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="colorFondoMenu" name="colorFondoMenu" value="{{ old('colorFondoMenu', $menu->colorFondoMenu)}}"   /> 
    </div>
</div>

<div class="row mb-3">
    <label for="colorFuenteMenu" class="col-sm-4 col-form-label">Color de fuente de menu: </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="colorFuenteMenu" name="colorFuenteMenu" value="{{ old('colorFuenteMenu', $menu->colorFuenteMenu)}}"   /> 
    </div>
</div>

<div class="form-check form-switch">
    <input type="hidden" name="visiblePlatillo" value="0">
    <input type="checkbox" class="form-check-input" id="visiblePlatillo" name="visiblePlatillo" value="1"  {{old('visiblePlatillo', $menu->visiblePlatillo) == 1 ? 'checked' : ''}} /> 
    <label for="visiblePlatillo" class="col-sm-4 form-check-label">Platillo visible</label>
</div>

<div class="d-grid gap-2 col-6 mx-auto">
<input type="submit" value="Enviar" class="btn btn-success">
<a href="{{ route('menus.index') }}" class="btn btn-danger">Volver</a>
</div>