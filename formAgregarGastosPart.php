<
<?php  
    require 'funciones/conexion.php';
    require 'funciones/gastosPart.php';
    $gastos = listarGtosPart();
    include 'includes/header.html';
    include 'includes/nav.php'; 
 ?>
    <main class="container">
        <h1>Agregar Gastos Particulares</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

          <form action="agregarGastosPart.php" method="post" enctype="multipart/form-data">
                     
          <div class="form-group">
                    <label for="GPAR_CD_GASTO">Codigo Gasto</label>
                    <input type="text" name="GPAR_CD_GASTO"
                           class="form-control" id="GPAR_CD_GASTO" required>
           </div>

           <div class="form-group">
                    <label for="GPAR_DESC_GASTO">Descripción Gasto Particulares</label>
                    <input type="text" name="GPAR_DESC_GASTO"
                           class="form-control" id="GPAR_DESC_GASTO" required>
           </div>

                <button class="btn btn-dark mr-3">Agregar Usuario</button>
                <a href="AdminGastos.php" class="btn btn-outline-secondary">
                    Volver a Home
                </a>

            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
