<?php
include("conexionproveedor.php");

$id=$_GET["id"];

$sql="DELETE FROM proveedor WHERE id_proveedor='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: proveedor.php");
    }
?> 