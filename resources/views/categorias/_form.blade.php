@csrf

<div class="row mb-3">
  <label for="nombreCategoria" class="col-sm-2 col-form-label">Nombre:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria"  value="{{ old('nombreCategoria', $categoria->nombreCategoria) }}" /> 
  </div>
</div>

<div class="d-grid gap-2 col-6 mx-auto">
<input type="submit" value="Enviar" class="btn btn-success">
<a href="{{ route('categorias.index') }}" class="btn btn-danger">Volver</a>
</div>