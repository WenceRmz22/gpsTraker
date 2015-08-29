  var Datos = {};
  var responseF;
  var map2;
  var Descripcion = [];
  var latitud = [];
  var longitud = [];
  var latTemp;
  var lonTemp;
  var directionsDisplay = new google.maps.DirectionsRenderer();
  var directionsService = new google.maps.DirectionsService();
   var directionsDisplay2 = new google.maps.DirectionsRenderer();
  var directionsService2 = new google.maps.DirectionsService();

  $(document).on('ready', function() {

       $("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "slideLeft"
    });
       $("#busqueda").autocomplete({
        source: "../sistema_base/php/buscarTermino.php",
        minLength: 3,
        select: function(event, ui) {
            //$('#basic-modal-content').modal();
            var dato = ui.item.value;
            $.ajax({

            }).done(function(data){

            });
            //BuscarAuditoria(ui.item.value);
        }
    });
  $(".letras").keypress(function (key) {
            window.console.log(key.charCode)
            if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
                && (key.charCode < 65 || key.charCode > 90) //letras minusculas
                && (key.charCode != 45) //retroceso
                && (key.charCode != 241) //ñ
                 && (key.charCode != 209) //Ñ
                 && (key.charCode != 32) //espacio
                 && (key.charCode != 225) //á
                 && (key.charCode != 233) //é
                 && (key.charCode != 237) //í
                 && (key.charCode != 243) //ó
                 && (key.charCode != 250) //ú
                 && (key.charCode != 193) //Á
                 && (key.charCode != 201) //É
                 && (key.charCode != 205) //Í
                 && (key.charCode != 211) //Ó
                 && (key.charCode != 218) //Ú
 
                )
                return false;
        });

      
      $("#buscar").click(function() {
          load();
      });
      

      function load() {
          bandera = true;
          var request = {
              origin: $('#origen').val(),
              destination: $('#destino').val(),
              travelMode: google.maps.DirectionsTravelMode['DRIVING'],
              unitSystem: google.maps.DirectionsUnitSystem['METRIC'],
              provideRouteAlternatives: true
          };

          directionsService.route(request, function(response, status) {
           
            Datos["PuntoFinLat"]=response.routes[0].legs[0].end_location.lat();
            Datos["PuntoFinLon"] = response.routes[0].legs[0].end_location.lng();
            Datos["PuntoIniLat"] = response.routes[0].legs[0].start_location.lat();
            Datos["PuntoIniLon"]= response.routes[0].legs[0].start_location.lng();
    
            responseF = response;
              if (status == google.maps.DirectionsStatus.OK) {
                  directionsDisplay.setMap(map);
                  directionsDisplay.setPanel($("#panel_ruta").get(0));
                  directionsDisplay.setDirections(response);
              } else {
                  alert("No existen rutas entre ambos puntos");
              }
          });

           var myLatlng = new google.maps.LatLng(23.6266577, -102.5377501);
          var request = {
              origin: $('#origen').val(),
              destination: $('#destino').val(),
              travelMode: google.maps.DirectionsTravelMode['DRIVING'],
              unitSystem: google.maps.DirectionsUnitSystem['METRIC'],
              provideRouteAlternatives: true
          };
          directionsService2.route(request, function(response, status) {

             
              if (status == google.maps.DirectionsStatus.OK) {
                  directionsDisplay2.setMap(map2);
                  directionsDisplay2.setPanel($("#panel_ruta").get(0));
                  directionsDisplay2.setDirections(response);
                  var marker = new google.maps.Marker({
                      position: myLatlng,
                  });
                  marker.setMap(map2);
                  google.maps.event.addListener(map2, 'click', function(event) {
                      placeMarker(event.latLng);
                  });
              } else {
                  alert("No existen rutas entre ambos puntos");
              }
          });

          
      }


      
  });

function placeMarker(location) {
        var  marker = new google.maps.Marker({
              position: location,
              map: map2,
          });
          var infowindow = new google.maps.InfoWindow({
              content: ''
          });
          var contenido = "<table><tr><td><p>Descripcion</p></td></tr><tr><td><input type='text' id='Descripcion' class='form-control pull-left'></td></tr><tr><td><input type='button' class='btn btn-primary btn-xs pull-left' id='Agregar' value='Guardar' onclick='agregar()'></td></tr></table>";
          google.maps.event.addListener(marker, 'click', function() {
              infowindow.setContent(contenido);
              infowindow.open(map2, marker);
              latTemp = location.lat();
              lonTemp = location.lng();
          });
         /* Desc.push($("#Descripcion").val());
          latitudDesc.push(location.lat());
          longitudDesc.push(location.lng());
          */

         
      }
      function Actualizar() {
         var Latlng = new google.maps.LatLng(23.6266577, -102.5377501);
         var myOptions = {
                 zoom: 4,
                 center: Latlng,
                 mapTypeId: google.maps.MapTypeId.ROADMAP
         };
         map2 = new google.maps.Map($("#googleMap").get(0), myOptions);
         for (var i = 0; i < latitud.length; i++) {
                 var marker = new google.maps.Marker({
                         position: new google.maps.LatLng(latitud[i], longitud[i]),
                         map: map2,
                         title: Descripcion[i]
                 });
         }
         var request = {
                 origin: $('#origen').val(),
                 destination: $('#destino').val(),
                 travelMode: google.maps.DirectionsTravelMode['DRIVING'],
                 unitSystem: google.maps.DirectionsUnitSystem['METRIC'],
                 provideRouteAlternatives: true
         };
         directionsService2.route(request, function(response, status) {
                 if (status == google.maps.DirectionsStatus.OK) {
                         directionsDisplay2.setMap(map2);
                         directionsDisplay2.setPanel($("#panel_ruta").get(0));
                         directionsDisplay2.setDirections(response);
                         google.maps.event.addListener(map2, 'click', function(event) {
                                 placeMarker(event.latLng);
                         });
                 } else {
                         alert("No existen rutas entre ambos puntos");
                 }
         });
 }
      function agregar(){
          $("#tablaInteres").append("<tr><td>"+$("#Descripcion").val()+"</td></tr>")
          Descripcion.push($("#Descripcion").val());
          latitud.push(latTemp);
          longitud.push(lonTemp);
         
          Actualizar();
      }

      $("#consulta").click(function(){
             //Creamos el punto a partir de las coordenadas:
       var punto = new google.maps.LatLng(23.6266577, -102.5377501);
 
       //Configuramos las opciones indicando Zoom, punto(el que hemos creado) y tipo de mapa
       var myOptions = {
           zoom: 6, 
           center: punto, 
           mapTypeId: google.maps.MapTypeId.ROADMAP
       };
 
       //Creamos el mapa e indicamos en qué caja queremos que se muestre
       var map3 = new google.maps.Map($("#mapBusqueda"),  myOptions);
 
       //Opcionalmente podemos mostrar el marcador en el punto que hemos creado.
       var marker = new google.maps.Marker({
           position:punto,
           map: map3,
           title:"Título del mapa"});
       });