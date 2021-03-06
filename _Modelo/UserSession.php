<?php
    class UsuarioSession{

        public function __construct(){
        }
        //iniciar session
        public function iniciarSession(){
            // echo "start sessiob";
            session_start();
        }
        //Agregar un elemento a la sesion
        public function agregarElemento($campo, $valor){
            // echo "valido session";
            $_SESSION[$campo] = $valor;
        }
        //Retornar un elemento de la session
        public function get($campo){
            return !empty($_SESSION[$campo]) ? $_SESSION[$campo] : null;
        }
        //retorna todos los valores del array de session
        public function getAll(){
            return $_SESSION;
        }

        public function estadoSession(){
            return session_status();
        }
        public function cerrarSession(){
            // session_unset();
            $_SESSION;
            session_destroy();
        }
    }
?>