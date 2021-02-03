<?php  
    require 'funciones/conexion.php';
	include 'includes/header.html';
    include 'includes/nav.php';  
    require 'funciones/apartamentos.php';
    $deptp = verDeptosPorID();
?>

    <main class="container">
        <h1>Modificar Apartamentos</h1>

         <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">
       
            <form action="modificarDeptos.php" method="post">
                <div class="form-group">
                    <label for="NOMBRE_PROPIETARIO_D">Propietario</label>
                    <input type="text" name="NOMBRE_PROPIETARIO_D"
                        value="<?=  $deptp['NOMBRE_PROPIETARIO_D']?>"
                           class="form-control" id="NOMBRE_PROPIETARIO_D" required style="text-transform:uppercase">
               
                    
                    <label for="ALICUOTA_D">Alicuota</label>      
                    <input type="text" name="ALICUOTA_D"
                        value="<?=  $deptp['ALICUOTA_D']?>"
                           class="form-control" id="ALICUOTA_D" required>

                </div>
                <input type="hidden" name="CD_DEPARTAMENTO_D" value="'<?=  $deptp['CD_DEPARTAMENTO_D']?>'">
                <button class="btn btn-dark mr-3">Modificar Apartamento</button>
                <a href="admDeptos.php" class="btn btn-outline-secondary">
                    Volver a Apartamentos
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
