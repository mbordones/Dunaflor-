<?php  

    require 'funciones/conexion.php';
    require 'funciones/apartamentos.php';
	include 'includes/header.html';
    include 'includes/nav.php'; 

    $SQL_READ = "SELECT CD_DEPARTAMENTO_D,NOMBRE_PROPIETARIO_D,ALICUOTA_D FROM DEPARTAMENTO ORDER BY CD_DEPARTAMENTO_D";
?>

    <main class="container">
        <h1> Apartamentos</h1>

        <a href="menu.php" class="btn btn-outline-secondary mb-3">
            Volver a Home
        </a>

        <table class="table table-bordered table-stripped table-hover">
            <thead class="thead-dark">
            <tr>
                <th>Apartamento</th>
                <th>Propietario</th>
                <th>Alicuota      </th>
                <th colspan="2">
                    <a href="formAgregarDepto.php" class="btn btn-dark">
                        Agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
<?php
        $link = conectar();       
        $resultado = mysqli_query($link,$SQL_READ) or die( mysqli_error($link));       
        while( $row = mysqli_fetch_assoc($resultado) ){
?>
            <tr>
                <td><?= $row['CD_DEPARTAMENTO_D'] ?></td>
                <td><?= $row['NOMBRE_PROPIETARIO_D'] ?></td>
                <td><?= $row['ALICUOTA_D'] ?></td>
                
               
                <td>
                   <a href="formModificarDeptos.php?CD_DEPARTAMENTO_D= '<?php echo $row['CD_DEPARTAMENTO_D'];?>'" class="btn btn-outline-secondary">
                      Modificar
                    </a>
                </td>
                <td>
                <a href="formEliminarDeptos.php?CD_DEPARTAMENTO_D= '<?php echo $row['CD_DEPARTAMENTO_D'];?>'" class="btn btn-outline-secondary">
       
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
