<?php

class HandleSessions{

    private static $instance;

    private function __construct(){
        session_start();
    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setExpireTime(){
        $duration = 7 * 24 * 60 * 60; // (7 días)
        $_SESSION["expire_term"] = time() + $duration; // Configura la expiración de la sesión
    }

    public function setNewSession($result){
        $_SESSION["user_data"] = $result;
        $this->setExpireTime();
    }

    public function getSession(){
        return $_SESSION["user_data"]; // <- de esta manera se accede a una propiedad static
    }

    public function verifyIfSession(){
        if(isset($_SESSION["user_data"])){
            header("location: ../views/userpanel.view.php"); //redirige a userpanel
        } else {
            return false;
        }
    }

    public function verifyNoSession(){
        if(!isset($_SESSION["user_data"])){
            header("location: ../index.php");
        }
    }

    public function logout(){
        session_unset(); // Eliminar los datos de la sesión
        session_destroy(); // Cerrar la sesión
        header("location: ../index.php");
    }

}

$handleSessions = HandleSessions::getInstance(); // Obtiene la instancia única


?>