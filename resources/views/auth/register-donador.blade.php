@extends('welcome')

@section('authorization')
    <main id="main">
        <div id="contenedor" class="container mt-4 mb-4 pb-4">
            <div id="encabezado" class="row mb-5">
                <div class="col-12 text-center">
                    <img src="{{ URL::asset('img/logo.png') }}" alt="">
                </div>
            </div>
            
            <form class="form-horizontal" name="registro-donador" action="">
                <div class="row text-center mt-5 ps-4 pe-4">
                    <div class="col-12 col-md-6 text-start">
                        <div class="form-group">
                            <label for="email" class="control-label">Correo</label>
                            <input type="email" value="" name="email" id="email" class="form-control mb-4" placeholder="Tu correo...">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Contraseña</label>
                            <input type="password" value="" name="password" id="password" class="form-control mb-4" placeholder="Tu contraseña...">
                        </div>
                        <div class="form-group">
                            <label for="nombre" class="control-label">Nombre</label>
                            <input type="text" value="" name="nombre" id="nombre" class="form-control mb-4" placeholder="Tu nombre...">
                        </div>
                        <div class="form-group">
                            <label for="apellidopaterno" class="control-label">Apellido paterno</label>
                            <input type="text" value="" name="apellidopaterno" id="apellidopaterno" class="form-control mb-4" placeholder="Tu apellido paterno...">
                        </div>
                        <div class="form-group">
                            <label for="apellidomaterno" class="control-label">Apellido materno</label>
                            <input type="text" value="" name="apellidomaterno" id="apellidomaterno" class="form-control mb-4" placeholder="Tu apellido materno...">
                        </div>
                        <div class="form-group">
                            <label for="tiposangre" class="control-label">Tipo de sangre</label>
                            <select class="form-control mb-4">
                                <option value="">Tu tipo de sangre...</option>
                                @foreach($sangres as $sangre)
                                <option value='{{$sangre->id}}'>{{$sangre->tipo}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col d-grid">
                            <button class="btn btn-secondary mt-4 mb-4" type="button">Tomar test de viabilidad  <i class="fa-regular fa-file-lines"></i></button >
                        </div>
                        
                    </div>  
                    <div class="col-12 col-md-6 text-start">
                            <div class="form-group">
                                <label for="fotoperfil" class="control-label">Foto de perfil</label>
                                <input type="file" name="fotoperfil" id="fotoperfil" class="form-control mb-4">
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="control-label">Telefono</label>
                                <input type="text" value="" name="telefono" id="telefono" class="form-control mb-4" placeholder="Tu telefono...">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Estado</label>
                                <select class="form-control mb-4" id="estado" name="estado">
                                    <option value="0">Tu estado...</option>
                                    @foreach($estados as $estado)
                                    <option value="{{$estado->id}}">{{$estado->nombre}}</option>
                                    @endforeach
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="ciudad" class="control-label">Ciudad</label>
                                <select class="ciudad form-control mb-4" id="ciudad" name="ciudad">
                                    <option value="0">Tu ciudad...</option>
                                </select>
                            </div>
                            <input type="hidden" name="estado_hidden" value="0">
                            <div class="form-group col d-grid">
                                <button class="btn btn-secondary mt-4 mb-4" type="button" data-bs-toggle="modal" data-bs-target="#modalubication">Ubicacion <i class="fa-solid fa-location-dot"></i></button >
                            </div> 
                            <div class="form-group">
                                <label for="latitud" class="control-label">Latitud</label>
                                <input type="text" name="latitud" id="latitud" class="form-control mb-4" readonly="readonly">
                            </div> 
                            <div class="form-group">
                                <label for="longitud" class="control-label">Longitud</label>
                                <input type="text" name="longitud" id="longitud" class="form-control mb-4" readonly="readonly">
                            </div> 
                    </div>
                </div>
                
                <div class="row ps-4 pe-4">
                        <div class="form-group col d-grid">
                            <button class="btn btn-primary mb-4 mt-4"  type="submit" >Enviar</button>
                        </div> 
                </div>
            </form>
        </div>
    </main>

    <!--MODAL UBICACION-->
    <div class="modal fade" id="modalubication" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <img class="ms-auto" src="{{ URL::asset('img/logo.png') }}" alt="logo">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 ps-4 pe-4">
                            <div id="map" style="height: 300px;"></div>
                        </div>
                        
                    </div>
                    <div class="row ps-4 pe-4">
                        
                            <button type="button" class="btn btn-primary mb-4 mt-4" data-bs-dismiss="modal" aria-label="Close"> Aceptar</button>
                    
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

      <!--MODAL TEST-->
      <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <img class="ms-auto" src="{{ URL::asset('img/logo.png') }}" alt="logo">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 ps-4 pe-4">
                            <div id="map" style="height: 300px;"></div>
                        </div>
                        
                    </div>
                    <div class="row ps-4 pe-4">
                        
                            <button type="button" class="btn btn-primary mb-4 mt-4" data-bs-dismiss="modal" aria-label="Close"> Aceptar</button>
                    
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!--Configuracion del mapa-->
    <script>

        $('#estado').on('change',function(){
            var estado_id=jQuery(this).val();
            if(estado_id){
                if(estado_id==0){
                    $('select[name="ciudad"]').empty();
                    $('input[name="estado_hidden"]').val('0');
                    $('select[name="ciudad"]').append('<option value"0" selected>Tu ciudad...</option>');
                }else{
                    console.log($("#estado option:selected").text());
                    $('input[name="estado_hidden"]').val($("#estado option:selected").text());
                    jQuery.ajax({
                        url: '/getCiudades/'+estado_id,
                        type: "GET",
                        dataType:"json",
                        success: function (data) {
                            console.log(data);

                            jQuery('select[name="ciudad"]').empty();
                            $('select[name="ciudad"]').append('<option value="0">Tu ciudad...</option>');
                            jQuery.each(data, function (key, value) {
                                $('select[name="ciudad"]').append('<option value=\'' + value + '\'>' +key+ '</option>');
                            });
                        }
                    });
                }
            }else{
                $('select[name="ciudad"]').empty();
            }
            
        });
    


      function initMap() {
        var latitud= 21.333438761583643;
        var longitud= -98.2198246929634;

        coordenadas={
            lng: longitud,
            lat: latitud
        }

        generarmapa(coordenadas);
      }

      function generarmapa(coordenadas){
        mapa = new google.maps.Map(document.getElementById('map'),{
            zoom: 12,
            center: new google.maps.LatLng(coordenadas.lat,coordenadas.lng)
         });

        marcador = new google.maps.Marker({
            map: mapa,
            draggable: true,
            position: new google.maps.LatLng(coordenadas.lat,coordenadas.lng)
        });

        marcador.addListener('dragend',function(event){
            document.getElementById("latitud").value = this.getPosition().lat();
            document.getElementById("longitud").value = this.getPosition().lng();
        })
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtP9L9TgLR5kL0cKOu_7WdQn2ljfhTeO8&callback=initMap"></script>
<!--Termina configuracion de mapa-->
@endsection
