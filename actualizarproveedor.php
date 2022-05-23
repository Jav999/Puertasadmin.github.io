<?php 
include("conexionproveedor.php");

$id=$_GET["id"];

$sql="SELECT * FROM proveedor WHERE id_proveedor='$id'";
$query=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body background = "fondo6.jpg">
                <div class="container mt-5" align="center">
                <div class="col-md-4">
                    <form action="updateproveedor.php" method="POST">
                    <h1>Actualizar datos</h1>
                                <input type="hidden" name="id" value="<?php echo $row['Id_Proveedor']  ?>">
                                
                                <input type="text" class="form-control mb-2" name="nombre"  value="<?php echo $row['Nombre_Proveedor']  ?>"required>
                                <input type="text" class="form-control mb-2" name="telefono"  value="<?php echo $row['Telefono']  ?>"required>
                                <input type="text" class="form-control mb-2" name="ciudad"  value="<?php echo $row['Ciudad']  ?>"required>
                                <input type="text" class="form-control mb-2" name="rfc"  value="<?php echo $row['RFC']  ?>"required>

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Listo">
                            <a href="proveedor.php" class="btn btn-primary">Regresar</a>
                    </form>
                    </div>
                </div>
    </body>
</html>