<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/estilosmenu.css">
    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
        include ("../inc/fechas.php");
    ?>
    <script language="javascript" type="text/javascript">
        function enviar(cambio){
          if (cambio){
            document.getElementById("fechaEnCurso").value=document.getElementById("annio").value+"-"+document.getElementById("mes").value+"-"+document.getElementById("dia").value;
          }
        document.formularioDeCambioDeFecha.submit();
          }
          function ajustarCampos(){
            document.getElementById("dia").value="<?php echo ($diaActual); ?>";
            document.getElementById("mes").value="<?php echo ($mesActual); ?>";
            document.getElementById("annio").value="<?php echo ($annioActual); ?>";
          }
    </script>


<title>Página secundaria</title>
</head>

<body  onLoad="javascript:ajustarCampos();" style="background-color:lightblue;">

  <header>   
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
              <a class="navbar-brand" href="index.php"> <img src="imgs/header/pelotavoley2.jpg" id="logo"> </a>
          </div>
      </nav> <!-- final del navegador -->
          
  </header>

  <div class="container">
  <h2 class="mt-5">Formulario de Contacto</h2>
  <form action="../../calendario.php" method="post" name="formularioDeCambioDeFecha" id="formularioDeCambioDeFechas">
      <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo($fechaEnCurso); ?>">


      <div class="form-group">
        <label for="dia">Día:</label>
          <select name="dia" id="dia" class="form-control">
          <?php
            for ($i=1;$i<=31;$i++){
              echo ("<OPTION VALUE='");
              printf ("%02s",$i);
              echo ("'>");
              printf("%02s",$i);
              echo ("</OPTION>".salto);
            }
          ?>
        </select>
      </div>
      
      <div class="form-group">
        <label for="categoria">Mes:</label>
          <select name="mes" id="mes" class="form-control">
          <option value="01">Enero</option>
          <option value="02">Febrero</option>
          <option value="03">Marzo</option>
          <option value="04">Abril</option>
          <option value="05">Mayo</option>
          <option value="06">Junio</option>
          <option value="07">Julio</option>
          <option value="08">Agosto</option>
          <option value="09">Septiembre</option>
          <option value="10">Octubre</option>
          <option value="11">Noviembre</option>
          <option value="12">Diciembre</option>
      </select>
        </select>
      </div>

      <div class="form-group">
        <label for="annio">Año:</label>
          <select name="annio" id="annio" class="form-control">
          <?php
            for ($i=2024;$i<=2040;$i++) echo ("<OPTION VALUE='".$i."'>".$i."</OPTION>".salto);
          ?>
          </select>
      </div>

      <input class="btn btn-info" name="aceptarCambio" type="button" id="aceptarCambio" value="Aceptar Cambio" onClick="javascript:enviar(true);">
      <input class="btn btn-info" name="descartarCambio" type="button" id="descartarCambio" value="Descartar Cambio" onClick="javascript:enviar(false);">
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
