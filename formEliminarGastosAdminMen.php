<?php  

    require 'funciones/conexion.php';
    require 'funciones/gastosAdmMen.php';
    $gastoAdm = verAdminMenPorID();
	include 'includes/header.html';
    include 'includes/nav.php';  
    $GADM_FE_GASTO = $_GET['GADM_FE_GASTO'];
    $year = substr($GADM_FE_GASTO,0,4);
    $mes = substr($GADM_FE_GASTO,5,2);
   
   
?>

    <main class="container">
        <h1>Eliminar Gasto Administrativo Mensual</h1>

        <div class="alert bg-light p-4 col-6 mx-auto border border-danger shadow-sm">
            <div class="row">
        
                <div class="col text-danger">
                    <h2> Codigo de Gasto: <?=  $gastoAdm['GAMI_CD_GASTO'] ?></h2>
                         Desc. Gasto :    <?=  $gastoAdm['GAMI_DESC_GASTO'] ?><br>
                         Monto Gasto :    <?=  $gastoAdm['GADM_MT_GASTO'] ?><br>
                      
                     

                    <form action="eliminarGastosAdminMen.php" method="post">
                        <input type="hidden" name="GAMI_CD_GASTO"
                               value="<?= $gastoAdm['GAMI_CD_GASTO'] ?>">
                        <input type="hidden" name="GADM_FE_GASTO"
                               value="<?= $gastoAdm['GADM_FE_GASTO'] ?>">
                        <button class="btn btn-danger btn-block my-2">
                            Confirmar Eliminar
                        </button>
                        <a href="mostrarGastos.php?mes=<?php echo  $mes;?>&year=<?php echo $year;?>" class="btn btn-outline-secondary btn-block">
                            Volver a Gastos
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
                    window.location = 'mostrarGastos.php?mes=<?php echo  $mes;?>&year=<?php echo $year;?>';
                }
            })
        </script>

    </main>

<?php  include 'includes/footer.php';  ?>