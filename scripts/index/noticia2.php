<?php
include_once "../conexion.php";
$con = getConexion();


$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$fecha = $_POST["fecha"];
$n_archivo = $_FILES["imagen"]["name"];
$archivo = $_FILES["imagen"]["tmp_name"];

$ruta = "../../imgs/noticias"."$n_archivo";
$base_datos = "../../imgs/noticias"."$n_archivo";

move_uploaded_file($archivo,$ruta);

$insert = mysqli_query($con, "INSERT INTO noticias (imagen, titulo, descripcion, fecha) VALUES ('$base_datos', '$titulo', '$descripcion', '$fecha')");



//mensajes de error
if($insert){
    //echo " <script> alert('Los datos se han guardado exitosamente') </script>";
    header("location:../../index.php");
}else{
    echo " <script> alert('Error en el registro') </script>";
    //header("location:index.php");
}

?>