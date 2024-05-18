<?php
include_once "../conexion.php";
$con = getConexion();
$id = $_REQUEST["id_noticia"];
echo "$id";
$var_consulta= "DELETE FROM noticias WHERE id_noticia=".$_REQUEST["id_noticia"]; 
          $stmt = $con->prepare($var_consulta);
          $stmt->execute();
          $stmt->close();


//mensajes de error
if($var_consulta){
    //echo " <script> alert('Los datos se han guardado exitosamente') </script>";
    header("location:../../index.php");
}else{
    echo " <script> alert('Error en el registro') </script>";
    //header("location:index.php");
}
?>