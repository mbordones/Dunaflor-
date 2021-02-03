<?php  
	
	include 'includes/header.html';
    include 'includes/nav.php';  
    /*<input type="text" name=$usuario hidden>*/
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuscarRecibo</title>

</head>
<body>
<br>
<br>

<div  id="formulario">
                      
    <center>     <h1> Procesar Recibos</h1>    </center> 
    

    <center>
        
    <form action=procesarRecibos.php method="POST"  autocomplete="off" >
        <label>Fecha :  <input type="date" name=fecha required >  </label>  
    
        <br >   <br >
        <input name="Submit" type="submit" value="Procesar"   class="btn btn-outline-secondary">
       
    </form>





   
</center>


</div>
   
</body>
</html>