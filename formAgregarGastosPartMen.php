<
<?php  
    require 'funciones/conexion.php';
    require 'funciones/gastosParticularesMen.php';
    $gastos = listarPartMenSolo();
    include 'includes/header.html';
    include 'includes/nav.php'; 
   
 ?>
    <main class="container">
        <h1>Agregar Gastos Particular Mensual</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

          <form action="agregarGastosPartMen.php" method="post" enctype="multipart/form-data">
                     
            <div class="form-group">
               <label for="GPAR_CD_GASTO">Codigo</label>
                <select class="form-control" name="GPAR_CD_GASTO" id="GPAR_CD_GASTO" required>
                        <option value="">Seleccione Codigo</option>
<?php
                while($gastosm = mysqli_fetch_assoc($gastos) ){
 ?>
    
                 <option value="<?= $gastosm['GPAR_CD_GASTO'] ?>"><?= $gastosm['GPAR_CD_GASTO'].' '.$gastosm['GPAR_DESC_GASTO'] ?></option>
                
                 
<?php
                }
?>
                 </select>
                </div>

                <div class="form-group" uppercase>
                    <label for="GPAM_CD_DEPTO">Apartamento</label>
                    <input type="text" name="GPAM_CD_DEPTO"
                           class="form-control" id="GPAM_CD_DEPTO" required style="text-transform:uppercase"  >
                </div>

                <div class="form-group">
                    <label for="GPAM_MT_GASTO">Mto. Gasto</label>
                    <input type="number" name="GPAM_MT_GASTO"   step='0.01'
                           class="form-control" id="GPAM_MT_GASTO" required>
                </div>

                <div class="form-group">
                    <label for="GPAM_FE_GASTO">Fecha Gasto</label>
                    <input type="date" name="GPAM_FE_GASTO"
                           class="form-control" id="GPAM_FE_GASTO" required>
                </div>
                
                <button class="btn btn-dark mr-3">Agregar Gastos Particulares Mensual </button>
               

            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
