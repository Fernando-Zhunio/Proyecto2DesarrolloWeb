<?php
 include_once '../_Config/config.php';
// require_once '_Modelo/loginModelo.php';
// require_once "../_Config/config.php";

require_once 'Conexion.php';
class Verificar{
    private $conexion;
    private $usuarios;
    public function __construct() { 
        $this->conexion = Conexion::getconexion();   
        $this->usuarios = array(); 
    }

    public function verificarCorreo($correo){
        $query= "SELECT Count(*) FROM usuarios where  correo = '$correo' ";
        $consult = $this->conexion->query($query);
        $arr = array("cantidad" => $consult->fetchColumn());
        echo json_encode($arr);
    }
    public function verificarUser($user){
        $query= "SELECT Count(*) FROM usuarios where usuario = '$user'";
        $consult = $this->conexion->query($query);
        $arr = array("cantidad" => $consult->fetchColumn());
        echo json_encode($arr);
    }
}
if(isset($_GET["usuario"]))
{
    $verify = new Verificar();
    $verify->verificarUser($_GET["usuario"]);
}
if(isset($_GET["correo"]))
{
    $verify = new Verificar();
    $verify->verificarCorreo($_GET["correo"]);
}