
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registrase</title>
    <style>
        body{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body >
    <br>
<form action="inforegistro.php" method="POST">
    <div class="container">
       
        <div class="row m-2 borde border-dark p-5 bg-info">
        <div >
        <div class="col">
                <label for="">Nombre</label>
                <input required id="nom" class ="form-control " type="text" name ="nombre">
            </div>
            <div class="col">
                 <label for="">Apellido</label>
                 <input required id="nom" class ="form-control " type="text" name ="apellido">
            </div>
            <div class="col">
                <label for="">Direccion</label>
                <input required id="nom" class ="form-control " type="text" name ="direccion">
            </div>
            <div class="col">
                 <label for="">Telefono</label>
                 <input required id="nom" class ="form-control " type="text" name ="telefono">
            </div>
            <div class="col">
                 <label for="">DUI</label>
                 <input required id="nom" class ="form-control " type="text" name ="dui">
            </div>
            </div>
        </div>
        <button class ="btn btn-success" type ="submit">Guardar</button>
        <button type="reset" class="btb btn-secundary">Cancelar</button>
        </div>
       <div>
    </div>
    </form>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>