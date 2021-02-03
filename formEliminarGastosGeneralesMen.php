<?php  

    require 'funciones/conexion.php';
    require 'funciones/gastosGeneralesMen.php';
    $gastoGen = verGeneralMenPorID();
	include 'includes/header.html';
    include 'includes/nav.php';  
    $GAGM_FE_GASTO   =  $_GET['GAGM_FE_GASTO'];
    $year = substr($GAGM_FE_GASTO,0,4);
    $mes  = substr($GAGM_FE_GASTO,5,2);
   
?>

    <main class="container">
        <h1>Eliminar Gasto General Mensual</h1>

        <div class="alert bg-light p-4 col-6 mx-auto border border-danger shadow-sm">
            <div class="row">
        
                <div class="col text-danger">
                    <h2> Codigo de Gasto: <?=  $gastoGen['GAGM_CD_GASTO'] ?></h2>
                         Desc. Gasto :    <?=  $gastoGen['GAGE_DESC_GASTO'] ?><br>
                         Monto Gasto :    <?=  $gastoGen['GAGM_MT_GASTO'] ?><br>
                      
                     

                    <form action="eliminarGastosGeneralesMen.php" method="post">
                        <input type="hidden" name="GAGM_CD_GASTO"
                               value="<?= $gastoGen['GAGM_CD_GASTO'] ?>">
                        <input type="hidden" name="GAGM_FE_GASTO"
                               value="<?= $gastoGen['GAGM_FE_GASTO'] ?>">
                        <button class="btn btn-danger btn-block my-2">
                            Confirmar Eliminar
                        </button>
                        <a href="mostrarGastos.php?mes=<?php echo $mes;?>&year=<?php echo $year;?>" class="btn btn-outline-secondary btn-block">
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
                    window.location = 'mostrarGastos.php?mes=<?php echo $mes;?>&year=<?php echo $year;?>';
                }
            })
        </script>

    </main>

<?php  include 'includes/footer.php';  ?>