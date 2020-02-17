<?php
    class LoginDAO{
        private $conexion;
        private $usuarios;
        public function __construct() { 
            $this->conexion = Conexion::getconexion();   
            $this->usuarios = array(); 
        }
    
        public function login($data){
            $sql= "SELECT * FROM usuarios where correo = '".$data['correo']."' and contraseña = '".$data['password']."' ";
            $sentencia= $this->conexion->query($sql);
            while($fila=$sentencia->fetch(PDO::FETCH_ASSOC))
            {
                $this->usuarios[]=$fila;
            }
            if (empty($this->usuarios)){
                return false;
            }
            return true;
        }
    }
    ?>
