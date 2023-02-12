
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>

    <style>
        body{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body >
<form action="principal.php" method="POST">
    <br><br>
    <div>
            <div class="form-floating">
                <input  Required class="form-control" type="text" name="correo">
                <label for="floatingInput">Correo</label>
            </div>
            <br>
            <div class="form-floating">
                <input  Required class="form-control" type="password" name="contraseña">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <br> 
            <Div>
                <button class="" type ="submit" >Iniciar Secion</button>
            </Div>
    </div>
</form>
<br>
<div>
            <form action="registrarse.php">
            <button class="btb btn-secundary" type ="submit" >Registrase</button>
           </form>
        </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
