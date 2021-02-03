  
<?php  

    require 'funciones/conexion.php';
    require 'funciones/gastosAdmin.php';
    require 'funciones/usuarios.php';
    $usuario = eliminarUsuario();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Eliminar Usuario</h1>

<?php
  
        $clase = 'danger';
        $mensaje = 'No se pudo eliminar Usuario';
        if( $usuario ){
            $clase = 'success';
            $mensaje = 'Usuario eliminado correctamente.';
?>
            <div class="alert alert-<?= $clase; ?> p-3">
                <?= $mensaje; ?>
                <br>
                <a href="admUsuarios.php" class="btn btn-outline-secondary">
                    Volver a Usuarios
                </a>
            </div>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>