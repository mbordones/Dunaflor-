<?php  

    require 'funciones/conexion.php';
    require 'funciones/gastosConserje.php';
    $gasto = verConserjePorID();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Eliminar Gasto Conserje</h1>

        
        <div class="alert bg-light p-4 col-6 mx-auto border border-danger shadow-sm">
            <div class="row">
        

            
                <div class="col text-danger">
                    <h2> Desc. Gasto: <?=  $gasto['GCON_DESC_GASTO']   ?></h2>
                      <form action="eliminarGastosConserje.php" method="post">
                        <input type="hidden" name="GCON_CD_GASTO"
                               value="<?= $gasto['GCON_CD_GASTO'] ?>">
                        <button class="btn btn-danger btn-block my-2">
                            Confirmar Eliminar
                        </button>
                        <a href="adminGastos.php" class="btn btn-outline-secondary btn-block">
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
                    window.location = 'adminGastos.php';
                }
            })
        </script>

    </main>

<?php  include 'includes/footer.php';  ?>