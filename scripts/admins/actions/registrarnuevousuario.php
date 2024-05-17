<?php
include_once "../../conexion.php";
$con = getConexion();

$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$contrasena2 = $_POST["contrasena2"];

$nombre = $con->real_escape_string($_POST["nombre"]);
$apellido1 = $con->real_escape_string($_POST["apellido1"]);
$apellido2 = $con->real_escape_string($_POST["apellido2"]);
$email = $con->real_escape_string($_POST["email"]);
$usuario = $con->real_escape_string($_POST["usuario"]);
$contrasena = $con->real_escape_string($_POST["contrasena"]);
$contrasena2 = $con->real_escape_string($_POST["contrasena2"]);

$hash = password_hash($contrasena, PASSWORD_BCRYPT);

//echo "hola $nombre $apellido1 $apellido2 con un email de $email, un usuario $usuario y contraseña $contrasena  Con hash: $hash<br>";

$consulta1="SELECT * FROM usuarios WHERE usuario='$usuario';"; //añadir el where
        $hacerConsulta1 = $con->query($consulta1);
        if ($hacerConsulta1->num_rows > 0) {
            echo "El valor ya existe en la base de datos.";
            header("Location: ../registrarse.php");

        } if($hacerConsulta1->num_rows == 0){
            //echo "se ha ingresado el nuevo usuario <br>";
            echo "<script> alert('Se ha registrado el nuevo usuario');  window.location.href = '../login.php'; </script>";
            $consulta2="INSERT INTO usuarios (nombre, usuario, apellido1, apellido2, correo, contrasena) VALUES('$nombre', '$usuario', '$apellido1', '$apellido2', '$email', '$hash');";
            $stmt = $con->prepare($consulta2);
            $stmt->execute();
            $stmt->close();
        }else {
            echo "else";
        }


        
        
?>