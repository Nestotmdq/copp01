<!---- Verificamos que el usuario esta logeado al sistema  ---->
<?php
session_name("loginUsuario"); 
session_start();

include_once("metodosDePHP.php");
Seguridad::integridadSistema();
Seguridad::testSeguridad();


# Esta prueba funciona ....
//if($_SESSION["autentificado"] != "Si"){
	//header ("Location: https://drama.fandom.com/es/wiki/Death_note:_L_Change_the_world");
//}

?>
<!--------------------------------------------------------------->

        <?php include("vistas/superior.php"); ?>
            
        <!--INICIO CONTENIDO PRINCIPAL-->
            <main>
                <div class="container-fluid">
                
                    <!--<h1 class="mt-4">Principal</h1> -->
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Principal</li>
                    </ol>
                    <div class="row pb-4">
                        <div class="col-xl-3 col-md-6 col-6 ">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Crear nota pedido</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="crear-nota-pedido.php"></a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-6">
                            <div class="card bg-secondary text-white mb-4">
                                <div class="card-body">Administrar Usuarios</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="administrar-usuarios.php"></a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Registrar Usuarios</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="Registro.php"></a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Últimas solicitudes de pedidos</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Viajante</th>
                                            <th>Estado</th>
                                            <th>Detalles</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Viajante</th>
                                            <th>Estado</th>
                                            <th>Detalles</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>14/10/2020</td/>
                                            <td>Juan Perez</td>
                                            <th><button class='btn btn-light btn-sm btndetalles'>pendiente</button></th>
                                            <td><div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btndetalles'><i class='material-icons'>zoom_in</i></button></div></div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        <?php include_once("vistas/inferior.php"); ?>
