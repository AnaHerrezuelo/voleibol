<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia nueva</title>
        <!-- BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="formulario">
    <form action="noticia2.php" method="post" enctype="multipart/form-data" id="formulario">

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

        <p> <button type="submit" class="btn btn-primary"> Subir noticia</button> </p>

    </form>
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


          <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>