<?php  

    require 'funciones/conexion.php';
    require 'funciones/apartamentos.php';
    $depto = verDeptosPorID();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Eliminar  Apartamento</h1>

        <div class="alert bg-light p-4 col-6 mx-auto border border-danger shadow-sm">
            <div class="row">
        
                <div class="col text-danger">
                    <h2> Apartamento : <?= $depto['CD_DEPARTAMENTO_D'] ?></h2>
                    <h2> Propietario : <?= $depto['NOMBRE_PROPIETARIO_D'] ?></h2>
                    <h2> Apartamento : <?= $depto['ALICUOTA_D'] ?></h2>
                   
                    <form action="eliminarDeptos.php" method="post">
                        <input type="hidden" name="CD_DEPARTAMENTO_D"
                                value = "'<?= $depto['CD_DEPARTAMENTO_D']?>'">
                        <button class="btn btn-danger btn-block my-2">
                            Confirmar baja
                        </button>
                        <a href="admDeptos.php" class="btn btn-outline-secondary btn-block">
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
                    window.location = 'admDeptos.php';
                }
            })
        </script>

    </main>

<?php  include 'includes/footer.php';  ?>