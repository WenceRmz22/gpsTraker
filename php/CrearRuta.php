  <div id="msg" class="alert alert-success">
        <div class="row">
            <div class="col-md-1">
                <i class="fa fa-check"></i> 
            </div>
            <div class="col-md-5">
                <p id="mensaje"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                    
                </div>
                <div class="col-md-5">
                    <button class="btn btn-primary btn-md pull-right">Nuevo</button>
                </div>
            </div>
    </div>
<section id="contenido" class="panel panel-default pos-rlt clearfix">
            <header class="panel-heading">
                <i class="fa fa-list"></i> Registro de Ruta
            </header>
            <div class="content">
                <br>
                <div class="container" id="wizard">
                    <h2>
                        Paso 1
                    </h2>
                    <section>
                       <h3>Inserte lo Siguiente Datos</h3>
                       
                        <div class="panel-body">
                            <div class="col-lg-4">
                                <p>
                                    Identificador del Camion
                                </p><input class="form-control" data-required="true" data-trigger="change" id="IdCamion" placeholder="Identificador" type="text">
                                  <span id="ErrorIdentificador" class="Error"></span>
                                <p class="m-t">
                                    Nombre del Chofer
                                </p><input class="form-control letras" data-required="true" data-trigger="change" id="NombreChofer" placeholder="Nombre" type="text">
                                <span id="ErrorNombre" class="Error"></span>
                            </div>
                        </div>
                    </section>
                    <h2>
                        Paso 2
                    </h2>
                    <section>
                        <h2>Asigne la ruta</h2>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="pull-left jumbotron" id="map_canvas" style="width:100%; height:350px;"></div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <p>
                                            Origen
                                        </p><input class="form-control" data-required="true" data-trigger="change" id="origen" name="origen" placeholder="calle, ciudad, estado..." type="text">

                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <p>
                                            Destino
                                        </p><input class="form-control" data-required="true" data-trigger="change" id="destino" name="destino" placeholder="calle, ciudad, estado..." type="text">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-lg-5"></div>
                                    <div class="col-lg-6">
                                        <button class="btn btn-primary" id="buscar" type="button" value="Buscar ruta">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h2>
                        Paso 3
                    </h2>
                    <section>
                        <h2>Agregue los Puntos de interes</h2>
                        <div class="row">
                            <div class="col-md-7">
                                <div id="googleMap" style="width:100%; height:350px;"></div>
                            </div>
                            <div class="col-md-5">
                                <div id="divInteres"  class="panel-body">
                                    <div   class="row">
                                        <div class="col-md-12">
                                            <table class="table" id="tablaInteres">
                                                <tr>
                                                    <th>
                                                        Descripcion
                                                    </th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h2>
                        Finalizar
                    </h2>
                    <section>
                        <article>
                            <span id="textoFinal"></span>
                        </article>
                    </section>
                </div>
            </div>
          
        </section>