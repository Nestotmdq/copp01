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
<?php $title = "Crear nota pedido";
    include("vistas/superior.php"); ?>
            
        <!--INICIO CONTENIDO PRINCIPAL-->
            <main>
                <div class="container-fluid">
                
                    <!--<h1 class="mt-4">nombre de la pagina actual</h1> -->
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Crear nota pedido</li>
                    </ol>
            </main>

    <?php include_once("vistas/footer.php"); ?>
    <?php include_once("vistas/scripts.php"); ?>
    </body>
</html>