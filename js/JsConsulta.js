var mapConsultas;

$(document).on('ready', function(){

$("#ver").click(function(){
CargarMapaC();
	
});
$("#consulta").click(function(){
	$("#ver").trigger("click");
});

});
function CargarMapaC(){
	var LatitudLongitud  = new google.maps.LatLng(23.6266577, -102.5377501);
	var opciones = {
		zoom:5,
		center:LatitudLongitud,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	mapConsultas = new google.maps.Map($("#mapBusqueda").get(0),opciones);
	 var marker = new google.maps.Marker({
                         position: new google.maps.LatLng(23.6266577, -102.5377501),
                         map: mapConsultas,
                       
                 });
}