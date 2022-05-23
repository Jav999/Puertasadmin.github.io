<?php 
 include("conexioncliente.php");

$sql="SELECT *  FROM cliente";
$query=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cliente</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body background = "fondo6.jpg">
<div class="container mt-5">
<div class="row"> 
    <div class="col-md-3">
    <h1 >Datos del cliente </h1>
    <form action="insertarcliente.php" method="POST">
    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" required>
    <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad"required>
    <input type="text" class="form-control mb-3" name="telefono" placeholder="Tel&eacute;fono" minlength="4" maxlength="13" required>
    <input type="text" class="form-control mb-3" name="rfc" placeholder="XX-X-X-XX-XX-XX-XXX" minlength="4" maxlength="13" required>
    <input type="submit" class="btn btn-primary">
    <a href="menu.html" class="btn btn-primary">Regresar menu principal </a>
</form>
</div>
<div class="col-md-8">
<input class="form-control" id="myInput" type="text" placeholder="Buscar...">
<br>
<table class="table" >
    <thead class="table-success table-striped" >
        <tr>
        <!--<th>ID_Cliente</th>-->
        <th>Nombre del Cliente</th>
        <th>Ciudad</th>
        <th>Telefono</th>
        <th>RFC</th>
        <th></th>
        <th></th>
        </tr>
        </thead>
        <tbody id="myTable">
<?php
while($row=mysqli_fetch_array($query)){
?>
    <tr>
<!--<th><?php  echo $row['IDCliente']?></th>-->

<th><div style="color: white" </div><?php  echo $row['Nombre_Cliente']?></th>
<th><div style="color: white"</div><?php  echo $row['Ciudad']?></th>
<th><div style="color: white"</div><?php  echo $row['Telefono']?></th>
<th><div style="color: white"</div><?php  echo $row['RFC']?></th>   
                                                 
<th><a href="actualizarcliente.php?id=<?php echo $row['IDCliente'] ?>" class="btn btn-info">Editar</a></th>
<th><a href="deletecliente.php?id=<?php echo $row['IDCliente'] ?>" class="btn btn-danger" onclick="clicked(event)" >Eliminar</a></th> 
                                     
</tr>

<?php 
}
?>
</tbody>
</table>
</div>
</div>
</div>  
</div>
<script>
function clicked(e)
{
    if(!confirm('¿Desea eliminar?'))e.preventDefault();
}
</script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>