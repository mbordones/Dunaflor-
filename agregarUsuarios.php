
<?php  
    require 'funciones/conexion.php';
	include 'includes/header.html';
    include 'includes/nav.php';  
    require 'funciones/usuarios.php';
    $resultado = agregarUsuario();
 ?>

<main class="container">
    <h1>Agregar  Usuario</h1>

<?php
    $clase = 'danger';
    $mensaje = 'No se pudo agregar el usuario';
    if( $resultado ){
        $clase = 'success';
        $mensaje = 'Usuario agregado correctamente.';
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


<?php  include 'includes/footer.php';?>
