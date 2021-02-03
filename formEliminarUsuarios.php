<?php  

    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $usuario = verUsuarioPorID();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>
    <main class="container">
        <h1>Eliminar  Usuario</h1>

        <div class="alert bg-light p-4 col-6 mx-auto border border-danger shadow-sm">
            <div class="row">
        
                <div class="col text-danger">
                    <h2> Usuario : <?= $usuario['USUARIO'] ?></h2>
                    <h2> Mail : <?= $usuario['MAIL_USUARIO'] ?></h2>
                    
                   
                    <form action="eliminarUsuarios.php" method="post">
                        <input type="hidden" name="USUARIO"
                                value = "'<?= $usuario['USUARIO']?>'">
                        <button class="btn btn-danger btn-block my-2">
                            Eliminar Usuario
                        </button>
                        <a href="admUsuarios.php" class="btn btn-outline-secondary btn-block">
                            Volver a panel
                        </a>
                    </form>

                </div>
            </div>
        </div>

        <script>
            Swal.fire({
                title: 'Advertencia',
                text: "Esta acción no se puede deshacer.",
                type: 'error',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#999',
                confirmButtonText: 'Si, quiero eliminarlo',
                cancelButtonText: 'NO, no quiero eliminarlo'
            }).then((result) => {
                if (!result.value) {
                    //redirección a panel productos
                    window.location = 'admUsuarios.php';
                }
            })
        </script>

    </main>

<?php  include 'includes/footer.php';  ?>