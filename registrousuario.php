<?php 
 include("conexionusuarios.php");

$sql="SELECT *  FROM usuarios";
$query=mysqli_query($conn,$sql);

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<title>Usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body background = "fondo6.jpg">
<div class="container mt-5" align="center">
<div class="row"> 
    
 
    <h1>Registrar nuevo usuario</h1>
    <form action="insertarusuarios.php" method="POST">
    <input type="text"  name="usuario" placeholder="Nombre de usuario " required>
    <input type="password" name="contraseña" placeholder="Contraseña" minlength="4" maxlength="13" required>
    <br>
    <br>
    <input type="submit" class="btn btn-primary">
    <a href="menu.html" class="btn btn-primary">Regresar menu principal</a>

    <br>

   

</form>
</div>
 <img src="usuario.png" alt=usuario width="600" height="500">



</body>
</html>