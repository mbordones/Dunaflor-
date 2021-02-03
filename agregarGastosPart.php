
<?php  
    require 'funciones/conexion.php';
	include 'includes/header.html';
    include 'includes/nav.php';  
    require 'funciones/gastosPart.php';
    $resultado = agregarGastosPart();
     
 ?>

<main class="container">
    <h1>Agregar  de una nuevo gasto particular</h1>

<?php

     /*if($resultado ==1) 
     {  
          $mensaje = 'Gasto  particular ya Existe';
     }*/


    $clase = 'danger';
    $mensaje = 'No se pudo agregar el gasto  particular';
    if( $resultado ){
        $clase = 'success';
        $mensaje = 'Gasto  particular agregado correctamente.';
?>
        <div class="alert alert-<?= $clase; ?> p-3">
            <?= $mensaje; ?>
            <br>
            <a href="adminGastos.php" class="btn btn-outline-secondary">
                Volver a panel
            </a>
        </div>
<?php
    }
?>
</main>


<?php  include 'includes/footer.php';?>
