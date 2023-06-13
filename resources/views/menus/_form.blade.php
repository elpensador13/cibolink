
<div class="row mb-3">
    <label for="nombrePlatillo" class="col-sm-2 col-form-label">Nombre:</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" id="nombrePlatillo" name="nombrePlatillo"  value="{{ old('nombrePlatillo', $menu->nombrePlatillo) }}" /> 
    </div>
</div>

<div class="row mb-3">
    <label for="descripcionPlatillo" class="col-sm-2 col-form-label">Descripción:</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" id="descripcionPlatillo" name="descripcionPlatillo"  value="{{ old('descripcionPlatillo', $menu->descripcionPlatillo) }}" /> 
    </div>
</div>

<div class="row mb-3">
    <label for="precioPlatillo" class="col-sm-2 col-form-label">Precio:</label>
    <div class="col-sm-10">
     <input type="number" class="form-control" id="precioPlatillo" name="precioPlatillo"  value="{{ old('precioPlatillo', $menu->precioPlatillo) }}" /> 
    </div>
</div>

<div class="row mb-3">
    <label for="imagenPlatillo1" class="col-sm-2 col-form-label">Imagen 1:</label>
    <div class="col-sm-10">
     <input type="file" class="form-control" id="imagenPlatillo1" name="imagenPlatillo1"  value="Imagen 1" /> 
    </div>
</div>

<div class="row mb-3">
    <label for="imagenPlatillo2" class="col-sm-2 col-form-label">Imagen 2:</label>
    <div class="col-sm-10">
     <input type="file" class="form-control" id="imagenPlatillo2" name="imagenPlatillo2"  value="Imagen 2" /> 
    </div>
</div>

<div class="row mb-3">
    <label for="ordenPlatillo" class="col-sm-2 col-form-label">Orden platillo:</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" id="ordenPlatillo" name="ordenPlatillo"  value="{{ old('ordenPlatillo', $menu->ordenPlatillo) }}" /> 
    </div>
</div>

<div class="row mb-3">
    <legend class="col-form-label col-sm-2">Platillo</legend>
    <div class="col-sm-8">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="visiblePlatillo" name="visiblePlatillo" value="{{ old('visiblePlatillo', $menu->visiblePlatillo) }}" >
        <label class="form-check-label" for="visiblePlatillo">
            Visible
        </label>
      </div>
    </div>
  </div>

<div class="row mb-3">
    <label for="colorFondoMenu" class="col-sm-2 col-form-label">Color de fondo:</label>
    <div class="col-sm-10">
     <input type="color" class="form-control" id="colorFondoMenu" name="colorFondoMenu"  value="{{ old('colorFondoMenu', $menu->colorFondoMenu) }}" /> 
    </div>
</div>

<div class="row mb-3">
    <label for="colorFuenteMenu" class="col-sm-2 col-form-label">Color de Fuente:</label>
    <div class="col-sm-10">
     <input type="color" class="form-control" id="colorFuenteMenu" name="colorFuenteMenu"  value="{{ old('colorFuenteMenu', $menu->colorFuenteMenu) }}" /> 
    </div>
</div>

<div class="row mb-3">
    <label for="establecimiento_Id" class="col-sm-2 col-form-label">establecimiento_Id:</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" id="establecimiento_Id" name="establecimiento_Id"   /> 
    </div>
</div>

<div class="row mb-3">
    <label for="categoria_Id" class="col-sm-2 col-form-label">categoria_Id:</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" id="categoria_Id" name="categoria_Id" /> 
    </div>
</div>


<div class="flex justify-between items-center">
    <a href="{{ route('menus.index') }}" class="btn btn-secondary">Volver</a>

    <input type="submit" value="Enviar" class="btn btn-secondary">
</div>