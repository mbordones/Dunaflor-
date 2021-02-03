  
<?php  

    require 'funciones/conexion.php';
    require 'funciones/apartamentos.php';
    $resultado = agregarDeptos();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Agregar de Apartamentos</h1>

<?php
        $clase = 'danger';
        $mensaje = 'No se pudo agregar la Apartamento';
        if( $resultado ){
            $clase = 'success';
            $mensaje = 'Apartamento agregado corectamente.';
?>
            <div class="alert alert-<?= $clase; ?> p-3">
                <?= $mensaje; ?>
                <br>
                <a href="admDeptos.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </div>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>