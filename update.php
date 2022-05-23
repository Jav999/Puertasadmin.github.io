<?php

include("conexioninv.php");


$id=$_POST["id"];
$nomb=$_POST["nombre"];
$med=$_POST["medida"];
$pre=$_POST["precio"];
$cant=$_POST["cantidad"];

$sql="UPDATE inventario SET  Nombre_Producto='$nomb',Medida='$med',Precio='$pre',Cantidad='$cant' WHERE IDProducto='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: inventario.php");
    }
?>