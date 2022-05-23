<?php
include("conexioncliente.php");

$Nombre_Cliente=$_POST['nombre'];
$Ciudad=$_POST['ciudad'];
$Telefono=$_POST['telefono'];
$RFC=$_POST['rfc'];

$sql = "INSERT INTO cliente (IDCliente, Nombre_Cliente, Ciudad, Telefono, RFC)
VALUES('$id', '$Nombre_Cliente', '$Ciudad', '$Telefono', '$RFC') ";
if (mysqli_query($conn, $sql)) {
    header("Location: cliente.php");
    echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';
} else {
    echo "Error: " . $sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
    
?>