<?php
include_once "../conexion.php";
$con = getConexion();


$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$n_archivo = $_FILES["imagen"]["name"];
$archivo = $_FILES["imagen"]["tmp_name"];

$ruta = "../../imgs/tienda/productos"."$n_archivo";
$base_datos = "../../imgs/tienda/productos"."$n_archivo";

//echo ("$nombre, $precio, $base_datos <br>");

move_uploaded_file($archivo,$ruta);

$insert = mysqli_query($con, "INSERT INTO tienda (imagen, nombre, precio) VALUES ('$base_datos', '$nombre', '$precio')");



//mensajes de error
if($insert){
    //echo " <script> alert('Los datos se han guardado exitosamente') </script>";
    header("location:../../tienda.php");
}else{
    //echo " <script> alert('Error en el registro') </script>";
    header("location:../../tienda.php");
}


?>