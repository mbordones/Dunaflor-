<?php  
    require 'funciones/conexion.php';
    require 'funciones/gastosConserjeMen.php';
    $gasto = listarConserjeMenSolo();
    include 'includes/header.html';
    include 'includes/nav.php'; 

    
 ?>

    <main class="container">
        <h1>Agregar Gastos Conserje Mensual</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

    
          <form action="agregarGastosConserjeMen.php" method="post" enctype="multipart/form-data">
         
           <div class="form-group">
           <select class="form-control" name="GCON_CD_GASTO" id="GCON_CD_GASTO" required>
                        <option value="">Seleccione codigo</option>
<?php
                while( $gconserje = mysqli_fetch_assoc($gasto) ){
?>
                <option value="<?= $gconserje['GCON_CD_GASTO'] ?>"><?= $gconserje['GCON_CD_GASTO'].' '.$gconserje['GCON_DESC_GASTO'] ?></option>
<?php
                }
                
?>
               </select>
     
                           
           <div class="form-group">
                    <label for="GACM_MT_GASTO">Monto del Gasto</label>
                    <input type="number" name="GACM_MT_GASTO"   step='0.01'
                           class="form-control" id="GACM_MT_GASTO" required>
           </div>

           <div class="form-group">
                    <label for="GACM_FE_GASTO">Fecha del Gasto</label>
                    <input type="date" name="GACM_FE_GASTO"
                           class="form-control" id="GACM_FE_GASTO"   required>
            </div>

                        
               <button class="btn btn-dark mr-3">Agregar Gastos Conserje</button>
            
                

            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>

