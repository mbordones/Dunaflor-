<?php  
    require 'funciones/conexion.php';
    require 'funciones/gastosGeneralesMen.php';
    $gastogen =  listarGeneralMenSolo();
    include 'includes/header.html';
    include 'includes/nav.php'; 
    
  ?>
    <main class="container">
        <h1>Agregar Gastos Generales Mensual</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

    
          <form action="agregarGastosGeneralesMen.php" method="post" enctype="multipart/form-data">
         
           <div class="form-group">
           <select class="form-control" name="GAGE_CD_GASTO" id="GAGE_CD_GASTO" required>
                        <option value="">Seleccione codigo</option>
<?php
                while( $general = mysqli_fetch_assoc($gastogen) ){
?>
                <option value="<?= $general['GAGE_CD_GASTO'] ?>"><?= $general['GAGE_CD_GASTO'].' '.$general['GAGE_DESC_GASTO'] ?></option>
<?php
                }
                
?>
               </select>
            </div>

           <div class="form-group">
                    <label for="GAGM_MT_GASTO">Monto del Gasto</label>
                    <input type="number" name="GAGM_MT_GASTO"  step='0.01'
                           class="form-control" id="GAGM_MT_GASTO" required>
           </div>

           <div class="form-group">
                    <label for="GAGM_FE_GASTO">Fecha del Gasto</label>
                    <input type="date" name="GAGM_FE_GASTO"
                           class="form-control" id="GAGM_FE_GASTO" required>
           </div>

                        
               <button class="btn btn-dark mr-3">Agregar Gastos Conserje Mensual</button>
               

            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>

