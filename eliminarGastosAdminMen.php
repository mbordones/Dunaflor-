<?php  
    require 'funciones/conexion.php';
    require 'funciones/gastosAdmMen.php';
    $gasto = eliminarAdminMen();
	include 'includes/header.html';
    include 'includes/nav.php';  
    $GADM_FE_GASTO   = $_POST['GADM_FE_GASTO'];
    $year1 = substr($GADM_FE_GASTO,0,4);
    $mes1 = substr($GADM_FE_GASTO,5,2);
   
?>

    <main class="container">
        <h1>Eliminar Gastos Administrativo Mensual</h1>

<?php
  
        $clase = 'danger';
        $mensaje = 'No se pudo eliminar Gasto Administrativo Mensual';
        if( $gasto ){
            $clase = 'success';
            $mensaje = 'Gasto Administrativo Mensual eliminado correctamente.';
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

<?php  include 'includes/footer.php';  ?>