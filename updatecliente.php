<?php

include("conexioncliente.php");

$id=$_POST["id"];
$Nombre_Cliente=$_POST["nombre"];
$Ciudad=$_POST["ciudad"];
$Telefono=$_POST["telefono"];
$RFC=$_POST["rfc"];

$sql="UPDATE cliente SET  Nombre_Cliente='$Nombre_Cliente',Ciudad='$Ciudad',Telefono='$Telefono',RFC='$RFC' WHERE IDCliente='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>