<
<?php  
    require 'funciones/conexion.php';
    require 'funciones/gastosConserje.php';
    $gastos = listarConserje();
    include 'includes/header.html';
    include 'includes/nav.php'; 
 ?>
    <main class="container">
        <h1>Agregar Gastos Conserje</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

          <form action="agregarGastosConserje.php" method="post" enctype="multipart/form-data">
                     
          <div class="form-group">
                    <label for="GCON_CD_GASTO">Codigo Gasto</label>
                    <input type="text" name="GCON_CD_GASTO"
                           class="form-control" id="GCON_CD_GASTO" required>
           </div>

           <div class="form-group">
                    <label for="GCON_DESC_GASTO">Descripción Gasto</label>
                    <input type="text" name="GCON_DESC_GASTO"
                           class="form-control" id="GCON_CD_GASTO" required>
           </div>

                <button class="btn btn-dark mr-3">Agregar Gastos Conserje</button>
                <a href="AdminGastos.php" class="btn btn-outline-secondary">
                    Volver a Home
                </a>

            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
