<?php
include("conexioncliente.php");

$id=$_GET["id"];

$sql="DELETE FROM cliente  WHERE IDCliente='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>