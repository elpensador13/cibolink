@csrf

<?php
$numero = Auth::user()->id ;
?>

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
  <label for="nombreCategoria" class="col-sm-2 col-form-label">Nombre:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria"  value="{{ old('nombreCategoria', $categoria->nombreCategoria) }}" /> 
  </div>
</div>

<div class="form-check form-switch">
    <input type="hidden" name="visible" value="0">
    <input type="checkbox" class="form-check-input" id="visible" name="visible" value="1"  {{old('visible', $categoria->visible) == 1 ? 'checked' : ''}} /> 
    <label for="visible" class="col-sm-4 form-check-label">Categoria visible:</label>
</div>

<div class="row mb-3">
  <label for="colorFondoCategoria" class="col-sm-2 col-form-label">Color de fondo de la Categoría: </label>
  <div class="col-sm-10">
    <input type="color" class="form-control" id="colorFondoCategoria" name="colorFondoCategoria"  value="{{ old('colorFondoCategoria', $categoria->colorFondoCategoria) }}" /> 
  </div>
</div>

<div class="row mb-3">
  <label for="colorFuenteCategoria" class="col-sm-2 col-form-label">Color de la Fuente de la Categoría: </label>
  <div class="col-sm-10">
    <input type="color" class="form-control" id="colorFuenteCategoria" name="colorFuenteCategoria"  value="{{ old('colorFuenteCategoria', $categoria->colorFuenteCategoria) }}" /> 
  </div>
</div>

<div class="row md-3">
  <label for="horaInicioCategoria" class="col-sm-2 col-form-label">Hora de Inicio de la Categoría: </label>
  <div class="col-sm-10">
    <input type="time" class="form-control" id="horaInicioCategoria" name="horaInicioCategoria" value="{{ old('horaInicioCategoria', $categoria->horaInicioCategoria) }}" /> 
  </div>
</div>

<div class="row md-3">
  <label for="horaFinCategoria" class="col-sm-2 col-form-label">Hora de Finalización de la Categoría: </label>
  <div class="col-sm-10">
    <input type="time" class="form-control" id="horaFinCategoria" name="horaFinCategoria" value="{{ old('horaFinCategoria', $categoria->horaFinCategoria) }}" /> 
  </div>
</div>

<div class="form-check form-switch">
    <input type="hidden" name="lunesCategoria" value="0">
    <input type="checkbox" class="form-check-input" id="lunesCategoria" name="lunesCategoria" value="1"  {{old('lunesCategoria', $categoria->lunesCategoria) == 1 ? 'checked' : ''}} /> 
    <label for="lunesCategoria" class="col-sm-4 form-check-label">Lunes: </label>
</div>

<div class="form-check form-switch">
    <input type="hidden" name="martesCategoria" value="0">
    <input type="checkbox" class="form-check-input" id="martesCategoria" name="martesCategoria" value="1"  {{old('martesCategoria', $categoria->martesCategoria) == 1 ? 'checked' : ''}} /> 
    <label for="martesCategoria" class="col-sm-4 form-check-label">Martes:</label>
</div>

<div class="form-check form-switch">
    <input type="hidden" name="miercolesCategoria" value="0">
    <input type="checkbox" class="form-check-input" id="miercolesCategoria" name="miercolesCategoria" value="1"  {{old('miercolesCategoria', $categoria->miercolesCategoria) == 1 ? 'checked' : ''}} /> 
    <label for="miercolesCategoria" class="col-sm-4 form-check-label">Miércoles:</label>
</div>

<div class="form-check form-switch">
    <input type="hidden" name="juevesCategoria" value="0">
    <input type="checkbox" class="form-check-input" id="juevesCategoria" name="juevesCategoria" value="1"  {{old('juevesCategoria', $categoria->juevesCategoria) == 1 ? 'checked' : ''}} /> 
    <label for="juevesCategoria" class="col-sm-4 form-check-label">Jueves:</label>
</div>

<div class="form-check form-switch">
    <input type="hidden" name="viernesCategoria" value="0">
    <input type="checkbox" class="form-check-input" id="viernesCategoria" name="viernesCategoria" value="1"  {{old('viernesCategoria', $categoria->viernesCategoria) == 1 ? 'checked' : ''}} /> 
    <label for="viernesCategoria" class="col-sm-4 form-check-label">Viernes</label>
</div>

<div class="form-check form-switch">
    <input type="hidden" name="sabadoCategoria" value="0">
    <input type="checkbox" class="form-check-input" id="sabadoCategoria" name="sabadoCategoria" value="1"  {{old('sabadoCategoria', $categoria->sabadoCategoria) == 1 ? 'checked' : ''}} /> 
    <label for="sabadoCategoria" class="col-sm-4 form-check-label">Sabado</label>
</div>

<div class="form-check form-switch">
    <input type="hidden" name="domingoCategoria" value="0">
    <input type="checkbox" class="form-check-input" id="domingoCategoria" name="domingoCategoria" value="1"  {{old('domingoCategoria', $categoria->domingoCategoria) == 1 ? 'checked' : ''}} /> 
    <label for="domingoCategoria" class="col-sm-4 form-check-label">Domingo</label>
</div>

<div class="d-grid gap-2 col-6 mx-auto">
<input type="submit" value="Enviar" class="btn btn-success">
<a href="{{ route('categorias.index' , ['establecimientoId' => $id]) }}" class="btn btn-danger">Volver</a>
</div>