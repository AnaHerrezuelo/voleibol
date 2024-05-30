<html>
  <head>
  <script language="javascript" type="text/javascript">
    function volver(){
      document.retorno.submit();
    }
  </script>
  </head>
  <body onLoad="javascript:volver();">
  <?php

include ("../inc/fechas.php");
include_once "../conexion.php";
$con = getConexion();

  $consulta="INSERT INTO partidos ( nombre, equipo1, equipo2, categoria, fecha) 
              VALUES ('".$_POST["nombre"]."','".$_POST["equipo1"]."','".$_POST["equipo2"]."', '".$_POST["categoria"]."', '$fechaEnCurso')";
  $stmt = $con->prepare($consulta);
  $stmt->execute();
  $stmt->close();
  
  ?>
  <form action="../../calendario.php" name="retorno" id="retorno" method="post">
    <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo ($fechaEnCurso); ?>">
  </form>
  </body>
</html>
