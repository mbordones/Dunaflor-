  
<?php  

require 'funciones/conexion.php';
include 'funciones/gastosParticularesMen.php';
$resultado = modificarGtosPart();
include 'includes/header.html';
include 'includes/nav.php';  
?>

<main class="container">
    <h1>Modificación de Gasto Particular</h1>

<?php
    $clase = 'danger';
    $mensaje = 'No se pudo modificar el gasto particular';
    if( $resultado ){
        $clase = 'success';
        $mensaje = 'Gasto particular modificado corectamente.';
?>
        <div class="alert alert-<?= $clase; ?> p-3">
            <?= $mensaje; ?>
            <br>
            <a href="admUsuarios.php" class="btn btn-outline-secondary">
                Volver a panel
            </a>
        </div>
<?php
    }
?>
</main>

<?php  include 'includes/footer.php';  ?>