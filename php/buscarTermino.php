<?php 
	include_once("../db.php");
	$term = $_REQUEST['term'] ;
	$consulta = "SELECT DISTINCT IdCamion as valor FROM f403_datosruta where IdCamion like '%".$term."%' and activo =1 order by IdCamion asc";
	$resultado =mysql_fetch_assoc(mysql_query($consulta));
	$test[] = $resultado["valor"];
	echo json_encode($test);
 ?>