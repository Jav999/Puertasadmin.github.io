<?php 
include "config.php";
?>
<!doctype html>
<html>
<center><body  background = "fondo.jpg">

   
   <link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="compra.css">

   
   <script src='jquery-3.3.1.js' type='text/javascript'></script>
   <script src='jquery-ui.min.js' type='text/javascript'></script>
   <script type='text/javascript'>
  
   $(document).ready(function(){
     $('.dateFilter').datepicker({
        dateFormat: "yy-mm-dd"
     });
   });
   </script>

   
   <form method='post' class="form" action=''>
   <h1> B&uacute;squeda de ventas</h1> 
      Inicio<input type='date' class='dateFilter' name='fromDate'  value=' <?php if(isset($_POST['fromDate'])) echo $_POST['fromDate']; ?>' >
 
     Final<input type='date' class='dateFilter' name='endDate'  value=' <?php if(isset($_POST['endDate'])) echo $_POST['endDate']; ?>' >

     <input type='submit' name='but_search' value='B&uacute;squeda'>
     <input type='submit' onClick="refreshPage()" value='Regresar'>


    
   

  
  
 
     <table border='1' width='100%' >
     <tr>  
                               <th width="15%">IDCliente</th>  
                               <th width="15%">IDProducto </th>  
                               <th width="15%">Cantidad</th>  
                               <th width="15%">Precio</th>  
                               <th width="15%">Fecha</th> 
                               <th width="15%">Factura</th>   
                          </tr> 

       <?php
       $emp_query = "SELECT * FROM venta  WHERE 1 ";

       // Date filter
       if(isset($_POST['but_search'])){
          $fromDate = $_POST['fromDate'];
          $endDate = $_POST['endDate'];

          if(!empty($fromDate) && !empty($endDate)){
             $emp_query .= " and Fecha 
                          between '".$fromDate."' and '".$endDate."' ";
          }
        }

        // Sort
        $emp_query .= " ORDER BY Fecha DESC";
        $Records = mysqli_query($con,$emp_query);

        // Check records found or not
        if(mysqli_num_rows($Records) > 0){
          while($empRecord = mysqli_fetch_assoc($Records)){
            $IDCliente = $empRecord['IDCliente'];
            $IDProducto = $empRecord['IDProducto'];
            $Cantidad = $empRecord['Cantidad'];
            $Precio = $empRecord['Precio'];
            $Fecha = $empRecord['Fecha'];
            $Factura = $empRecord['Factura'];

            echo "<tr>";
            echo "<td>". $IDCliente ."</td>";
            echo "<td>". $IDProducto ."</td>";
            echo "<td>". $Cantidad ."</td>";
            echo "<td>". $Precio ."</td>";
            echo "<td>". $Fecha ."</td>";
            echo "<td>". $Factura  ."</td>";
            echo "</tr>";
          }
        }else{
          echo "<tr>";
          echo "<td colspan='4'>No se encontro.</td>";
          echo "</tr>";
        }
        ?>
      </table> 
 
    <center><a href="index.html" class="w3-btn w3-black">Regresar al men&uacute;</a>
    </form>
 </body></center>
</html>

