</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript" type="text/javascript">
      function mandar (resultado){
        if (resultado){
          document.formularionuevopartido.action="grabarnuevopartidofuturo.php";
        } else {
           document.formularionuevopartido.action="../../calendario.php";
        }
          document.formularionuevopartido.submit();
        }
    </script>
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/estilosmenu.css">
    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
      input:hover {
          border:solid purple 5px;
      }
    </style>




<title>Página secundaria</title>
</head>
<body style="background-color:lightblue;">

  <header>   
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
              <a class="navbar-brand" href="index.php"> <img src="imgs/header/pelotavoley2.jpg" id="logo"> </a>
          </div>
      </nav> <!-- final del navegador -->
          
  </header>
    <?php
      // Se incluye el miniscript de tratamiento de fechas
      include ("../inc/fechas.php");
      include_once "../conexion.php";
      $con = getConexion();
      // Se muestra la fecha en curso.
            //echo ("CITA PARA EL D�A: ".$diaActual." del ".$mesActual." de ".$annioActual.salto);
    ?>


  <div class="container">
    <h2 class="mt-5">Formulario de Contacto</h2>
    <form action="" method="post" name="formularionuevopartido" id="formularionuevopartido">
      <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo($fechaEnCurso); ?>">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre del partido">
      </div>

      <div class="form-group">
        <label for="equipo1">Equipo 1:</label>
        <select name="equipo1" id="equipo1" class="form-control">
        <?php
          $sqlnombre1="SELECT * FROM equipos";
          $hacersqlnombre1 = $con->query($sqlnombre1);
          while ($nombre1=$hacersqlnombre1->fetch_array()) {
              echo ("<option value=".$nombre1["id_equipo"].">".$nombre1["nombre"]."</option>");
          }
        ?>
        </select>
      </div>
      <div class="form-group">
        <label for="equipo2">Equipo 2:</label>
        <select name="equipo2" id="equipo2" class="form-control">
        <?php
          $sqlnombre2="SELECT * FROM equipos";
          $hacersqlnombre2 = $con->query($sqlnombre2);
          while ($nombre2=$hacersqlnombre2->fetch_array()) {
              echo ("<option value=".$nombre2["id_equipo"].">".$nombre2["nombre"]."</option>");
          }
        ?>
        </select>
      </div>
      <div class="form-group">
        <label for="categoria">Categoría:</label>
        <select name="categoria" id="categoria" class="form-control">
        <?php
          $sqlcategoria="SELECT * FROM categorias";
          $hacersqlcategoria = $con->query($sqlcategoria);
          while ($categoria=$hacersqlcategoria->fetch_array()) {
              echo ("<option value=".$categoria["id_categoria"].">".$categoria["nombre"]."</option>");
          }
        ?>
        </select>
      </div>

      <div class="form-group">
        <label for="nombre">Fecha:</label>
        <input type="date" name="fecha" class="form-control" id="fecha" >
      </div>

      <input class="btn btn-info" name="grabarpartido" type="button" id="grabarpartido" value="Añadir partido" onClick="javascript:mandar(true);">
      <input class="btn btn-info" name="cancelar" type="button" id="cancelar" value="Cancelar" onClick="javascript:mandar(false);">
      </table>
    </form>
  </div>



  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
