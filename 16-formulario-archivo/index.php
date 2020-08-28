<!DOCTYPE html>
<html lang="en">
  <head>
  <title>FORMULARIO - ARCHIVOS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- <link href="css/style.css" rel="stylesheet"> -->
  </head>
  <body>
    <div class="container">
        <h1 class="page-header">Formulario con archivos</h1>
        <form id="formulario" method="POST" action="procesa.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" />
            </div>
            <?php for($i = 1; $i <= 5; $i++): ?>
            <div class="form-group">
                <label>Archivo <?php echo $i; ?></label>
                <input type="file" name="archivo[]" class="form-control" />
            </div>
            <?php endfor; ?>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
  </body>
</html>