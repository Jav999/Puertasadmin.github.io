<?php 
include("conexioninv.php");

$id=$_GET["id"];

$sql="SELECT * FROM inventario WHERE IDProducto='$id'";
$query=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body background = "fondo6.jpg">
                <div class="container mt-5" align="center">
                <div class="col-md-4"> 
                   
                    <form action="update.php" method="POST"> 
                    <h1>Datos a actualizar</h1>
                                <input type="hidden" name="id" value="<?php echo $row['IDProducto']  ?>">
                                
                                <input type="text" class="form-control mb-2" name="nombre"  value="<?php echo $row['Nombre_Producto']  ?>"required>
                                <input type="text" class="form-control mb-2" name="medida"  value="<?php echo $row['Medida']  ?>"required>
                                <input type="text" class="form-control mb-2" name="precio"  value="<?php echo $row['Precio']  ?>"required>
                                <input type="text" class="form-control mb-2" name="cantidad"  value="<?php echo $row['Cantidad']  ?>"required>

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Listo">
                            <a href="inventario.php" class="btn btn-primary">Regresar</a>
                    </form>
                    </div>
                </div>
    </body>
</html>