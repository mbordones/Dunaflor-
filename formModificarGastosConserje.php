<?php  
    require 'funciones/conexion.php';
    require 'funciones/gastosConserje.php';
    $gasto = verConserjePorID();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de Gastos Conserje</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

            <form action="modificarGastosConserje.php" method="post">
                <div class="form-group">
                    <label for="GCON_DESC_GASTO">Descripcion Gasto</label>
                    <input type="text" name="GCON_DESC_GASTO"
                           value="<?= $gasto['GCON_DESC_GASTO'] ?>"
                           class="form-control" id="GCON_DESC_GASTO" required>
                </div>
                <input type="hidden" name="GCON_CD_GASTO" value="<?= $gasto['GCON_CD_GASTO'] ?>">
                <button class="btn btn-dark mr-3">Modificar Gasto Conserje</button>
                <a href="adminGastos.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?> 