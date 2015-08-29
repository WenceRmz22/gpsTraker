<?php
/*$id = mysql_real_escape_string($_GET['id']);

if ( isset($_POST['nombre']) ){

	$categoria 	= mysql_real_escape_string($_POST['categoria']);
	$nombre 	= mysql_real_escape_string($_POST['nombre']);
	$direccion  = mysql_real_escape_string($_POST['direccion']);
	$telefono  	= mysql_real_escape_string($_POST['telefono']);
	$contacto  	= mysql_real_escape_string($_POST['contacto']);
	$correo  	= mysql_real_escape_string($_POST['correo']);
	$rfc  		= mysql_real_escape_string($_POST['rfc']);

	if ( mysql_query("UPDATE clientes SET categoria='".$categoria."',nombre='".$nombre."',direccion='".$direccion."',telefono='".$telefono."',contacto='".$contacto."',email='".$correo."',rfc='".$rfc."' WHERE id='".$id."'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Cliente editado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

$data = mysql_fetch_object(mysql_query("SELECT * FROM clientes WHERE id='".$id."' LIMIT 1"));
*/
?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<i class="fa fa-plus icon"></i> Agregar Cliente
			</header>
			<div class="panel-body">
				<div class="row">
					<div  class="col-md-3">
						<input type="text" class="form-control pull-left" id="busqueda">
					</div>
					<div class="col-md-6">
						<button  class="btn btn-primary pull-left">Buscar</button>
					</div>
				</div>
				<br>
				<div class="pull-left jumbotron" id="mapBusqueda" style="width:75%; height:400px;"></div>
				<div class="pull-left" style="width:20%; height:400px;margin-left:10px;">asdas</div>
			</div>
			
			<input hidden type="button" id="ver" name="ver" value="Ver" >
		</section>
