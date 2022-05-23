<?php
include("conexioninv.php");

$id=$_GET["id"];

$sql="DELETE FROM inventario  WHERE IDProducto='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: inventario.php");
    }
?>