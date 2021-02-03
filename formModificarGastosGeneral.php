<?php  
    require 'funciones/conexion.php';
    require 'funciones/gastosGenerales.php';
    $gasto = verGastosGenPorID();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de Gastos General</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

            <form action="modificarGastosGeneral.php" method="post">
                <div class="form-group">
                    <label for="GAGE_DESC_GASTO">Descripcion Gasto</label>
                    <input type="text" name="GAGE_DESC_GASTO"
                           value="<?= $gasto['GAGE_DESC_GASTO'] ?>"
                           class="form-control" id="GAGE_DESC_GASTO" required>
                </div>
                <input type="hidden" name="GAGE_CD_GASTO" value="<?= $gasto['GAGE_CD_GASTO'] ?>">
                <button class="btn btn-dark mr-3">Modificar Gasto General</button>
                <a href="adminGastos.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?> 



 
