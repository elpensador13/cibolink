<div class="row mb-3">
  <label for="nombreCategoria" class="col-sm-2 col-form-label">Nombre:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria"  value="{{ old('nombreCategoria', $establecimiento->nombreCategoria) }}" /> 
  </div>
</div>
<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="visible" name="visible" value="{{ old('visible', $establecimiento->visible) }}" />
        <label for="visible" class="form-check-label" >
            Categoriavisible
        </label>
      </div>
    </div>
  </div>
</div>
<div class="row mb-3">
  <label for="colorFondoCategoria" class="col-sm-2 col-form-label">Color de fondo: </label>
  <div class="col-sm-10">
    <input type="color" class="form-control" id="colorFondoCategoria" name="colorFondoCategoria"  value="{{ old('colorFondoCategoria', $establecimiento->colorFondoCategoria) }}" /> 
  </div>
</div>
<div class="row col-mb-3">
  <label for="colorFuenteCategoria" class="col-sm-2 col-form-label">Color de Fuente:</label>
  <div class="col-sm-10">
    <input type="color" class="form-control" id="colorFuenteCategoria" name="colorFuenteCategoria"  value="{{ old('colorFuenteCategoria', $establecimiento->colorFuenteCategoria) }}" /> 
  </div>
</div>
<div class="row col-md-3">
  <div class="col"> 
  <label for="horaInicioCategoria" class="col-sm-2 col-form-label">Hora de inicio: </label>
  <div class="col-sm-10">
    <input type="time" ="form-control" id="horaInicioCategoria" name="horaInicioCategoria" value="{{ old('horaInicioCategoria', $establecimiento->horaInicioCategoria) }}" /> 
  </div>
</div>
<div class="col">
  <label for="horaFinCategoria" class="col-sm-2 col-form-label">Hora de finalización: </label>
  <div class="col-sm-10">
    <input type="time" ="form-control" id="horaFinCategoria" name="horaFinCategoria" value="{{ old('horaFinCategoria', $establecimiento->horaFinCategoria) }}" /> 
  </div>
</div>
<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="lunesCategoria" name="lunesCategoria" value="{{ old('lunesCategoria', $establecimiento->lunesCategoria) }}" >
      <label for="lunesCategoria" class="form-check-label">
        Lunes: 
      </label>
    </div>
  </div>
</div>
<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="martesCategoria" name="martesCategoria" value="{{ old('martesCategoria', $establecimiento->martesCategoria) }}" >
      <label for="martesCategoria" class="form-check-label">
        Martes: 
      </label>
    </div>
  </div>
</div>
<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="miercolesCategoria" name="miercolesCategoria" value="{{ old('miercolesCategoria', $establecimiento->miercolesCategoria) }}" >
      <label for="miercolesCategoria" class="form-check-label">
        Miércoles: 
      </label>
    </div>
  </div>
</div>
<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="juevesCategoria" name="juevesCategoria" value="{{ old('juevesCategoria', $establecimiento->juevesCategoria) }}" >
      <label for="juevesCategoria" class="form-check-label">
        Jueves: 
      </label>
    </div>
  </div>
</div>
<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="viernesCategoria" name="viernesCategoria" value="{{ old('viernesCategoria', $establecimiento->viernesCategoria) }}" >
      <label for="viernesCategoria" class="form-check-label">
        Viernes: 
      </label>
    </div>
  </div>
</div>
<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="sabadoCategoria" name="sabadoCategoria" value="{{ old('sabadoCategoria', $establecimiento->sabadoCategoria) }}" >
      <label for="sabadoCategoria" class="form-check-label">
        Sábado: 
      </label>
    </div>
  </div>
</div>
<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="domingoCategoria" name="domingoCategoria" value="{{ old('domingoCategoria', $establecimiento->domingoCategoria) }}" >
      <label for="domingoCategoria" class="form-check-label">
        Domingo: 
      </label>
    </div>
  </div>
</div>