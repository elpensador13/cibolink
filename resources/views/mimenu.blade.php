@foreach($establecimientos  as $establecimiento) 
    @if ($establecimiento->user_id == $UsuarioId )
      <div class="alert alert-dark shadow p-3 mb-5 rounded row" role="alert">  
        <img src="{{ asset($establecimiento['logo']) }}" alt="imagen" class="img-thumbnail col-2">
        <div class="col-10 text-center">
          <h2 class="alert-heading">{{$establecimiento['nombreEstablecimiento']}}</h2>
          <p class="text-center">{{$establecimiento['slogan']}}</p>
        </div>   
        
        <hr class="mt-3">
        <p class="mb-2 text-center">
              @if ($establecimiento['lunesEstablecimiento'] == 1 ) 
                Lu:
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaInicioJuevesEstablecimiento'])->format('H:i');}}
                  -
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaFinJuevesEstablecimiento'])->format('H:i');}}
              @else
              @endif
              @if ($establecimiento['martesEstablecimiento'] == 1 ) 
                | Ma:
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaInicioMartesEstablecimiento'])->format('H:i');}}
                  -
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaFinMartesEstablecimiento'])->format('H:i');}}
              @else
              @endif
              @if ($establecimiento['miercolesEstablecimiento'] == 1 ) 
                | Mi:  
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaInicioMiercolesEstablecimiento'])->format('H:i');}}
                  -
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaFinMiercolesEstablecimiento'])->format('H:i');}}
              @else
              @endif
              @if ($establecimiento['juevesEstablecimiento'] == 1 ) 
                | Ju: 
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaInicioJuevesEstablecimiento'])->format('H:i');}}
                  -
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaFinJuevesEstablecimiento'])->format('H:i');}}
              @else
              @endif
              @if ($establecimiento['viernesEstablecimiento'] == 1 ) 
                | Vi: 
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaInicioViernesEstablecimiento'])->format('H:i');}}
                  -
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaFinViernesEstablecimiento'])->format('H:i');}}
              @else
              @endif
              @if ($establecimiento['sabadoEstablecimiento'] == 1 ) 
                | Sa: 
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaInicioSabadoEstablecimiento'])->format('H:i');}}
                  -
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaFinSabadoEstablecimiento'])->format('H:i');}}
              @else
              @endif
              @if ($establecimiento['horaFinSabadoEstablecimiento'] == 1 ) 
                | Do: 
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaInicioDomingoEstablecimiento'])->format('H:i');}}
                  -
                  {{$fechaFormateada = \Carbon\Carbon::parse($establecimiento['horaFinDomingoEstablecimiento'])->format('H:i');}}
              @else
              @endif
        </p>
        <hr>
        <div class="accordion" id="accordion{{$establecimientoId}}">
          @foreach($categorias  as $categoria) 
            @if ($categoria->establecimiento_id ==  $establecimientoId  )
            <div class="accordion-item">
              <h2 class="accordion-header ">
                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$categoria['id']}}" aria-expanded="false" aria-controls="collapse{{$categoria['id']}}">
                  {{$categoria['nombreCategoria']}} de {{$categoria['horaInicioCategoria']}} a {{$categoria['horaFinCategoria']}} 
                </button>
              </h2>
              <div id="collapse{{$categoria['id']}}" class="accordion-collapse collapse show" data-bs-parent="#accordion{{$establecimientoId}}">
                <div class="accordion-body">
                  <div class="row">
                    <?php $categoriaId = $categoria['id'] ;?> 
                    @foreach($menus as $menu)
                      @if ($menu->categoria_id ==  $categoriaId )
                        <div class="col-xl-3 col-lg-4 col-6 mb-2">
                          <div class="card  h-100">  
                            <img src="{{$menu['imagenPlatillo2']}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title  text-center"> {{$menu['nombrePlatillo']}}</h5>
                              <p class="card-text"> {{$menu['descripcionPlatillo']}}</p> 
                            </div>
                            <div class="card-footer text-body-secondary">
                            Precio: ${{$menu['precioPlatillo']}}
                            </div>
                          </div> 
                        </div>
                      @else
                      @endif
                    @endforeach
                  </div> 
                </div>
              </div>
            </div>
            @else
            @endif
          @endforeach
        </div>
        <p class="text-center mt-4">Ubicanos en: {{$establecimiento['calleNumero']}}, {{$establecimiento['colonia']}}, {{$establecimiento['municipio']}}, {{$establecimiento['estado']}}, {{$establecimiento['cp']}}</p>
        <p class="text-center">Reservaciones quejas y sugerencias al telefono {{$establecimiento['telefono1']}} y/o al correo {{$establecimiento['email']}}</p>
      </div>
    @else
    @endif
@endforeach
