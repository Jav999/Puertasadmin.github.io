
<?php 
include("conexionusuarios.php");

$usuario=$_GET["usuario"];

$sql="SELECT * FROM usuarios WHERE usuario='$usuario'";
$query=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body background = "fondo6.jpg">
                <div class="container mt-5" align="center">
                <div class="col-md-4">
                    <form action="updateusuario.php" method="POST">
                    <h1 >Actualizar contraseña</h1>
                              
                                <input type="text" class="form-control mb-2" name="usuario">
                                <input type="password" class="form-control mb-2" name="contraseña">
                              
                            <input type="submit" class="btn btn-primary btn-block" value="Listo">
                            <a href="login.html" class="btn btn-primary">Regresar</a>
                    </form>
                    </div>
                </div>
    </body>
</html>