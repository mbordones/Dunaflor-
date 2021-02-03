<?php  
    include 'includes/config/config.php'; 
    require 'funciones/autenticacion.php';
   /* autenticar();*/
	include 'includes/header.html';
	/*include 'includes/nav.php';  */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>Condominio Dunaflor</title>
        <meta name="Description" content="Descargar: Menú Css Limpio simple y adaptable a cualquier proyecto" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

    <div class=logo1>
		<center>
        <figure>
            <img src="imagenes/LogoDunaF.png" >
		</figure>
       </center>
     </div>

   </header>
    <body>
<ul id="nav">
	<li class="current"><a href="#">Home</a></li>
	<li><a href="#">Gastos</a>
		<ul>
			<li><a href="#">Mant. Gastos</a>
				<ul>
					<li><a href="adminGastos.php">Declarar Gastos</a></li>
					<li><a href="generarGastos.php">Incluir Gasto Mensuales</a></li>
			    </ul>
			</li>
		</ul>
	</li>
	<li><a href="#">Propietarios</a>
		<ul>
			<li><a href="admDeptos.php">Departamentos</a></li>
				<ul>
					<li><a href="#">Sub-Level Item</a></li>
					<li><a href="#">Sub-Level Item</a>
						<ul>
							<li><a href="#">Sub-Level Item</a></li>
							<li><a href="#">Sub-Level Item</a></li>
							<li><a href="#">Sub-Level Item</a></li>
						</ul>
					</li>
					
					<li><a href="#">Sub-Level Item</a></li>
				</ul>
			</li>
			
		</ul>
	</li>	
    <li><a href="pagoMes.php">Administraciòn</a>
	   <ul>
			<li><a href="generarMovi.php">Procesar Recibos</a></li>
			<li><a href="pagoMes.php">Marcar Pagado</a></li>
			<li><a href="generarSaldos.php">Actualizar Saldos</a></li>
	   </ul>
	</li>
	<li><a href="admEdificio.php">Edificio</a></li>
    <li><a href="admUsuarios.php">Usuarios</a></li>
	<li><a href="formLoginDuna.php">Salir</a></li>
</ul>


</body>

<?php  include 'includes/footer.php';  ?>
</html>