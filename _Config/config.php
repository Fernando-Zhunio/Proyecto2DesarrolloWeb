<?php
//rutas generales
define("SERVIDOR", "localhost");
define("NOMBREAPP", "ProyectoFinal");
define("RUTAAPP","http://".SERVIDOR."/".NOMBREAPP);

// RUTA RECURSOS
define("RUTACSS",RUTAAPP.'/assets/css');
define("RUTAJS",RUTAAPP.'/assets/js');

//encabezado, contenido y pie
define('HEADER', 'view/plantillas/header.php');
define('FOOTER', 'view/plantillas/footer.php');
define('PRINCIPAL', 'view/plantillas/principal.php');
define('SERVICIOTECNICO', 'view/ServicioTecnico/serviciotecnicoView.php');
define('INSERTARST', 'view/ServicioTecnico/IngresarEditarView.php');
define('LOGIN', '_Vista/login.php');



// RUTAS PARA BASE DE DATOS
define("SERVIDORBD", "localhost");
define("PUERTO", "3306");
define("NOMBREBD", "proyectofinal");
define("USUARIO", "root");
define("PASSWORD", "fernando1991");
?>


