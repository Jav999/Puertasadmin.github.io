
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    
    
    $query = "SELECT * 
          FROM `compra` 
          WHERE `IDNombre_Proveedor` = '".$valueToSearch."'
             OR `IDProducto` = '".$valueToSearch."'
             OR `Cantidad` = '".$valueToSearch."'
             OR `Costo` = '".$valueToSearch."'
             OR `Fecha` = '".$valueToSearch."'
             OR `Factura` = '".$valueToSearch."'";
    $busqueda = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `compra`";
    $busqueda = filterTable($query);
}


function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "proyprogramacion");
    $filtro_resultado = mysqli_query($connect, $query);
    return $filtro_resultado;
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
    <title> Formulario de compras</title>
  <link rel="stylesheet" href="compra.css">
  <meta charset="UTF-8"> 
    </head>
    <body   background = "fondo.jpg">
    <script>
      function refreshPage(){
    window.location.reload();
} 
     
     </script>
        
        <form action="compra2.php" method="post" class="form">
           <center><h1>Búsqueda de compras </h1>
            <input type="text"   name="valueToSearch" placeholder=" Específica dato a buscar" required>
            <input type="submit"    class="botons" name="search" value="Filtrar"  >
			<input type='submit' onClick="refreshPage()" value='Regresar'><br>
            
            
            <table border="1" width="500"  height ="250">
                <tr>
                    <th>ID nombre proveedor</th>
                    <th>ID Producto</th>
                    <th>Cantidad</th>
                    <th>Costo</th>
                    <th>Fecha</th>
                    <th>Factura</th>
                   
                </tr>

     
                <?php while($row = mysqli_fetch_array($busqueda)):?>
                <tr>
                    <td><?php echo $row['IDNombre_Proveedor'];?></td>
                    <td><?php echo $row['IDProducto'];?></td>
                    <td><?php echo $row['Cantidad'];?></td>
                    <td><?php echo $row['Costo'];?></td>
                    <td><?php echo $row['Fecha'];?></td>
                    <td><?php echo $row['Factura'];?></td>
                </tr>
                <?php endwhile;?>
            </table> <a href="index.html" class="w3-btn w3-black">Regresar al men&uacute;</a></center>
			
        </form>
        
    </body>
</html>
</html>