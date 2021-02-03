
<?php  
    require 'funciones/conexion.php';
	include 'includes/header.html';
    include 'includes/nav.php';  
    require 'funciones/gastosParticularesMen.php';
    $resultado = agregarGastosPartMen();
    $GPAM_FE_GASTO   =  $_POST['GPAM_FE_GASTO'];
    $year1 = substr($GPAM_FE_GASTO,0,4);
    $mes1 = substr($GPAM_FE_GASTO,5,2);
    
 ?>

<main class="container">
    <h1>Agregar Gasto Particular Mensual </h1>

<?php
    $clase = 'danger';
    $mensaje = 'No se pudo agregar el gasto particular mensual';
    if( $resultado ){
        $clase = 'success';
        $mensaje = 'Gasto particular mensual agregado correctamente.';  
?>
        <div class="alert alert-<?= $clase; ?> p-3">
            <?= $mensaje; ?>
            <br>
            <a href="mostrarGastos.php?mes=<?php echo $mes1;?>&year=<?php echo $year1;?>" class="btn btn-outline-secondary">
                Volver a panel
            </a>
        </div>
<?php
    }
?>
</main>


<?php  include 'includes/footer.php';?>
