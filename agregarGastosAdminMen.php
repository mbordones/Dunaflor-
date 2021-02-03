
<?php  
    require 'funciones/conexion.php';
	include 'includes/header.html';
    include 'includes/nav.php';  
    require 'funciones/gastosAdmMen.php';
    $resultado = agregarAdminMen();
    $GADM_FE_GASTO   = $_POST['GADM_FE_GASTO'];
    $year1 = substr($GADM_FE_GASTO,0,4);
    $mes1  = substr($GADM_FE_GASTO,5,2);

 ?>

<main class="container">
    <h1>Agregar Gastos Administrativo Mensual</h1>

<?php
    $clase = 'danger';
    $mensaje = 'No se pudo agregar el gasto administrativo';
    if( $resultado ){
        $clase = 'success';
        $mensaje = 'Gasto administrativo agregado correctamente.';
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


<?php  include 'includes/footer.php';?>
