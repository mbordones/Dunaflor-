<?php  


/*     
 <a href="formModificarPagos.php?SA_DEPTO=<?php echo $row['SA_DEPTO'];?>;SA_ANO=<?php echo $row['SA_ANO'];?>" class="btn btn-outline-secondary">
*/
    require 'funciones/conexion.php';
    require 'funciones/apartamentos.php';
	include 'includes/header.html';
    include 'includes/nav.php'; 
    $yeare    =  ($_POST['year']);

    $SQL_READ = "SELECT
    SA_DEPTO,
    SA_ANO,
    SA_IND_ENERO,
    SA_IND_FEBRERO,
    SA_IND_MARZO,
    SA_IND_ABRIL,
    SA_IND_MAYO,
    SA_IND_JUNIO,
    SA_IND_JULIO,
    SA_IND_AGOSTO,
    SA_IND_SEPTIEMBRE,
    SA_IND_OCTUBRE,
    SA_IND_NOVIEMBRE,
    SA_IND_DICIEMBRE
    from SALDO_PROPIETARIOS
    WHERE SA_CD_EDIFICIO = 1 AND
    SA_NU_TORRE    = 1 AND
    SA_ANO = $yeare;";
 
?>

    <main class="container">

    <center>
        <h1>         Pagado  <?php     echo '               ',$yeare  ?>       </h1> 
        
     </center>
        

        <a href="menu.php" class="btn btn-outline-secondary mb-4">
            Volver a Home
        </a>

        <table class="table table-bordered table-stripped table-hover">
            <thead class="thead-dark">
            <tr>
                <th>Apartamento</th>
                <th>Ene</th>
                <th>Feb</th>
                <th>Mar</th>
                <th>Abr</th>
                <th>May</th>
                <th>Jun</th>
                <th>Jul</th>
                <th>Ago</th>
                <th>Sep</th>
                <th>Oct</th>
                <th>Nov</th>
                <th>Dec</th>
              
            </tr>
            </thead>
            <tbody>
<?php
        $link = conectar();       
        $resultado = mysqli_query($link,$SQL_READ) or die( mysqli_error($link));       
        while( $row = mysqli_fetch_assoc($resultado) ){
?>
            <tr>
            <td><?= $row['SA_DEPTO']?></td>
            <td><?= $row['SA_IND_ENERO']?></td>
            <td><?= $row['SA_IND_FEBRERO']?></td>
            <td><?= $row['SA_IND_MARZO']?></td>
            <td><?= $row['SA_IND_ABRIL']?></td>
            <td><?= $row['SA_IND_MAYO']?></td>
            <td><?= $row['SA_IND_JUNIO']?></td>
            <td><?= $row['SA_IND_JULIO']?></td>
            <td><?= $row['SA_IND_AGOSTO']?></td>
            <td><?= $row['SA_IND_SEPTIEMBRE']?></td>
            <td><?= $row['SA_IND_OCTUBRE']?></td>
            <td><?= $row['SA_IND_NOVIEMBRE']?></td>
            <td><?= $row['SA_IND_DICIEMBRE']?></td>
            <td>
               <a href="formModificarPagos.php?SA_DEPTO=<?php echo $row['SA_DEPTO']?>" class="btn btn-outline-secondary">
                    Actualizar
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
