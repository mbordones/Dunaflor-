<?php  
    include 'includes/config/config.php'; 
    include 'includes/header.html';
    require 'funciones/autenticacion.php';
?>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="duna.css"> 
      
    <title> Res. DunaFlor</title>

    <center>
    <img src="imagenes/LogoDunaF.png">
  
      </center>

</head>
<body>

<div class=logo1>
<header>
       
</header>
     </div>

    <main class="container">
   
        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

            <form action="login.php" method="post">
                Usuario:
                <input type="text" name="usuario" class="form-control" autocomplete="off">
                <br>
                Contraseña:
                <input type="password" name="clave" class="form-control" autocomplete="off">
                <br>
                <button class="btn btn-dark btn-block">Ingresar</button>
                <center>
   
    
      </center>

           </form>

        </div>

        <?php
          if(isset( $_GET['error'] ) ){
              if($_GET['error'] == 1)
              {
                $msj = 'Nombre de usuario y/o incorrecto';
              } else if ($_GET['error'] == 2)
                  {
                    $msj = 'Debe Loguearse para ingresar';
                  }
?>
              <script>
                  Swal.fire(
                      'Advertencia',
                      '<?= $msj; ?>',
                      'Nombre de usuario y/o clave incorrectos',
                      'error')
              </script>
<?php
          }
?> 

    </main>

<?php  include 'includes/footer.php';  ?> 
</body>