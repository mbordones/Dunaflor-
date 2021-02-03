<?php  
    require 'funciones/conexion.php';
    require 'funciones/gastosConserjeMen.php';
    $gasto = verConserjeMenPorID();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de Gastos Conserje Mensual</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

            <form action="modificarGastosConserjeMen.php" method="post">
                <div class="form-group">
                    <label for="GACM_MT_GASTO">Monto Gasto</label>
                    <input type="number" name="GACM_MT_GASTO"
                           value="<?= $gasto['GACM_MT_GASTO'] ?>"
                           class="form-control" id="GACM_MT_GASTO" required><br>
                 </div>

                 <div class="form-group">
                    <label for="GACM_FE_GASTO">Fecha Gasto</label>
                    <input type="date" name="GACM_FE_GASTO"
                           value="<?= $gasto['GACM_FE_GASTO'] ?>"
                           class="form-control" id="GACM_FE_GASTO" required><br>
                 </div>
                <input type="hidden" name="GACM_CD_GASTO" value="<?= $gasto['GACM_CD_GASTO'] ?>">
                <button class="btn btn-dark mr-3">Modificar Gasto Conserje</button>
                <a href="incluirGastos.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?> 