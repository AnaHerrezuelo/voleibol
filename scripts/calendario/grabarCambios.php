<?php
include ("../inc/fechas.php");
include_once "../conexion.php";
$con = getConexion();
// Se monta y ejecuta la consulta de actualizaci�n.
  $consulta="UPDATE partidos SET nombre='".$_POST["nombre"]."', equipo1='".$_POST["equipo1"]."', equipo2='".$_POST["equipo2"]."', fecha='".$_POST["fecha"]."'  
            WHERE id_partido=".$_POST["partidoseleccionado"].";";

  $hacerConsulta = $con->query($consulta);
?>
<html>
  <head>
    <script language="javascript" type="text/javascript">

      function volver(){
        document.retorno.submit();
      }
    </script>
  </head>
  <body onLoad="javascript:volver();">
<!-- El siguiente formulario es para volver a index xon la fecha en curso. -->
    <form action="../../calendario.php" method="post" name="retorno" id="retorno">
	  <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo ($_POST['fechaEnCurso']);?>">
	</form>
  </body>
</html>
