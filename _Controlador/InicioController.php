<?php
 
 include_once '_Config/config.php';
 require_once '_Modelo/loginModelo.php';
 require_once '_Modelo/Conexion.php';
 class InicioController
 {

   public function home()
   {
    session_start();
        require_once "_Vista/_Plantillas/head.php";
        require_once "_Vista/_Plantillas/navBar.php";
        require_once "_Vista/HomeVista.php";
   }
 }
//  $inicio = new InicioControlller();
//  $inicio->home();
?>