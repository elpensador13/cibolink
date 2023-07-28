@csrf

<div class="row mb-3">
  <label for="nombreCategoria" class="col-sm-2 col-form-label">Nombre de la Categoría: </label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria"  value="{{ old('nombreCategoria', $categoria->nombreCategoria) }}" /> 
  </div>
</div>

<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="visible" name="visible" value="{{ old('visible', $categoria->visible) }}" />
        <label for="visible" class="form-check-label" >
            Visible Categoría:
        </label>
      </div>
    </div>
  </div>

<div class="row mb-3">
  <label for="colorFondoCategoria" class="col-sm-2 col-form-label">Color de fondo de la Categoría: </label>
  <div class="col-sm-10">
    <input type="color" class="form-control" id="colorFondoCategoria" name="colorFondoCategoria"  value="{{ old('colorFondoCategoria', $categoria->colorFondoCategoria) }}" /> 
  </div>
</div>

<div class="row col-mb-3">
  <label for="colorFuenteCategoria" class="col-sm-2 col-form-label">Color de la Fuente de la Categoría: </label>
  <div class="col-sm-10">
    <input type="color" class="form-control" id="colorFuenteCategoria" name="colorFuenteCategoria"  value="{{ old('colorFuenteCategoria', $categoria->colorFuenteCategoria) }}" /> 
  </div>
</div>

<div class="row col-md-3">
  <div class="col"> 
  <label for="horaInicioCategoria" class="col-sm-2 col-form-label">Hora de Inicio de la Categoría: </label>
  <div class="col-sm-10">
    <input type="time" class="form-control" id="horaInicioCategoria" name="horaInicioCategoria" value="{{ old('horaInicioCategoria', $categoria->horaInicioCategoria) }}" /> 
  </div>
</div>

<div class="col">
  <label for="horaFinCategoria" class="col-sm-2 col-form-label">Hora de Finalización de la Categoría: </label>
  <div class="col-sm-10">
    <input type="time" class="form-control" id="horaFinCategoria" name="horaFinCategoria" value="{{ old('horaFinCategoria', $categoria->horaFinCategoria) }}" /> 
  </div>
</div>

<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="lunesCategoria" name="lunesCategoria" value="{{ old('lunesCategoria', $categoria->lunesCategoria) }}" >
      <label for="lunesCategoria" class="form-check-label">
        Lunes: 
      </label>
    </div>
  </div>
</div>

<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="martesCategoria" name="martesCategoria" value="{{ old('martesCategoria', $categoria->martesCategoria) }}" >
      <label for="martesCategoria" class="form-check-label">
        Martes: 
      </label>
    </div>
  </div>
</div>

<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="miercolesCategoria" name="miercolesCategoria" value="{{ old('miercolesCategoria', $categoria->miercolesCategoria) }}" >
      <label for="miercolesCategoria" class="form-check-label">
        Miércoles: 
      </label>
    </div>
  </div>
</div>

<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="juevesCategoria" name="juevesCategoria" value="{{ old('juevesCategoria', $categoria->juevesCategoria) }}" >
      <label for="juevesCategoria" class="form-check-label">
        Jueves: 
      </label>
    </div>
  </div>
</div>

<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="viernesCategoria" name="viernesCategoria" value="{{ old('viernesCategoria', $categoria->viernesCategoria) }}" >
      <label for="viernesCategoria" class="form-check-label">
        Viernes: 
      </label>
    </div>
  </div>
</div>

<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="sabadoCategoria" name="sabadoCategoria" value="{{ old('sabadoCategoria', $categoria->sabadoCategoria) }}" >
      <label for="sabadoCategoria" class="form-check-label">
        Sábado: 
      </label>
    </div>
  </div>
</div>

<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="domingoCategoria" name="domingoCategoria" value="{{ old('domingoCategoria', $categoria->domingoCategoria) }}" >
      <label for="domingoCategoria" class="form-check-label">
        Domingo: 
      </label>
    </div>
  </div>
</div>

<div class="d-grid gap-2 col-6 mx-auto">
<input type="submit" value="Enviar" class="btn btn-success">
<a href="{{ route('categorias.index') }}" class="btn btn-danger">Volver</a>
</div>