<?php
include("conexionproveedor.php");

$nombre_proveedor=$_POST['nombre'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
$rfc=$_POST['rfc'];

$sql = "INSERT INTO proveedor (id_proveedor, nombre_proveedor, telefono, ciudad, rfc)
VALUES('$id', '$nombre_proveedor', '$telefono', '$ciudad', '$rfc') ";
if (mysqli_query($conn, $sql)) {
    header("Location: proveedor.php");
    echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';
} else {
    echo "Error: " . $sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
    
?>