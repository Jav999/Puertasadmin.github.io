<?php
include("conexioninv.php");

$Nombre_Producto=$_POST["nombre"];
$Medida=$_POST["medida"];
$Precio=$_POST['precio'];
$Cantidad=$_POST['cantidad'];

$sql = "INSERT INTO inventario (IDProducto, Nombre_Producto, Medida, Precio, Cantidad)
VALUES('$id', '$Nombre_Producto', '$Medida', '$Precio', '$Cantidad') ";
if (mysqli_query($conn, $sql)) {
    header("Location: inventario.php");
    echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';
} else {
    echo "Error: " . $sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
    
?>