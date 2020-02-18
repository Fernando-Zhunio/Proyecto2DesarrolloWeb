<?php
include_once '_Config/config.php';
require_once '_Modelo/loginModelo.php';
require_once '_Modelo/Conexion.php';
// require_once '_Modelo/serviciotecnicoDAO.php';
require_once '_Modelo/UserSession.php';
class IndexController { 
    private $db;
    private $usuarioSession;
    
    public function __construct() {
        $this->db = new LoginDAO();
        $this->usuarioSession = new UsuarioSession();
    }   
    public function login(){
        require_once LOGIN;
    }

    public function home(){
        $data['correo']=$_REQUEST['correo'];
        $data['password']=$_REQUEST['pass'];
        if($this->db->login($data)){
            $this->usuarioSession->iniciarSession();
            $this->usuarioSession->agregarElemento('usuario',$data['correo']);
            // header('Location:index.php?c=Inicio&a=home');
            echo json_encode(array("status"=> "OK"));
        }
        else{
            // echo $this->db->login($data);
            // header('Location:index.php?c=Inicio&a=home');
            echo json_encode(array("status"=> "FAIL"));
            // require_once LOGIN;  
        }
    }
    public function closeSession()
    {
        $this->usuarioSession->cerrarSession();
       header("location: index.php");
    }

}
?>