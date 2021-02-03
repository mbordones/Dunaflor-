<?php

function login()
{

    $usuario      = $_POST['usuario']; 
    $password     = $_POST['clave']; 
    $link = conectar();
    $sql =  "SELECT * FROM USUARIOS WHERE USUARIO = '".$usuario."' AND CLAVE = '".$password."'";
    $resultado = mysqli_query( $link, $sql )  or die( mysqli_error($link) );
     
        //cantidad de coincidencias
    $cantidad = mysqli_num_rows($resultado);

   
   if( $cantidad == 0 )
   {
    //redirección a formLogin
    header('location: formLoginDuna.php?error=1');
        
    }
else
{
    ### AUTENTICACION

  
    //redirección a admin
    $_SESSION['login'] = 1;
    $usuario = mysqli_fetch_assoc($resultado);
    $_SESSION['USUARIO'] = $usuario['USUARIO'];
    $_SESSION['CLAVE'] = $usuario['CLAVE'];
    $user =   $usuario['USUARIO'];

    if($usuario['ROL_USUARIO'] == 0)
    {
       header("Location: menu.php");
    } 
   else 
    {
       header("Location: SeleFecha.php?usuario=$user");
    }
    //redirección a admin
 
 }

}
function logout()
{
    //session_unset();
    session_destroy();
    header('refresh:3;url=index.php');
}

/**
* Función para chequear token de sesión
 */
function autenticar()
{
    if( !isset($_SESSION['login']) ){
        header('location: formLoginDuna.php?error=2');
    }
}

?>