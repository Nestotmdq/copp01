<?php $title = "Crear nota pedido";
    include("vistas/superior.php"); ?>
            
        <!-- INICIO CONTENIDO PRINCIPAL -->
            <main>
                <div class="container-fluid">                
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Crear nota pedido</li>
                    </ol>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>1. Seleccionar comercio</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tablacomercios" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nombre del comercio</th>
                                            <th>Localidad</th>
                                            <th>Provincia</th>
                                            <th>Dirección</th>
                                            <th>CUIT</th>
                                            <th>Código Postal</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Nombre del comercio</th>
                                            <th>Localidad</th>
                                            <th>Provincia</th>
                                            <th>Dirección</th>
                                            <th>CUIT</th>
                                            <th>Código Postal</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

    <?php include_once("vistas/footer.php"); ?>
    <?php include_once("vistas/scripts.php"); ?>
        <script>
            $(document).ready(function() {
                $('#tablacomercios').DataTable( {
                    "lengthChange": false,
                    "bFilter": true,
                    "bInfo": false,
                    "bAutoWidth": false,
                    "ajax":{
                        "url": "../baseDeDatos/consultaComercios.php",
                        "dataSrc":""
                    },           
                    "columns":[
                        {"data": "idc"},
                        {"data": "comercio"},
                        {"data": "localidad"},
                        {"data": "provincia"},
                        {"data": "direccion"},
                        {"data": "codpostal"},
                        {"data": "cuit"}
                    ]  
                });
            });
        </script>
    </body>
</html>

