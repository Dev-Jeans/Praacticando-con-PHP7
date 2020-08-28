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
                <span data-key="nombre" class="badge badge-danger"></span>
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="text" name="correo" class="form-control" />
                <span data-key="correo" class="badge badge-danger"></span>
            </div>
            <div class="form-group">
                <label>Mi fecha de nacimiento</label>
                <input type="text" name="fecha" class="form-control" />
                <span data-key="fecha" class="badge badge-danger"></span>
            </div>
 
            <div class="form-group">
                <label>Mi página web</label>
                <input type="text" name="web" class="form-control" />
                <span data-key="web" class="badge badge-danger"></span>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="acepto" value="1"> Acepto las condiciones de registro</label>
                </div>
                <span data-key="acepto" class="badge badge-danger"></span>

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
        var form = $("#formulario");
        form.submit(function(){
            form.find('.badge-danger').text('');

            $.ajax({
                url: "procesa.php",
                method: "POST",
                data: form.serialize(),
                success: function(r){
                    if(!r.response) {
                        for(var k in r.errors){
                            $("span[data-key='" + k + "']").text(r.errors[k]);
                        }
                    }
                },  
                dataType: "json"
            });
            
            return false;
        })
    })
    </script>
  </body>
</html>