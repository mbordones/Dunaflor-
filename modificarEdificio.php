  
<?php  

require 'funciones/conexion.php';
require 'funciones/edificio.php';
$resultado = modiEdificio();
include 'includes/header.html';
include 'includes/nav.php';  
?>

<main class="container">
    <h1>Modificación de Edificio</h1>

<?php
    $clase = 'danger';
    $mensaje = 'No se pudo modificar el edificio';
    if( $resultado ){
        $clase = 'success';
        $mensaje = 'Edificio modificado corectamente.';
?>
        <div class="alert alert-<?= $clase; ?> p-3">
            <?= $mensaje; ?>
            <br>
            <a href="admEdificio.php" class="btn btn-outline-secondary">
                Volver a Edificio
            </a>
        </div>
<?php
    }
?>
</main>

<?php  include 'includes/footer.php';  ?>