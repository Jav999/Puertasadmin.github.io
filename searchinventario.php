<?php

$search = $_POST['search'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyprogramacion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from inventario where Nombre_Producto like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["IDProducto"]."  ".$row["Nombre_Producto"]." ".$row["Medida"]."  
    ".$row["Cantidad"]. " ".$row["Punto_Reorden"]. "<br>";
}
} else {
	echo "El producto que busca no esta registrado en la base de datos";
}

$conn->close();

?>