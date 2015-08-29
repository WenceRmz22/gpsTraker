<section class="panel panel-default pos-rlt clearfix" style="overflow:scroll;">

	<header class="panel-heading"> <i class="fa fa-list"></i>Mapa Google MAPS</header>
	
	<div class="row wrapper">
		<div class="col-sm-2 m-b-xs">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Trazar Ruta</button>
		</div>
		<div class="col-sm-7 m-b-xs text-center">
			<a href="" class="btn btn-default btn-sm">Cuentas por Cobrar</a>
			<a href="" class="btn btn-default btn-sm">Reporte de Ingresos</a>
		</div>
		<div class="col-sm-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar"> <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<!--<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th>Categoria</th>
					<th>Nombre/Empresa</th>
					<th>Contacto</th>
					<th width="200">Telefono</th>
					<th width="120"></th>
				</tr>
			</thead>
			<!--<tbody>

				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>columna 3</td>
					<td>columna 4 </td>
					<td>
						<a href="admin.php?m=clientesEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
				<!--<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>columna 3</td>
					<td>columna 4 </td>
					<td>
						<a href="admin.php?m=clientesEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
				
			</tbody>
		</table>
		-->
		<div id="map_canvas" style="width: 640px; height: 400px;" class="pull-left jumbotron"></div>
		<div id="panel_ruta" style="float:right; overflow: auto; width:30%; height: 500px" class="pull-left"></div>
	</div>					
	<!--
	<div  class="pull-right" id="map" align="center" style="width: 800px; height:450px"></div>-->
	<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Modal titlez</h4>
		      </div>
			      	<div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-6">
			        			<label for="origen">Origen</label>
						    	<input type="text" name="origen" id="origen" placeholder="calle, ciudad, estado..." />
						    </div>
	  						<div class="col-md-6">
	  							<label for="destino">Destino</label>
						    	<input type="text" name="destino" id="destino" placeholder="calle, ciudad, estado..." />
						    </div>
					 	</div>
						<div id="rutaOps">
				        	<h3>Opciones</h3>
		  					<select id="modo_viaje" class="opciones_ruta">
							    <option value="DRIVING" selected="selected">Auto</option>
							    <option value="BICYCLING">Bicicleta</option>
							    <option value="WALKING">Caminando</option>
							</select>
							<select id="tipo_sistema" class="opciones_ruta">
							    <option value="METRIC" selected="selected">Métrico</option>
							    <option value="IMPERIAL">Imperial</option>	
							</select>
						 </div>	
					</div>    
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-dismiss="modal" id="buscar" value="Buscar ruta" >Buscar</button>
		        <!--<button type="button" class="btn btn-primary" name="form_ruta" id="form_ruta" onClick="obtenerRuta(this.desde.value, this.hasta.value); return false">Save changes</button>-->
		      </div>
		    </div>
		  </div>
		</div>


</section>