<?php
	$dato = "Camion 1" ;
	$consulta = "SELECT IdCamion,PuntoIniLat, PuntoIniLon,PuntoFinLat, PuntoFinLon FROM f403_datosruta inner join puntosinteres on f403_datosruta.IdRuta= puntosinteres.IdRuta  where IdCamion = 'Camion 1' and activo=1";
	$resultado =mysql_query($consulta);
	$test[] = $resultado["IdCamion"];
	echo json_encode($test);
 ?>