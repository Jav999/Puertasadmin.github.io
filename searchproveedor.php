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

$sql = "select * from proveedor where IDNombre_Proveedor like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["IDNombre_Proveedor"]."  ".$row["Telefono"]." ".$row["Ciudad"]."  ".$row["RFC"]. "<br>";
}
} else {
	echo "El proveedor que busca no esta registrado en la base de datos";
}

$conn->close();

?>