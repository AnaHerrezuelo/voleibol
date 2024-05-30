<?php
session_start();

if (isset($_SESSION['usuario']) == true) {
    function usuariologeado() {
        //return isset($_SESSION['usuario']);
        return $_SESSION['usuario'];   
    }
    exit;
}else{
    
}
?>