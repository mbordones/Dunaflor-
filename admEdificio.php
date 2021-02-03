<?php  
    require 'funciones/conexion.php';
    require 'funciones/edificio.php';
	include 'includes/header.html';
    include 'includes/nav.php'; 
 
    $SQL_READ = "SELECT CD_EDIFICIO,
    MT_FONDO_RESERVA,
    MT_FONDO_PRESTACIONES_SOC, 
    CTA_BANCO, 
    NM_BANCO,  
    RESP_BANCO, 
    CD_ID_RESPONSABLE
    FROM EDIFICIO
    WHERE CD_EDIFICIO = 1;";


/*
  
*/


?>

    <main class="container">
        <h1> Edificio</h1>

        <a href="menu.php" class="btn btn-outline-secondary mb-3">
            Volver a Home
        </a>

        <table class="table table-bordered table-stripped table-hover">
            <thead class="thead-dark">
            <tr>
                <th>Edificio</th>
                <th>Cedula</th>
                <th>Responsable</th>
                <th>Banco      </th>
                <th>Cuenta Banco      </th>
                <th>Fondo Reserva     </th>
                <th>Prestaciones Sociales </th>
                   
             
            </tr>
            </thead>
            <tbody>
<?php
        $link = conectar();       
        $resultado = mysqli_query($link,$SQL_READ) or die( mysqli_error($link));       
        while( $row = mysqli_fetch_assoc($resultado) ){
?>
            <tr>
                 
                <td><?= $row['CD_EDIFICIO'] ?></td>
                <td><?= $row['CD_ID_RESPONSABLE'] ?></td>
                <td><?= $row['RESP_BANCO'] ?></td>
                <td><?= $row['NM_BANCO'] ?></td>
                <td><?= $row['CTA_BANCO'] ?></td>
                <td><?= $row['MT_FONDO_RESERVA'] ?></td>
                <td><?= $row['MT_FONDO_PRESTACIONES_SOC'] ?></td>
                <td>
                <a href="formModificarEdificio.php?CD_EDIFICIO='<?php echo $row['CD_EDIFICIO'];?>'" class="btn btn-outline-secondary">
                        Modificar
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
