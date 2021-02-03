<
<?php  
    require 'funciones/conexion.php';
	include 'includes/header.html';
    include 'includes/nav.php';  
    require 'funciones/usuarios.php';
    $usuario = verUsuarioPorID();


?>

    <main class="container">
        <h1>Modificar Usuario</h1>

         <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

       
            <form action="modificarUsuario.php" method="post">
                <div class="form-group">
                    <label for="ROL_USUARIO">Rol de Usuario</label>
                    <input type="text" name="ROL_USUARIO"  
                        value="<?= $usuario['ROL_USUARIO']?>"
                           class="form-control" id="ROL_USUARIO" length=3 >
               
                    
                    <label for="MAIL_USUARIO ">Email de Usuario</label>      
                    <input type="text" name="MAIL_USUARIO"
                        value="<?= $usuario['MAIL_USUARIO']?>"
                           class="form-control" id="MAIL_USUARIO " >

                    <label for="MAIL_USUARIO_2">Email de Usuario 2</label>      
                    <input type="text" name="MAIL_USUARIO_2"
                     value="<?= $usuario['MAIL_USUARIO_2']?>"
                      class="form-control" id="MAIL_USUARIO_2" >

      
                       <label for="CLAVE">Password de Usuario</label> 
                       <input type="text" name="CLAVE" value="<?= $usuario['CLAVE']?>"
                        class="form-control" id="CLAVE" >

                        <label for="DEPTO_U">Apartamento </label> 
                       <input type="text" name="DEPTO_U" value="<?= $usuario['DEPTO_U']?>"   class="form-control" id="DEPTO_U" style="text-transform:uppercase" autocomplete="off">

                </div>
                <input type="hidden" name="USUARIO" value="'<?= $usuario['USUARIO']?>'">
                <button class="btn btn-dark mr-3">Modificar Usuario</button>
                <a href="admUsuarios.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
