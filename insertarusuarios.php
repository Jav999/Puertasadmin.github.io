<?php
include("conexionusuarios.php");

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$sql = "INSERT INTO usuarios (usuario, contraseña)
VALUES('$usuario', '$contraseña') ";
if (mysqli_query($conn, $sql)) {
    header("Location: registrousuario.php");
    echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';
} else {
    echo "Error: " . $sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
    
?>
