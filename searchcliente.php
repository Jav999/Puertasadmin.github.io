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

$sql = "select * from cliente where Nombre_Cliente like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["IDCliente"]."  ".$row["Nombre_Cliente"]." ".$row["Ciudad"]." 
    ".$row["Telefono"]."  ".$row["RFC"]. "<br>";
}
} else {
	echo "El cliente que busca no esta registrado en la base de datos";
}

$conn->close();

?>


	
