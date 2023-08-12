<?php

class HandleSessions{

    // public static $currentSession;

    public function __construct(){
        session_start();
    }

    public function setExpireTime(){
        $duration = 7 * 24 * 60 * 60; // (7 días)
        $_SESSION["expire_term"] = time() + $duration; // Configura la expiración de la sesión
    }

    public function setNewSession($result){
        $_SESSION["user_data"] = $result;
        // HandleSessions::$currentSession = $_SESSION["user_data"];
        $this->setExpireTime();
    }

    public function getSession(){
        return $_SESSION["user_data"]; // <- de esta manera se accede a una propiedad static
    }

}

$session = new HandleSessions()

?>