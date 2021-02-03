<
<?php  
	
	include 'includes/header.html';
    include 'includes/nav.php';  
 ?>

    <main class="container">
        <h1>Alta de Apartamento</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

            <form action="agregarDeptos.php" method="post">
               
               
                <div class="form-group">
                    <label for="CD_DEPARTAMENTO_D">Apartamento</label>
                    <input type="text" name="CD_DEPARTAMENTO_D"
                           class="form-control" id="CD_DEPARTAMENTO_D" required style="text-transform:uppercase">
                </div>

                <div class="form-group">
                    <label for="NOMBRE_PROPIETARIO_D">Propietario</label>
                    <input type="text" name="NOMBRE_PROPIETARIO_D"
                           class="form-control" id="NOMBRE_PROPIETARIO_D" required style="text-transform:uppercase">
                </div>

                <div class="form-group">
                    <label for="ALICUOTA_D">Alicuota</label>
                    <input type="text" name="ALICUOTA_D"
                           class="form-control" id="ALICUOTA_D" required>
                </div>


                <button class="btn btn-dark mr-3">Agregar Apartamentos</button>
                <a href="admDeptos.php" class="btn btn-outline-secondary">
                    Volver a Home
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
