<?php  
	include 'includes/nav.php'; 
	include 'includes/header.html';
    require "funciones/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar Año</title>
 <body>
<br>

 
<div  id="formulario">
                      
    <center>     <h1>Marcar Pagado</h1>    </center> 
    <br> <br>
    

    <center>
        
    <form action="pagoDeptosSi.php" method="POST"  autocomplete="off" >
         </label>  <label>Año  <input type="text" name=year size="4" required >  </label>
    
        <br >   <br >
        <input name="Submit" type="submit" value="Procesar"  class="btn btn-outline-secondary">
        &nbsp;&nbsp;
        <a href="menu.php" class="btn btn-outline-secondary">
            Salir
        </a>
     </form>
   
</center>

  
        

</div>
   
</body>
</html>