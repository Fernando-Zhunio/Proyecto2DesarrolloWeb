<?php
include_once '_Config/config.php';
require_once '_Modelo/loginModelo.php';
require_once '_Modelo/Conexion.php';
// require_once '_Modelo/serviciotecnicoDAO.php';
require_once '_Modelo/UserSession.php';
class LoginController { 
    private $login;
    private $usuarioSession;
    
    public function __construct() {
        $this->login = new LoginDAO();
        $this->usuarioSession = new UsuarioSession();
    }   
    public function home(){
        require_once LOGIN;
    }

    public function login(){
        $data['usuario']=$_REQUEST['usuario'];
        $data['password']=$_REQUEST['pass'];
        $this->login->login($data);
        if($this->login->login($data)){
            $this->usuarioSession->iniciarSession();
            $this->usuarioSession->agregarElemento('usuario',$data['usuario']);
            header('Location:index.php?c=ServicioTecnico&a=buscar');
        }
        else{
            require_once LOGIN;
        }
    }
}
?>