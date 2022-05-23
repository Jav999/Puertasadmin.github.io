<?php

include("conexionproveedor.php");

$id=$_POST["id"];
$nombre_proveedor=$_POST["nombre"];
$telefono=$_POST["telefono"];
$ciudad=$_POST["ciudad"];
$rfc=$_POST["rfc"];

$sql="UPDATE proveedor SET  nombre_proveedor='$nombre_proveedor',telefono='$telefono',ciudad='$ciudad',rfc='$rfc' WHERE id_proveedor='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: proveedor.php");
    }
?>