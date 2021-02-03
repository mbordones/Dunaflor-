<
<?php  
    require 'funciones/conexion.php';
    require 'funciones/gastosAdmin.php';
    $gastos = listarGtosAdm();
    include 'includes/header.html';
    include 'includes/nav.php'; 
 ?>
    <main class="container">
        <h1>Agregar Gastos Administrativos</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

          <form action="agregarGastosAdmin.php" method="post" enctype="multipart/form-data">
                     
          <div class="form-group">
                    <label for="GAMI_CD_GASTO">Codigo Gasto</label>
                    <input type="text" name="GAMI_CD_GASTO"
                           class="form-control" id="GAMI_CD_GASTO" required>
           </div>

           <div class="form-group">
                    <label for="GAMI_DESC_GASTO">Descripción Gasto Administrativo</label>
                    <input type="text" name="GAMI_DESC_GASTO"
                           class="form-control" id="GAMI_DESC_GASTO" required>
           </div>

                <button class="btn btn-dark mr-3">Agregar Gastos Administrativo</button>
                <a href="AdminGastos.php" class="btn btn-outline-secondary">
                    Volver a Home
                </a>

            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
