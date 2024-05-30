</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript" type="text/javascript">
      function mandar (resultado){
        if (resultado){
          document.formularionuevopartido.action="grabarnuevoproducto.php";
        } else {
           document.formularionuevopartido.action="../../tienda.php";
        }
          document.formularionuevopartido.submit();
        }
    </script>

<link rel="stylesheet" href="../../css/estilosmenu.css">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

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
              <a class="navbar-brand" href="../../index.php"> <img src="../../imgs/header/pelotavoley2.jpg" id="logo"> </a>
          </div>
      </nav> <!-- final del navegador -->
          
  </header>
    <?php

      include ("../inc/fechas.php");
      include_once "../conexion.php";
      $con = getConexion();

    ?>
  <div class="container">
    <h2 class="mt-5">Formulario de Contacto</h2>
    <h2 class="mt-5">Agregar producto</h2>
    <form action="grabarnuevoproducto.php" method="post" name="formularionuevopartido" id="formularionuevopartido" enctype="multipart/form-data">
      <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo($fechaEnCurso); ?>">
      
      <div class="form-group">
            <label for="formFile" class="form-label">Insertar imagen</label>
            <input class="form-control" type="file" id="formFile" name="imagen" required>
      </div>

      <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
      </div>

      <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" required>
      </div>

       <button type="submit" class="btn btn-info"> Subir producto</button> 
      <!-- <input class="btn btn-info" name="añadirproducto" type="button" id="añadirproducto" value="Añadir Producto" onClick="javascript:mandar(true);"> -->
      <input class="btn btn-info" name="cancelar" type="button" id="cancelar" value="Cancelar" onClick="javascript:mandar(false);">
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
