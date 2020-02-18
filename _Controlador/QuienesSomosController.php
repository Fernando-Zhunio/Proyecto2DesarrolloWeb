<?php
 
 include_once '_Config/config.php';
 require_once '_Modelo/loginModelo.php';
 require_once '_Modelo/Conexion.php';
 class QuienesSomosController
 {

   public function quienesSomos()
   {
    // if(session_status() === PHP_SESSION_NONE) session_start();
        require_once "_Vista/_Plantillas/head.php";
        require_once "_Vista/_Plantillas/navBar.php";
        require_once "_Vista/QuienesSomosVista.php";
   }
 }

