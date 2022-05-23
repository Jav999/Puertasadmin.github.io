<?php

include("conexionusuarios.php");


$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];


$sql="UPDATE usuarios SET  usuario='$usuario',contraseña='$contraseña', WHERE usuario='$usuario'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: actualizarusuario.php");
    }
?>