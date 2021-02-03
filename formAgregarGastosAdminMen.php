<?php  
    require 'funciones/conexion.php';
    require 'funciones/gastosAdmMen.php';
    $gastoadm =  listarAdminMenSolo();
    include 'includes/header.html';
    include 'includes/nav.php'; 
    
  ?>
    <main class="container">
        <h1>Agregar Gastos Administrativo Mensual</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

    
          <form action="agregarGastosAdminMen.php" method="post" enctype="multipart/form-data">
         
           <div class="form-group">
           <select class="form-control" name="GAMI_CD_GASTO" id="GAMI_CD_GASTO" required>
                        <option value="">Seleccione codigo</option>
<?php
                while( $admin = mysqli_fetch_assoc($gastoadm) ){
?>
                <option value="<?= $admin['GAMI_CD_GASTO'] ?>"><?= $admin['GAMI_CD_GASTO'].' '.$admin['GAMI_DESC_GASTO'] ?></option>
<?php
                }
                
?>
               </select>
            </div>

           <div class="form-group">
                    <label for="GADM_MT_GASTO">Monto del Gasto</label>
                    <input type="number" name="GADM_MT_GASTO"   step='0.01'
                           class="form-control" id="GADM_MT_GASTO" required>
           </div>

           <div class="form-group">
                    <label for="GADM_FE_GASTO">Fecha del Gasto</label>
                    <input type="date" name="GADM_FE_GASTO"
                           class="form-control" id="GADM_FE_GASTO" required>
           </div>

                        
               <button class="btn btn-dark mr-3">Agregar Gastos Administrativo Mensual</button>
                
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>

