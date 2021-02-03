<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<?php  

include "conectar.php";
include 'includes/header.html';
include 'includes/nav.php';  

$SQL_READ = "select USUARIO,ROL_USUARIO,MAIL_USUARIO,MAIL_USUARIO_2,CLAVE,DEPTO_U        
           from usuarios where usuario <> 'MASTER'";
?>

<body>
       <title>       USUARIOS </title>
    <table class="table table-bordered table-stripped table-hover">
            <thead class="thead-dark">
            <tr>
                <th>Usuario</th>
                <th>Rol Usuario</th>
                <th>Mail       </th>
                <th>Mail 2       </th>
                <th>Clave       </th>
                <th>Apartamento      </th>
                 <th colspan="2">
                    <a href="formAgregarUsuarios.php" class="btn btn-dark">
                        Agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>

          <?php  
          $resultado = mysqli_query($connec,$SQL_READ);
          while($usuario = mysqli_fetch_array($resultado))
         { ?>
              
                <tr text-align: center;>
                  <td>  <?= $usuario['USUARIO'] ?> </td>    
                  <td>  <?= $usuario['ROL_USUARIO'] ?> </td>    
                  <td>  <?= $usuario['MAIL_USUARIO'] ?> </td> 
                  <td>  <?= $usuario['MAIL_USUARIO_2'] ?> </td> 
                  <td>  <?= $usuario['CLAVE'] ?> </td> 
                  <td>  <?= $usuario['DEPTO_U'] ?> </td> 
                  <td>
              
                    <a href="formModificarUsuarios.php?USUARIO='<?php echo $usuario['USUARIO'];?>'" class="btn btn-outline-secondary">
                        Modificar
                    </a>
                </td>
                <td>
                    <a href="formEliminarUsuarios.php?USUARIO='<?php echo $usuario['USUARIO'];?>'" class="btn btn-outline-secondary">
                        Eliminar
                    </a>
                </td>
               
              </tr>
           
         <?php  } ?>
    <h3>
  </table> 
   
  
</body>
</html>
<?php  include 'includes/footer.php';  ?>