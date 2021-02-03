  
<?php  

    require 'funciones/conexion.php';
  	include 'includes/header.html';
    include 'includes/nav.php';  
    require 'funciones/apartamentos.php';
    $resultado = actPagos();
?>

    <main class="container">
        <h1>Actualizar Pagos</h1>

<?php
        $clase = 'danger';
        $mensaje = 'No se pudo actualizar pagos';
        if( $resultado ){
            $clase = 'success';
            $mensaje = 'Pago actualizado correctamente.';
?>
            <div class="alert alert-<?= $clase; ?> p-3">
                <?= $mensaje; ?>
                <br>
                <a href="pagoMes.php" class="btn btn-outline-secondary">
                    Volver a Pagos
                </a>
            </div>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>