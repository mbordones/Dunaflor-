<
<?php  
    require 'funciones/conexion.php';
    require 'funciones/gastosGenerales.php';
    $gastos = listarGtosGen();
    include 'includes/header.html';
    include 'includes/nav.php'; 
 ?>
    <main class="container">
        <h1>Agregar Gastos Generales</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

          <form action="agregarGastosGeneral.php" method="post" enctype="multipart/form-data">
                     
          <div class="form-group">
                    <label for="GAGE_CD_GASTO">Codigo Gasto</label>
                    <input type="text" name="GAGE_CD_GASTO"
                           class="form-control" id="GAGE_CD_GASTO" required>
           </div>

           <div class="form-group">
                    <label for="GAGE_DESC_GASTO">Descripción Gasto General</label>
                    <input type="text" name="GAGE_DESC_GASTO"
                           class="form-control" id="GAGE_DESC_GASTO" required>
           </div>

                <button class="btn btn-dark mr-3">Agregar Gastos General</button>
                <a href="AdminGastos.php" class="btn btn-outline-secondary">
                    Volver a Home
                </a>

            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
