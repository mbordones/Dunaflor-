  
<?php  

    require 'funciones/conexion.php';
    require 'funciones/gastosGenerales.php';
    $gasto = eliminarGastosGen();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Eliminar Gastos General</h1>

<?php
  
        $clase = 'danger';
        $mensaje = 'No se pudo eliminar Gasto General';
        if( $gasto ){
            $clase = 'success';
            $mensaje = 'Gasto General eliminado correctamente.';
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

<?php  include 'includes/footer.php';  ?>