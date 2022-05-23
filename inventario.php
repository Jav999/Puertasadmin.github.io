

<?php 
 include("conexioninv.php");

$sql="SELECT *  FROM inventario";
$query=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <head>
        <title>Inventario</title>
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
    <div class="col-md-4">
    <h1>Registro de inventario</h1>
    <form action="insertar.php" method="POST">
    <input list="browser" name="nombre" id="nombre" class="form-control mb-3 " placeholder="Nombre del producto" required>
    <datalist id="browser">
    <option value="Puerta de tambor decorada">
    <option value="Puerta de tambor lisa">
    <option value="Puerta de tambor triplay">
    <option value="Puerta de madera">
    <option value="Puerta PVC">
    <option value="Puerta s&oacute;lida triplay">
    <option value="Puerta s&oacute;lida comprimida">
    <option value="Puerta semi s&oacute;lida">
    <option value="Puerta de vitral ovalado">
    <option value="Puerta media luna vitral">
    <option value="Puerta media luna pata de gallo">
    <option value="Puerta de vidrio cuadro chico">
    <option value="Puerta de vitral cuadrado">
    <option value="Puerta de madera con vitral de lateral">
    <option value="Puerta de vitral campana">
    <option value="Puerta pantry">
    <option value="Puerta landry">
    <option value="Puerta de vitral largo">
    </datalist>
    <input list="list" name="medida" id="medida" class="form-control mb-3 "placeholder="Medida" required>
    <datalist id="list">
      <option value="24 x 80">
      <option value="26 x 80">
      <option value="28 x 80">
      <option value="30 x 80">
      <option value="32 x 80">
      <option value="34 x 80">
      <option value="36 x 80">
      <option value="24 x 79">
      <option value="26 x 79">
      <option value="28 x 79">
      <option value="30 x 79">
      <option value="32 x 79">
      <option value="34 x 79">
      <option value="36 x 79">
    </datalist>
    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" required>
    <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad" required>
    <input type="submit" class="btn btn-primary">
    <a href="menu.html" class="btn btn-primary">Regresar menu principal</a>
</form>
</div>
<div class="col-md-8">
<input class="form-control" id="myInput" type="text" placeholder="Buscar...">
<br>
<table class="table" >
    <thead class="table-success table-striped" >
        <tr>
        <!--<th>IdProducto</th>-->
        <th>Nombre del Producto</th>
        <th>Medida </th>
        <th>Precio</th>
        <th>Cantidad disponible</th>
        <th></th>
        <th></th>
        </tr>
        </thead>
        <tbody id="myTable">
<?php
while($row=mysqli_fetch_array($query)){
?>
    <tr>
<!--<th><?php  echo $row['IDProducto']?></th>-->
<th><div style="color: white" </div><?php  echo $row['Nombre_Producto']?></th>
<th><div style="color: white" </div><?php  echo $row['Medida']?></th>
<th><div style="color: white" </div><?php  echo $row['Precio']?></th>
<th><div style="color: white" </div><?php  echo $row['Cantidad']?></th>   
                                                 
<th><a href="actualizar.php?id=<?php echo $row['IDProducto'] ?>" class="btn btn-info">Editar</a></th>
<th><a href="delete.php?id=<?php echo $row['IDProducto'] ?>" class="btn btn-danger"  onclick="clicked(event)">Eliminar</a></th> 
                                     
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