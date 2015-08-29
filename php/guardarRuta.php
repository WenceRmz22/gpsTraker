<?php 

	include_once("../db.php");
	if (isset($_POST["Descripcion"])) {
		$data = json_decode($_POST["data"],true);
		$Descripcion = $_POST["Descripcion"];
		$longitud = $_POST["longitud"];
		$latitud = $_POST["latitud"];
		$NombreChofer = mysql_real_escape_string($data[0]["NombreChofer"]);
		$IdCamion  = mysql_real_escape_string($data[0]["IdCamion"]);
		$PuntoIniLat = mysql_real_escape_string($data[0]["PuntoIniLat"]);
		$PuntoIniLon = mysql_real_escape_string($data[0]["PuntoIniLon"]);
		$PuntoFinLat = mysql_real_escape_string($data[0]["PuntoFinLat"]);
		$PuntoFinLon  = mysql_real_escape_string($data[0]["PuntoFinLon"]);


		if ( mysql_query("Insert into f403_datosruta SET IdCamion='".$IdCamion."',PuntoIniLat=".$PuntoIniLat.",PuntoIniLon=".$PuntoIniLon.",PuntoFinLat=".$PuntoFinLat
			.",PuntoFinLon=".$PuntoFinLon.",activo=1") ){
			$id =mysql_insert_id()	;

			
			for ($i=0; $i < count($longitud); $i++) { 
				if(mysql_query("INSERT into  puntosinteres Set IdRuta=".$id.",Descripcion='".$Descripcion[$i]."',
					Latitud=".$latitud[$i].",Longitud=".$longitud[$i])){
					echo "Exito, Ruta Almacenada";
				}
			}
			
		} else {
			$errorMsg = '<div class="alert alert-danger">
				<i class="fa fa-times"></i> 
			</div>';
			echo "Error, intenta nuevamente.";
		}


	}else{
			$data = json_decode($_POST["data"],true);
			$NombreChofer = mysql_real_escape_string($data[0]["NombreChofer"]);
			$IdCamion  = mysql_real_escape_string($data[0]["IdCamion"]);
			$PuntoIniLat = mysql_real_escape_string($data[0]["PuntoIniLat"]);
			$PuntoIniLon = mysql_real_escape_string($data[0]["PuntoIniLon"]);
			$PuntoFinLat = mysql_real_escape_string($data[0]["PuntoFinLat"]);
			$PuntoFinLon  = mysql_real_escape_string($data[0]["PuntoFinLon"]);


			if ( mysql_query("Insert into f403_datosruta SET IdCamion='".$IdCamion."',PuntoIniLat=".$PuntoIniLat.",PuntoIniLon=".$PuntoIniLon.",PuntoFinLat=".$PuntoFinLat
				.",PuntoFinLon=".$PuntoFinLon.",NombreChofer='".$NombreChofer."', activo=1") ){
				echo "Exito, Ruta Almacenada";	
			} else {
				$errorMsg = '<div class="alert alert-danger">
					<i class="fa fa-times"></i> 
				</div>';
				echo "Error, intenta nuevamente.";
			}
	}
	
	


 ?>