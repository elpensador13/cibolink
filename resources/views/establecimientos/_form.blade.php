@csrf
<div class="row mb-3">
                <label for="nombreEstablecimiento" class="col-sm-2 col-form-label">Nombre del establecimiento: *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombreEstablecimiento" name="nombreEstablecimiento" value="{{ old('nombreEstablecimiento', $establecimiento->nombreEstablecimiento)}}"   /> 
                </div>
            </div>
            <div class="row mb-3">
                <label for="slogan" class="col-sm-2 col-form-label">Slogan: *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="slogan" name="slogan" value="{{ old('slogan', $establecimiento->slogan)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
                <label for="logo" class="col-sm-2 col-form-label">Logotipo del establecimiento:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="logo" name="logo" value="{{ old('logo', $establecimiento->logo)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
                <label for="calleNumero" class="col-sm-2 col-form-label">Domicilio (calle y número): *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="calleNumero" name="calleNumero" value="{{ old('calleNumero', $establecimiento->calleNumero)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
                <label for="colonia" class="col-sm-2 col-form-label">Colonia: *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colonia" name="colonia" value="{{ old('colonia', $establecimiento->colonia)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
                <label for="municipio" class="col-sm-2 col-form-label">Municipio: *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="municipio" name="municipio" value="{{ old('municipio', $establecimiento->municipio)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
                <label for="codigoPostal" class="col-sm-2 col-form-label">Código postal: *</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="codigoPostal" name="cp" value="{{ old('cp', $establecimiento->cp)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
                <label for="estado" class="col-sm-2 col-form-label">Estado: *</label>
                <div class="col-sm-10">
                    <select id="estado" class="form-select" name="estado" value="{{ old('estado', $establecimiento->estado)}}">
                        <option value="">Seleccione estado...</option>
                        <option value="Ciudad de México">Ciudad de México</option>
                </div>
            </div>
            <div class="row mb-3">
                <label for="telefono1" class="col-sm-2 col-form-label">Teléfono 1: *</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="telefono1" name="telefono1" value="{{ old('telefono1', $establecimiento->telefono1)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
                <label for="telefono2" class="col-sm-2 col-form-label">Teléfono 2:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="telefono2" name="telefono2" value="{{ old('telefono2', $establecimiento->telefono2)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
                <label for="encargado" class="col-sm-2 col-form-label">Nombre del encargado: *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="encargado" name="encargado" value="{{ old('encargado', $establecimiento->encargado)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email del encargado: *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $establecimiento->email)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
                <label for="sitioWeb" class="col-sm-2 col-form-label">Sitio web:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="sitioWeb" name="sitioWeb" value="{{ old('sitioWeb', $establecimiento->sitioWeb)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
            <label for="faceBook" class="col-sm-2 col-form-label">Facebook:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Facebook" name="faceBook" value="{{ old('faceBook', $establecimiento->faceBook)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
            <label for="instagram" class="col-sm-2 col-form-label">Instagram:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $establecimiento->instagram)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
            <label for="twitter" class="col-sm-2 col-form-label">Twitter:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="twitter" name="twitter" value="{{ old('twitter', $establecimiento->twitter)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
            <label for="tiktok" class="col-sm-2 col-form-label">Tik Tok:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tiktok" name="tiktok" value="{{ old('tiktok', $establecimiento->tiktok)}}" /> 
                </div>
            </div>
            <div class="row mb-3">
            <label for="youtube" class="col-sm-2 col-form-label">YouTube:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="youtube" name="youtube" value="{{ old('youtube', $establecimiento->youtube)}}" /> 
                </div>
            </div>
            <div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                <th>DÍA</th>
                <th>HORA DE APERTURA</th>
                <th>HORA DE CIERRE</th>
</tr>
</thead>
<tbody>
<tr>
    <td>
    <div class="form-check form-switch">
    <input type="hidden" name="lunesEstablecimiento" value="0">
    <input type="checkbox" class="form-check-input" id="lunesEstablecimiento" name="lunesEstablecimiento" value="1"  {{old('lunesEstablecimiento', $establecimiento ->lunesEstablecimiento) == 1 ? 'checked' : ''}} /> 
    <label for="lunesEstablecimiento" class="col-sm-4 form-check-label">Abierto en lunes</label>
</div>
</td>
<td>
    <input type="time" class="form-control" id="horaInicioLunesEstablecimiento" name="horaInicioLunesEstablecimiento" value="{{ old('HoraInicioLunesEstablecimiento', $establecimiento->horaInicioLunesEstablecimiento)}}" />
</td>
<td>
    <input type="time" class="form-control" id="horaFinLunesEstablecimiento" name="horaFinLunesEstablecimiento" value="{{ old('HoraFinLunesEstablecimiento', $establecimiento->horaFinLunesEstablecimiento)}}" />
</td>
</tr>
<tr>
    <td>
    <div class="form-check form-switch">
    <input type="hidden" name="martesEstablecimiento" value="0">
    <input type="checkbox" class="form-check-input" id="martesEstablecimiento" name="martesEstablecimiento" value="1"  {{old('martesEstablecimiento', $establecimiento ->martesEstablecimiento) == 1 ? 'checked' : ''}} /> 
    <label for="martesEstablecimiento" class="col-sm-4 form-check-label">Abierto en martes</label>
</div>
      </td>
<td>
    <input type="time" class="form-control" id="horaInicioMartesEstablecimiento" name="horaInicioMartesEstablecimiento" value="{{ old('HoraInicioMartesEstablecimiento', $establecimiento->horaInicioMartesEstablecimiento)}}" />
</td>
<td>
    <input type="time" class="form-control" id="horaFinMartesEstablecimiento" name="horaFinMartesEstablecimiento" value="{{ old('HoraFinMartesEstablecimiento', $establecimiento->horaFinMartesEstablecimiento)}}" />
</td>
</tr>
<tr>
    <td>
    <div class="form-check form-switch">
    <input type="hidden" name="miercolesEstablecimiento" value="0">
    <input type="checkbox" class="form-check-input" id="miercolesEstablecimiento" name="miercolesEstablecimiento" value="1"  {{old('miercolesEstablecimiento', $establecimiento ->miercolesEstablecimiento) == 1 ? 'checked' : ''}} /> 
    <label for="miercolesEstablecimiento" class="col-sm-4 form-check-label">Abierto en miércoles</label>
</div>
</td>
<td>
    <input type="time" class="form-control" id="horaInicioMiercolesEstablecimiento" name="horaInicioMiercolesEstablecimiento" value="{{ old('HoraInicioMiercolesEstablecimiento', $establecimiento->horaInicioMiercolesEstablecimiento)}}" />
</td>
<td>
    <input type="time" class="form-control" id="horaFinMiercolesEstablecimiento" name="horaFinMiercolesEstablecimiento" value="{{ old('HoraFinMiercolesEstablecimiento', $establecimiento->horaFinMiercolesEstablecimiento)}}" />
</td>
</tr>
<tr>
    <td>
    <div class="form-check form-switch">
    <input type="hidden" name="juevesEstablecimiento" value="0">
    <input type="checkbox" class="form-check-input" id="juevesEstablecimiento" name="juevesEstablecimiento" value="1"  {{old('juevesEstablecimiento', $establecimiento ->juevesEstablecimiento) == 1 ? 'checked' : ''}} /> 
    <label for="juevesEstablecimiento" class="col-sm-4 form-check-label">Abierto en jueves</label>
</div>
        
</td>
<td>
    <input type="time" class="form-control" id="horaInicioJuevesEstablecimiento" name="horaInicioJuevesEstablecimiento" value="{{ old('HoraInicioJuevesEstablecimiento', $establecimiento->horaInicioJuevesEstablecimiento)}}" />
</td>
<td>
    <input type="time" class="form-control" id="horaFinJuevesEstablecimiento" name="horaFinJuevesEstablecimiento" value="{{ old('HoraFinJuevesEstablecimiento', $establecimiento->horaFinJuevesEstablecimiento)}}" />
</td>
</tr>
<tr>
    <td>
    <div class="form-check form-switch">
    <input type="hidden" name="viernesEstablecimiento" value="0">
    <input type="checkbox" class="form-check-input" id="viernesEstablecimiento" name="viernesEstablecimiento" value="1"  {{old('viernesEstablecimiento', $establecimiento ->viernesEstablecimiento) == 1 ? 'checked' : ''}} /> 
    <label for="viernesEstablecimiento" class="col-sm-4 form-check-label">Abierto en viernes</label>
</div>
    </td>
<td>
    <input type="time" class="form-control" id="horaInicioViernesEstablecimiento" name="horaInicioViernesEstablecimiento" value="{{ old('HoraInicioViernesEstablecimiento', $establecimiento->horaInicioViernesEstablecimiento)}}" />
</td>
<td>
    <input type="time" class="form-control" id="horaFinViernesEstablecimiento" name="horaFinViernesEstablecimiento" value="{{ old('HoraFinViernesEstablecimiento', $establecimiento->horaFinViernesEstablecimiento)}}" />
</td>
</tr>
<tr>
    <td>
    <div class="form-check form-switch">
    <input type="hidden" name="sabadoEstablecimiento" value="0">
    <input type="checkbox" class="form-check-input" id="sabadoEstablecimiento" name="sabadoEstablecimiento" value="1"  {{old('sabadoEstablecimiento', $establecimiento ->sabadoEstablecimiento) == 1 ? 'checked' : ''}} /> 
    <label for="sabadoEstablecimiento" class="col-sm-4 form-check-label">Abierto en sábado</label>
</div>
    </td>
<td>
    <input type="time" class="form-control" id="horaInicioSabadoEstablecimiento" name="horaInicioSabadoEstablecimiento" value="{{ old('HoraInicioSabadoEstablecimiento', $establecimiento->horaInicioSabadoEstablecimiento)}}" />
</td>
<td>
    <input type="time" class="form-control" id="horaFinSabadoEstablecimiento" name="horaFinSabadoEstablecimiento" value="{{ old('HoraFinSabadoEstablecimiento', $establecimiento->horaFinSabadoEstablecimiento)}}" />
</td>
</tr>
<tr>
    <td>
    <div class="form-check form-switch">
    <input type="hidden" name="domingoEstablecimiento" value="0">
    <input type="checkbox" class="form-check-input" id="domingoEstablecimiento" name="domingoEstablecimiento" value="1"  {{old('domingoEstablecimiento', $establecimiento ->domingoEstablecimiento) == 1 ? 'checked' : ''}} /> 
    <label for="domingoEstablecimiento" class="col-sm-4 form-check-label">Abierto en domingo</label>
</div>
        </td>
<td>
    <input type="time" class="form-control" id="horaInicioDomingoEstablecimiento" name="horaInicioDomingoEstablecimiento" value="{{ old('HoraInicioDomingoEstablecimiento', $establecimiento->horaInicioDomingoEstablecimiento)}}" />
</td>
<td>
    <input type="time" class="form-control" id="horaFinDomingoEstablecimiento" name="horaFinDomingoEstablecimiento" value="{{ old('HoraFinDomingoEstablecimiento', $establecimiento->horaFinDomingoEstablecimiento)}}" />
</td>
</tr>
</tbody>
</table>







<div class="d-grid gap-2 col-6 mx-auto">
<input type="submit" value="Enviar" class="btn btn-success">
<a href="{{ route('establecimientos.index') }}" class="btn btn-danger">Volver</a>
</div>






