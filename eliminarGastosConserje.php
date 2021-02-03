  
<?php  

    require 'funciones/conexion.php';
    require 'funciones/gastosConserje.php';
    $gasto = eliminarConserje();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Eliminar Gastos Conserje</h1>

<?php
  
        $clase = 'danger';
        $mensaje = 'No se pudo eliminar Gasto Conserje';
        if( $gasto ){
            $clase = 'success';
            $mensaje = 'Gasto Conserje eliminado correctamente.';
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