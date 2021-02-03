<
<?php  
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $usuarios =listarUsuarios();
    include 'includes/header.html';
    include 'includes/nav.php'; 
 ?>
    <main class="container">
        <h1>Agregar Usuarios</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

          <form action="agregarUsuarios.php" method="post" enctype="multipart/form-data">
                     
          <div class="form-group">
                    <label for="USUARIO">Usuario</label>
                    <input type="text" name="USUARIO"
                           class="form-control" id="USUARIO" required autocomplete="off">
           </div>


           <div class="form-group">
                    <label for="MAIL_USUARIO">Email Usuario</label>
                    <input type="text" name="MAIL_USUARIO"
                           class="form-control" id="MAIL_USUARIO" required autocomplete="off">
           </div>

           <div class="form-group">
                    <label for="MAIL_USUARIO_2">Email Usuario2</label>
                    <input type="text" name="MAIL_USUARIO_2"
                           class="form-control" id="MAIL_USUARIO_2"  autocomplete="off">
           </div>

           <div class="form-group">
                    <label for="CLAVE">Clave</label>
                    <input type="password" name="CLAVE"
                           class="form-control" id="CLAVE" required   autocomplete="off">
           </div>

           <div class="form-group">
                    <label for="EDIFICIO_U">Apartamento</label>
                    <input type="text" name="DEPTO_U"
                           class="form-control" id="DEPTO_U" required autocomplete="off" style="text-transform:uppercase" >
           </div>

                <button class="btn btn-dark mr-3">Agregar Usuario</button>
                <a href="AdmUsuarios.php" class="btn btn-outline-secondary">
                    Volver a Home
                </a>

            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>


                         
