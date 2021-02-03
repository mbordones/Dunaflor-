<?php  
    require 'funciones/conexion.php';
	include 'includes/header.html';
    include 'includes/nav.php';  
    require 'funciones/edificio.php';
    $edificio = verEdificio();
?>

    <main class="container">
        <h1>Modificar Edificio</h1>

         <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">
       
            <form action="modificarEdificio.php" method="post">
                <div class="form-group">
                    <label for="CD_ID_RESPONSABLE">Cedula</label>
                    <input type="text" name="CD_ID_RESPONSABLE"
                     value="<?=  $edificio['CD_ID_RESPONSABLE']?>"
                     class="form-control" id="CD_ID_RESPONSABLE"  style="text-transform:uppercase">
                                   
                    <label for="RESP_BANCO">Responsable</label>      
                    <input type="text" name="RESP_BANCO"
                     value="<?=  $edificio['RESP_BANCO']?>"
                     class="form-control" id="RESP_BANCO"  style="text-transform:uppercase">

                     <label for="NM_BANCO">Banco</label>      
                     <input type="text" name="NM_BANCO"
                     value="<?=  $edificio['NM_BANCO']?>"
                     class="form-control" id="NM_BANCO"   style="text-transform:uppercase">

                     <label for="CTA_BANCO">Cuenta Banco</label>      
                     <input type="text" name="CTA_BANCO"
                     value="<?=  $edificio['CTA_BANCO']?>"
                     class="form-control" id="CTA_BANCO"   style="text-transform:uppercase">

                     <label for="MT_FONDO_RESERVA">Fondo Reserva</label>      
                     <input type="double" name="MT_FONDO_RESERVA"
                     value="<?=  $edificio['MT_FONDO_RESERVA']?>"
                     class="form-control" id="MT_FONDO_RESERVA">

                     <label for="MT_FONDO_PRESTACIONES_SOC">Prestaciones Sociales</label>      
                     <input type="double" name="MT_FONDO_PRESTACIONES_SOC"
                     value="<?=  $edificio['MT_FONDO_PRESTACIONES_SOC']?>"
                     class="form-control" id="MT_FONDO_PRESTACIONES_SOC">
                   

                </div>
                <input type="hidden" name="CD_EDIFICIO" value="'<?=  $edificio['CD_EDIFICIO']?>'">
                <button class="btn btn-dark mr-3">Modificar Edificio</button>
                <a href="admEdificio.php" class="btn btn-outline-secondary">
                    Volver a Edificio
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
