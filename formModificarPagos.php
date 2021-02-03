<?php  
    require 'funciones/conexion.php';
	include 'includes/header.html';
    include 'includes/nav.php';  
    require 'funciones/apartamentos.php';

   $dept = verPagoPorID();


?>



    <main class="container">
        <h1>Actualizar Pago</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">
       
          <form action="actualizarPagos.php" method="post">
            <div class="form-group">

                <label for="CD_DEPARTAMENTO_D">Apartamento</label> 
                <input type="text" name="CD_DEPARTAMENTO_D"
                 value= "<?= $dept['CD_DEPARTAMENTO_D']?>"
                 class="form-control" id="CD_DEPARTAMENTO_D"  readonly="readonly">  
                   

                 <label for="NOMBRE_PROPIETARIO_D">Propietario</label>
                 <input type="text" name="NOMBRE_PROPIETARIO_D"
                  value="<?= $dept['NOMBRE_PROPIETARIO_D']?>" 
                  class="form-control" id="NOMBRE_PROPIETARIO_D"  readonly="readonly"> 
               
                  <label for="SA_IND_ENERO">Enero</label>
                  <input type="text" name="SA_IND_ENERO"  
                   value="<?= $dept['SA_IND_ENERO']?>"
                   class="form-control" id="SA_IND_ENERO" maxlength="1"  autocomplete="off"   style="text-transform:uppercase" >  
                 
                 <script>
                    if($dept['SA_IND_ENERO'] != 'S')   
                     {
                      alert("El valor deber ser S ò vacío"); 
                      document.getElementById("$dept['SA_IND_ENERO']").focus();
                     return false;
                      }
                   </script>
                

                     <label for="SA_IND_FEBRERO">Febrero</label>
                     <input type="text" name="SA_IND_FEBRERO"
                     value="<?= $dept['SA_IND_FEBRERO']?>"
                     class="form-control" id="SA_IND_FEBRERO"  maxlength="1" autocomplete="off" style="text-transform:uppercase">  
                 
                      <label for="SA_IND_MARZO">Marzo</label>
                      <input type="text" name="SA_IND_MARZO"
                      value="<?= $dept['SA_IND_MARZO']?>"
                      class="form-control" id="SA_IND_MARZO"  maxlength="1" autocomplete="off" style="text-transform:uppercase">

                      <label for="SA_IND_ABRIL">Abril</label>
                      <input type="text" name="SA_IND_ABRIL"
                      value="<?= $dept['SA_IND_ABRIL']?>"
                      class="form-control" id="SA_IND_ABRIL"  maxlength="1" autocomplete="off" style="text-transform:uppercase">

                      <label for="SA_IND_MAYO">Mayo</label>
                      <input type="text" name="SA_IND_MAYO"
                      value="<?= $dept['SA_IND_MAYO']?>"
                      class="form-control" id="SA_IND_MAYO" maxlength="1" autocomplete="off" style="text-transform:uppercase">

                      <label for="SA_IND_JUNIO">Junio</label>
                      <input type="text" name="SA_IND_JUNIO"
                      value="<?= $dept['SA_IND_JUNIO']?>"
                      class="form-control" id="SA_IND_JUNIO" maxlength="1" autocomplete="off"  style="text-transform:uppercase">

                      <label for="SA_IND_JULIO">Julio</label>
                      <input type="text" name="SA_IND_JULIO"
                      value="<?= $dept['SA_IND_JULIO']?>"
                      class="form-control" id="SA_IND_JULIO" maxlength="1"  autocomplete="off" style="text-transform:uppercase">

                      <label for="SA_IND_AGOSTO">Agosto</label>
                      <input type="text" name="SA_IND_AGOSTO"
                      value="<?=$dept['SA_IND_AGOSTO']?>"
                      class="form-control" id="SA_IND_AGOSTO" maxlength="1"  autocomplete="off" style="text-transform:uppercase">

                      <label for="SA_IND_SEPTIEMBRE">Septiembre</label>
                      <input type="text" name="SA_IND_SEPTIEMBRE"
                      value="<?= $dept['SA_IND_SEPTIEMBRE']?>"
                      class="form-control" id="SA_IND_SEPTIEMBRE" maxlength="1"  autocomplete="off" style="text-transform:uppercase">

                      <label for="SA_IND_OCTUBRE">Octubre</label>
                      <input type="text" name="SA_IND_OCTUBRE"
                      value="<?= $dept['SA_IND_OCTUBRE']?>"
                      class="form-control" id="SA_IND_OCTUBRE" maxlength="1" autocomplete="off" style="text-transform:uppercase">

                      <label for="SA_IND_NOVIEMBRE">Noviembre</label>
                      <input type="text" name="SA_IND_NOVIEMBRE"
                      value="<?= $dept['SA_IND_NOVIEMBRE']?>"
                      class="form-control" id="SA_IND_NOVIEMBRE" maxlength="1" autocomplete="off" style="text-transform:uppercase">
                    
                      <label for="SA_IND_DICIEMBRE">Diciembre</label>
                      <input type="text" name="SA_IND_DICIEMBRE"
                      value="<?= $dept['SA_IND_DICIEMBRE']?>"
                      class="form-control" id="SA_IND_DICIEMBRE" maxlength="1" autocomplete="off" style="text-transform:uppercase">
                      
             </div>

                 <input type="hidden" name="CD_DEPARTAMENTO_D" value="'<?= $dept['CD_DEPARTAMENTO_D']?>'">
                <button class="btn btn-dark mr-3">Actualizar Pago</button>
                <a href="pagoMes.php" class="btn btn-outline-secondary">
                    Volver a Pagos
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
