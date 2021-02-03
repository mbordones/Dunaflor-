<?php

    ######### CRUD de usuarios #########

    function listarUsuarios()
    {
        $link = conectar();
        $sql = "SELECT   USUARIO, 
                         ROL_USUARIO,
                         MAIL_USUARIO, 
                         MAIL_USUARIO_2, 
                         CLAVE,
                         EDIFICIO_U
                         FROM usuarios";
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error($link) );
        return $resultado;
    }

   
    function agregarUsuario()
    {
        $USUARIO         =   $_POST['USUARIO']; 
        $MAIL_USUARIO    =   $_POST['MAIL_USUARIO'];
        $MAIL_USUARIO_2  =   $_POST['MAIL_USUARIO_2'];
        $CLAVE           =   $_POST['CLAVE'];
        $DEPTO_U         =   $_POST['DEPTO_U'];
        $link = conectar();
        $sql = "INSERT INTO usuarios
                        ( USUARIO, 
                          ROL_USUARIO,
                          MAIL_USUARIO, 
                          MAIL_USUARIO_2, 
                          CLAVE,
                          EDIFICIO_U,
                          DEPTO_U)
                    VALUES 
                        ( '".$USUARIO."', 
                          1,
                          '".$MAIL_USUARIO."',
                          '".$MAIL_USUARIO_2."', 
                          '".$CLAVE."',
                          1,
                          UPPER('".$DEPTO_U."'))";
        $resultado = mysqli_query( $link, $sql)
                        or die( mysqli_error($link) );
        return $resultado;
    }


    function modificarUsuario()
    {
        $USUARIO        =    $_POST['USUARIO']; 
        $ROL_USUARIO     =   $_POST['ROL_USUARIO'];
        $MAIL_USUARIO    =   $_POST['MAIL_USUARIO'];
        $MAIL_USUARIO_2  =   $_POST['MAIL_USUARIO_2'];
        $CLAVE           =   $_POST['CLAVE'];
        $DEPTO_U         =   $_POST['DEPTO_U'];
       
      

        $link = conectar();
        $sql = "UPDATE  usuarios
                    SET  ROL_USUARIO       = '".$ROL_USUARIO."',
                         MAIL_USUARIO      = '".$MAIL_USUARIO."',
                         MAIL_USUARIO_2    = '".$MAIL_USUARIO_2."',
                         CLAVE             = '".$CLAVE."',
                         EDIFICIO_U          = 1,
                         DEPTO_U           = UPPER('".$DEPTO_U."')
                  WHERE USUARIO =".$USUARIO;  
          $resultado = mysqli_query( $link,$sql) or die( mysqli_error($link));
         return  $resultado;
    }
   
    function verUsuarioPorID()
    { 
        $USUARIO     =  $_GET['USUARIO'];
        $link        = conectar();
        $sql = "SELECT USUARIO,
                       ROL_USUARIO,
                       MAIL_USUARIO, 
                       MAIL_USUARIO_2, 
                       CLAVE,
                       DEPTO_U  
                 FROM usuarios
        WHERE USUARIO =".$USUARIO;  
       $resultado = mysqli_query($link,$sql)  or die(mysqli_error($link));
       $usuario = mysqli_fetch_assoc($resultado);
       return $usuario;
    }


    function eliminarUsuario()
    {
        $USUARIO   =   $_POST['USUARIO'];
        $link = conectar();
        $sql = "DELETE FROM usuarios
                 WHERE USUARIO =".$USUARIO; 
        $resultado = mysqli_query( $link, $sql )  or die( mysqli_error($link) );
        return $resultado;
    }
    ?>
