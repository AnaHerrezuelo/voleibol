<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
       
            <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">



    <script language="javascript" type="text/javascript">
      function mandar (resultado){
        if (resultado){
          document.formularionuevopartido.action="noticia2.php";
        } else {
           document.formularionuevopartido.action="../../index.php";
        }
          document.formularionuevopartido.submit();
        }
    </script>

<link rel="stylesheet" href="../../css/estilosmenu.css">


    <title>Noticia nueva</title>
</head>
<body style="background-color:lightblue;">
<header>   
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
              <a class="navbar-brand" href="../../index.php"> <img src="../../imgs/header/pelotavoley2.jpg" id="logo"> </a>
          </div>
      </nav> <!-- final del navegador -->
          
  </header>


  <div class="container">
    <h2 class="mt-5">Formulario de Contacto</h2>
    <h2 class="mt-5">Agregar partido</h2>
        <div class="formulario">
            <form action="noticia2.php" method="post" enctype="multipart/form-data" name="formularionuevopartido" id="formulario">

                <div class="mb-3">
                    <label for="formFile" class="form-label">Insertar imagen</label>
                    <input class="form-control" type="file" id="formFile" name="imagen" required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo" required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha" required>
                </div>

                 <button type="submit" class="btn btn-info"> Subir noticia</button> 
            </form>
            <input class="btn btn-info" name="cancelar" type="button" id="cancelar" value="Cancelar" onClick="javascript:mandar(false);">
</div>



    <script>
            document.getElementById('formulario').addEventListener('submit', function(event) {
            var inputs = document.querySelectorAll('#formulario div input[required]');
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].value.trim() === '') {
                    alert('Por favor, rellene todos los campos.');
                    event.preventDefault();
                    return;
                }
            }

            var contrasena = document.getElementById('contrasena').value;
            var contrasena2 = document.getElementById('contrasena2').value;

            if (contrasena !== contrasena2) {
                alert('Las contraseñas no coinciden. Por favor, inténtelo nuevamente.');
                event.preventDefault();
            }
        });
    </script>

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