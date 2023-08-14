<?php

class HandleSessions{

    // Propiedad en donde se almacena la instancia unica del patron singleton.
    private static $instance;

    private function __construct(){
        session_start();
    }

    // creando el Patron Singleton
    // es un patrón de diseño creacional en la programación que se utiliza para garantizar que una clase tenga una única instancia y proporcionar un punto global de acceso a esa instancia.
    // Los patrones de diseño creacionales se centran en cómo crear instancias de objetos, gestionar su creación y controlar su ciclo de vida.
    // En otras palabras, se ocupan de la forma en que los objetos son instanciados y organizados dentro de una aplicación.
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