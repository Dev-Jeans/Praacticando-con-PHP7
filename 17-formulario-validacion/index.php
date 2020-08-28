<!DOCTYPE html>
<html lang="es">
  <head>
    <title>FORMULARIO - VALIDACION</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- <link href="css/style.css" rel="stylesheet"> -->
  </head>
  <body>
    <div class="container">
        <h1 class="page-header">Formulario con validación</h1>
        <form id="formulario" method="POST" action="procesa.php">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" />
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="text" name="correo" class="form-control" />
            </div>
            <div class="form-group">
                <label>Mi fecha de nacimiento</label>
                <input type="text" name="fecha" class="form-control" />
            </div>

            <div class="form-group">
                <label>Mi página web</label>
                <input type="text" name="web" class="form-control" />
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="acepto" value="1"> Acepto las condiciones de registro</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
  </body>
</html>