<?php
include_once "../../conexion.php";
$con = getConexion();

    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    //contra inyección sql
    $usuario = $con->real_escape_string($_POST["usuario"]);
    $contrasena = $con->real_escape_string($_POST["contrasena"]);
    
    //echo "hola $usuario con contraseña $contrasena.";
    $consulta1="SELECT * FROM usuarios WHERE usuario='$usuario';"; //añadir el where
        $hacerConsulta1 = $con->query($consulta1);
        if ($hacerConsulta1->num_rows > 0) {
            //echo "El valor ya existe en la base de datos.";
            $verf=$hacerConsulta1->fetch_array();
            if(password_verify($contrasena, $verf["contrasena"])){
                //echo "es correcto";

                session_start();
                $_SESSION["usuario"] = $usuario;
                header("Location: ../../../index.php");
                
            }

            

        } if($hacerConsulta1->num_rows == 0){
            //echo "no puedes acceder";
            echo "<script> alert('algo has escrito mal');  window.location.href = '../login.php'; </script>";
            //header("Location: ../login.php");
            
        }

        //' or '1' = '1
?>