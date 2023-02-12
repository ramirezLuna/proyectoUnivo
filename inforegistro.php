<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>metodo get</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <?php
    $nombre = $_POST['nombre'];
    $apellido  =$_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono =$_POST['telefono'];
    $dui =$_POST['dui'];
    ?>
    <table class = "table table-light">
        <tbody>
            <tr>
                <td colspan = "2">Datos registrados</td>
            </tr>
            <tr> 
                <td>Nombre</td>
                <td><?php echo $nombre ?></td>
            </tr>
            <tr> 
                <td>Apellido</td>
                <td><?php echo $apellido ?></td>
            </tr>
            <tr> 
                <td>Direccion</td>
                <td><?php echo $direccion ?></td>
            </tr>
            <tr> 
                <td>Telefono</td>
                <td><?php echo $telefono ?></td>
            </tr>
            <tr> 
                <td>DUI</td>
                <td><?php echo $dui ?></td>
            </tr>
        </tbody>
    </table>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>