<?php  
    require 'funciones/conexion.php';
    require 'funciones/gastosParticularesMen.php';
    $gasto = eliminarPartMen();
	include 'includes/header.html';
    include 'includes/nav.php';  
    $GPAM_FE_GASTO   =  $_POST['GPAM_FE_GASTO'];
    $year1 = substr($GPAM_FE_GASTO,0,4);
    $mes1 = substr($GPAM_FE_GASTO,5,2);
   
?>

    <main class="container">
        <h1>Eliminar Gastos Particular Mensual</h1>

<?php
        $clase = 'danger';
        $mensaje = 'No se pudo eliminar Gasto Particular Mensual';
        if( $gasto ){
            $clase = 'success';
            $mensaje = 'Gasto Particular Mensual eliminado correctamente.';
?>
            <div class="alert alert-<?= $clase; ?> p-3">
                <?= $mensaje; ?>
                <br>
                <a href="mostrarGastos.php?mes=<?php echo $mes1;?>&year=<?php echo $year1;?>" class="btn btn-outline-secondary">
                    Volver a Gastos
                </a>
            </div>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>

