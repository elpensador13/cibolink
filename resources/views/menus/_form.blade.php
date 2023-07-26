@csrf

<?php
$numero = Auth::user()->id ;
?>
<br>


@foreach($establecimientos  as $id => $user_id)
    @if ($user_id == $numero )
      <li>{{ $id}}</li>
    @endif
            @endforeach

           
<div class="row mb-3">
    <label for="nombrePlatillo" class="col-sm-4 col-form-label">Nombre del platillo: </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="nombrePlatillo" name="nombrePlatillo" value="{{ old('nombrePlatillo', $menu->nombrePlatillo)}}"   /> 
    </div>
</div>



<div class="row mb-3">
    <label for="establecimiento_id" class="col-sm-4 col-form-label">establecimiento id: </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="establecimiento_id" name="establecimiento_id" value="{{ old('establecimiento_id', $menu->establecimiento_id)}}"   /> 
    </div>
</div>


<div class="row mb-3">
    <label for="categoria_id" class="col-sm-4 col-form-label">categoria: </label>
    <div class="col-sm-8">
        <select class="form-select" id="categoria_id" name="categoria_id" value="{{ old('categoria_id', $menu->categoria_id)}}" >
            <option selected>Choose...</option>
            @foreach($categoria  as $id => $nombreCategoria)
                <option value="{{ $id}}">{{ $nombreCategoria}}</option>
            @endforeach
        </select>
    </div>
</div>


<div class="d-grid gap-2 col-6 mx-auto">
<input type="submit" value="Enviar" class="btn btn-success">
<a href="{{ route('menus.index') }}" class="btn btn-danger">Volver</a>
</div>