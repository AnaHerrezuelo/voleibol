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
// Se incluye el miniscript de tratamiento de fechas
include ("../inc/fechas.php");
include_once "../conexion.php";
$con = getConexion();

$fecha = $_POST["fecha"];
// Se monta la consulta para grabar una nueva cita.
$consulta="INSERT INTO partidos ( nombre, equipo1, equipo2, categoria, fecha) 
          VALUES ('".$_POST["nombre"]."','".$_POST["equipo1"]."','".$_POST["equipo2"]."', '".$_POST["categoria"]."', '$fecha')";
// Se ejecuta la consulta.
  $stmt = $con->prepare($consulta);
  $stmt->execute();
  $stmt->close();
  
  ?>
  <form action="../../calendario.php" name="retorno" id="retorno" method="post">
    <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo ($fechaEnCurso); ?>">
  </form>
  </body>
</html>
