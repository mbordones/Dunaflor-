
<?php  
    require 'funciones/conexion.php';
	include 'includes/header.html';
    include 'includes/nav.php';  
    require 'funciones/gastosConserjeMen.php';
    $resultado = agregarConserjeMen();
    $GACM_FE_GASTO   = $_POST['GACM_FE_GASTO'];
    $year1 = substr($GACM_FE_GASTO,0,4);
    $mes1  = substr($GACM_FE_GASTO,5,2);
 ?>

<main class="container">
    <h1>Agregar gasto conserje mensual</h1>

<?php
    $clase = 'danger';
    $mensaje = 'No se pudo agregar el gasto conserje';
    if( $resultado ){
        $clase = 'success';
        $mensaje = 'Gasto conserje agregado correctamente.';
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
