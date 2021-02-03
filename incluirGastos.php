<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gastos Mensuales</title>
</head>

<?php  
  
    require 'funciones/conexion.php';
    include 'includes/header.html';
    include 'includes/nav.php';  
    include 'funciones/gastosConserjeMen.php';
    $gtosConserjeMen = listarConserjeMen();
    include 'funciones/gastosGeneralesMen.php';
    $gtosGeneralesMen = listarGtosGenMen();
    include 'funciones/gastosAdmMen.php';
    $gtosAdmMen = listarGtosAdmMen();
    include 'funciones/gastosParticularesMen.php';
    $gtosParticularesMen = listarGtosParMen();

?>

  
    <main class="container">
       

        <a href="menu.php" class="btn btn-outline-secondary mb-3">
            Volver a Home
        </a>
      
     
      
        <h1>               Gastos Conserje Mensual </h1>
        
        <table class="table table-bordered table-stripped table-hover">
            <thead class="thead-dark">
            <tr>
                <th>Cod. Gasto</th>
                <th>Descripción de Gasto</th>
                <th>Monto de Gasto</th>
                <th>Fecha de Gasto</th>
                 <th colspan="2">
                    <a href="formAgregarGastosConserjeMen.php" class="btn btn-dark">
                        Agregar
                    </a>
                </th>
               
            </tr>
            </thead>
            <tbody>
<?php
        while( $conserje = mysqli_fetch_assoc($gtosConserjeMen) ){
?>
            <tr>
                <td><?= $conserje['GACM_CD_GASTO'] ?></td>
                <td><?= $conserje['GCON_DESC_GASTO'] ?></td>
                <td><?= $conserje['GACM_MT_GASTO'] ?></td>
                <td><?= $conserje['GACM_FE_GASTO'] ?></td>
               
                <td>
               
                    <a href="formEliminarGastosConserjeMen.php?GACM_CD_GASTO=<?php echo  $conserje['GACM_CD_GASTO'];?>&GACM_FE_GASTO=<?php echo  $conserje['GACM_FE_GASTO'];?>" class="btn btn-outline-secondary">
                        Eliminar
                    </a>
                </td>
            </tr>
<?php
        }
?>
            </tbody>
        </table>

        

    </main>

    <main class="container">
        <h1>                    Gastos Generales Mensual</h1>

          <table class="table table-bordered table-stripped table-hover">
            <thead class="thead-dark">
            <tr>
                <th>Cod. Gasto</th>
                <th>Descripción de Gasto</th>
                <th>Monto de Gasto</th>
                <th>Fecha de Gasto</th>
                 <th colspan="2">
                    <a href="formAgregarGastosGeneralesMen.php" class="btn btn-dark">
                        Agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
<?php
        while( $generales = mysqli_fetch_assoc($gtosGeneralesMen) ){
?>
            <tr>
                <td><?= $generales['GAGM_CD_GASTO'] ?></td>
                <td><?= $generales['GAGE_DESC_GASTO'] ?></td>
                <td><?= $generales['GAGM_MT_GASTO'] ?></td>
                <td><?= $generales['GAGM_FE_GASTO'] ?></td>
                
                <td>
                    <a href="formEliminarGastosGeneralesMen.php?GAGM_CD_GASTO=<?php echo $generales['GAGM_CD_GASTO'];?>&GAGM_FE_GASTO=<?php echo  $generales['GAGM_FE_GASTO'];?>" class="btn btn-outline-secondary">
                        Eliminar
                    </a>
                </td>
            </tr>
<?php
        }
?>
            </tbody>
        </table>

        </main>

<main class="container">
    <h1>                    Gastos Administrativos Mensual</h1>

      <table class="table table-bordered table-stripped table-hover">
        <thead class="thead-dark">
        <tr>
            <th>Cod. Gasto</th>
            <th>Descripción de Gasto</th>
            <th>Monto de Gasto</th>
            <th>Fecha de Gasto</th>
             <th colspan="2">
                <a href="formAgregarGastosAdminMen.php" class="btn btn-dark">
                    Agregar
                </a>
            </th>
           </tr>
        </thead>
        <tbody>
<?php
    while($adm = mysqli_fetch_assoc($gtosAdmMen) ){
?>
        <tr>
            <td><?= $adm['GADM_CD_GASTO'] ?></td>
            <td><?= $adm['GAMI_DESC_GASTO'] ?></td>
            <td><?= $adm['GADM_MT_GASTO'] ?></td>
            <td><?= $adm['GADM_FE_GASTO'] ?></td>
            
            <td>
                <a href="formEliminarGastosAdminMen.php?GADM_CD_GASTO=<?php echo $adm['GADM_CD_GASTO'];?>&GADM_FE_GASTO=<?php echo  $adm['GADM_FE_GASTO'];?>" class="btn btn-outline-secondary">
                    Eliminar
                </a>
            </td>
        </tr>
<?php
    }
?>
        </tbody>
    </table>


    <main class="container">
    <h1>                    Gastos Particulares Mensual</h1>

      <table class="table table-bordered table-stripped table-hover">
        <thead class="thead-dark">
        <tr>
            <th>Cod. Gasto</th>
            <th>Descripción de Gasto</th>
            <th>Apartamento</th>
            <th>Monto de Gasto</th>
            <th>Fecha de Gasto</th>
             <th colspan="2">
                <a href="formAgregarGastosPartMen.php" class="btn btn-dark">
                    Agregar
                </a>
            </th>
        </tr>
        </thead>
        <tbody>
<?php
    while( $par = mysqli_fetch_assoc($gtosParticularesMen) ){
?>
        <tr>
            <td><?= $par['GPAM_CD_GASTO'] ?></td>
            <td><?= $par['GPAR_DESC_GASTO'] ?></td>
            <td><?= $par['GPAM_CD_DEPTO'] ?></td>
            <td><?= $par['GPAM_MT_GASTO'] ?></td>
            <td><?= $par['GPAM_FE_GASTO'] ?></td>
                    
            <td>
                <a href="formEliminarGastosPartMen.php?GPAM_CD_GASTO=<?php echo $par['GPAM_CD_GASTO'];?>&GPAM_FE_GASTO=<?php echo  $par['GPAM_FE_GASTO'];?>&GPAM_CD_DEPTO=<?php echo  $par['GPAM_CD_DEPTO'];?>" class="btn btn-outline-secondary">
                    Eliminar
                </a>
            </td>
        </tr>
<?php
    }
?>
        </tbody>
    </table>
        <a href="menu.php" class="btn btn-outline-secondary">
            Volver a Home
        </a>

    </main>


<?php  include 'includes/footer.php';  ?>
</html>