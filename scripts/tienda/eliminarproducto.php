<?php
include_once "../conexion.php";
$con = getConexion();
$id = $_REQUEST["id_tienda"];
echo "$id";
$var_consulta= "DELETE FROM tienda WHERE id_tienda=".$_REQUEST["id_tienda"]; 
          $stmt = $con->prepare($var_consulta);
          $stmt->execute();
          $stmt->close();


//mensajes de error
if($var_consulta){
    //echo " <script> alert('Los datos se han guardado exitosamente') </script>";
    header("location:../../tienda.php");
}else{
    echo " <script> alert('Error en el registro') </script>";
    //header("location:index.php");
}
?>