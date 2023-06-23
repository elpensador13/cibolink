@csrf
<div class="row mb-3">
    <label for="nombreEstablecimiento" class="col-sm-4 col-form-label">Nombre del establecimiento: </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="nombreEstablecimiento" name="nombreEstablecimiento" value="{{ old('nombreEstablecimiento', $establecimiento->nombreEstablecimiento)}}"   /> 
    </div>
</div>

<div class="d-grid gap-2 col-6 mx-auto">
<input type="submit" value="Enviar" class="btn btn-success">
<a href="{{ route('establecimientos.index') }}" class="btn btn-danger">Volver</a>
</div>






