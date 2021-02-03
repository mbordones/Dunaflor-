<?php

   /* ########################
    #### CRUD DE marcas ####*/


    function agregarDeptos()
    {
        $CD_DEPARTAMENTO_D       = $_POST['CD_DEPARTAMENTO_D'];
        $NOMBRE_PROPIETARIO_D    = $_POST['NOMBRE_PROPIETARIO_D'];
        $ALICUOTA_D              = $_POST['ALICUOTA_D'];
        $link = conectar();
        $sql = "INSERT INTO departamento
                          (CD_EDIFICIO_D,  
                           NU_TORRE_D,  
                           CD_DEPARTAMENTO_D,  
                           NOMBRE_PROPIETARIO_D,  
                           ALICUOTA_D,
                           USUARIO_D)
                    VALUE 
                        ( '1',
                          '1',
                          '".$CD_DEPARTAMENTO_D."',
                          '".$NOMBRE_PROPIETARIO_D."',
                          '".$ALICUOTA_D."',
                          'null')";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        return $resultado;
    }
   

    function modificarDeptos()
    {
        $CD_DEPARTAMENTO_D       = $_POST['CD_DEPARTAMENTO_D'];
        $NOMBRE_PROPIETARIO_D    = $_POST['NOMBRE_PROPIETARIO_D'];
        $ALICUOTA_D              = $_POST['ALICUOTA_D'];
        $link = conectar();
        $sql = "UPDATE  departamento
                SET NOMBRE_PROPIETARIO_D = UPPER('".$NOMBRE_PROPIETARIO_D."'),
                    ALICUOTA_D           = '".$ALICUOTA_D."'
                WHERE CD_DEPARTAMENTO_D  = ".$CD_DEPARTAMENTO_D;
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        return $resultado;
    }
    
    function eliminarDeptos()
    {
        $CD_DEPARTAMENTO_D      = $_POST['CD_DEPARTAMENTO_D'];
        $link = conectar();
        $sql = "DELETE FROM   departamento
                 WHERE CD_DEPARTAMENTO_D = ".$CD_DEPARTAMENTO_D;
        $resultado = mysqli_query($link,$sql)  or die(mysqli_error($link) );
        return $resultado;
    }

    function verDeptosPorID()
    {
        $CD_DEPARTAMENTO_D     = $_GET['CD_DEPARTAMENTO_D'];
     
        $link = conectar();
        $sql = "SELECT 
                    CD_DEPARTAMENTO_D, 
                    NOMBRE_PROPIETARIO_D, 
                    ALICUOTA_D 
                    FROM DEPARTAMENTO    
                    WHERE CD_EDIFICIO_D = 1 AND
                          NU_TORRE_D = 1 AND
                          CD_DEPARTAMENTO_D =".$CD_DEPARTAMENTO_D;
         $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
         $depto = mysqli_fetch_assoc($resultado);
        return $depto;
        
    }
    function verPagoPorID()
    {
        $SA_DEPTO     = $_GET['SA_DEPTO'];
          
        $link = conectar();
        $sql = "SELECT 
         CD_DEPARTAMENTO_D, 
         NOMBRE_PROPIETARIO_D,
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
         FROM DEPARTAMENTO,
              SALDO_PROPIETARIOS
         WHERE CD_EDIFICIO_D = 1 AND
               NU_TORRE_D = 1 AND
               CD_DEPARTAMENTO_D = '$SA_DEPTO' AND           
               SA_CD_EDIFICIO = CD_EDIFICIO_D AND
               SA_NU_TORRE    = NU_TORRE_D AND
               SA_DEPTO       = CD_DEPARTAMENTO_D AND
               SA_ANO = 2020;";
         $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
         $depto = mysqli_fetch_assoc($resultado);
        return $depto;
       
    }

     function actPagos()
    {
        $SA_DEPTO            = $_POST['CD_DEPARTAMENTO_D'];
        $SA_IND_ENERO        = $_POST['SA_IND_ENERO'];
        $SA_IND_FEBRERO      = $_POST['SA_IND_FEBRERO'];
        $SA_IND_MARZO        = $_POST['SA_IND_MARZO'];
        $SA_IND_ABRIL        = $_POST['SA_IND_ABRIL'];
        $SA_IND_MAYO         = $_POST['SA_IND_MAYO'];
        $SA_IND_JUNIO        = $_POST['SA_IND_JUNIO'];
        $SA_IND_JULIO        = $_POST['SA_IND_JULIO'];
        $SA_IND_AGOSTO       = $_POST['SA_IND_AGOSTO'];
        $SA_IND_SEPTIEMBRE   = $_POST['SA_IND_SEPTIEMBRE'];
        $SA_IND_OCTUBRE      = $_POST['SA_IND_OCTUBRE'];
        $SA_IND_NOVIEMBRE    = $_POST['SA_IND_NOVIEMBRE'];
        $SA_IND_DICIEMBRE    = $_POST['SA_IND_DICIEMBRE'];

    
        $link = conectar();
        $sql = "UPDATE SALDO_PROPIETARIOS
        SET 
        SA_IND_ENERO          = UPPER(COALESCE('".$SA_IND_ENERO."',' ')),
        SA_IND_FEBRERO        = UPPER(COALESCE('".$SA_IND_FEBRERO."',' ')),
        SA_IND_MARZO          = UPPER(COALESCE('".$SA_IND_MARZO."',' ')),
        SA_IND_ABRIL          = UPPER(COALESCE('".$SA_IND_ABRIL."',' ')),
        SA_IND_MAYO           = UPPER(COALESCE('".$SA_IND_MAYO."',' ')),
        SA_IND_JUNIO          = UPPER(COALESCE('".$SA_IND_JUNIO."',' ')),
        SA_IND_JULIO          = UPPER(COALESCE('".$SA_IND_JULIO."',' ')),
        SA_IND_AGOSTO         = UPPER(COALESCE('".$SA_IND_AGOSTO."',' ')),
        SA_IND_SEPTIEMBRE     = UPPER(COALESCE('".$SA_IND_SEPTIEMBRE."',' ')),
        SA_IND_OCTUBRE        = UPPER(COALESCE('".$SA_IND_OCTUBRE."',' ')),
        SA_IND_NOVIEMBRE      = UPPER(COALESCE('".$SA_IND_NOVIEMBRE."',' ')),
        SA_IND_DICIEMBRE      = UPPER(COALESCE('".$SA_IND_DICIEMBRE."',' '))
        WHERE SA_CD_EDIFICIO  = 1 AND
        SA_NU_TORRE           = 1 AND
        SA_DEPTO              = ".$SA_DEPTO;
         $resultado = mysqli_query( $link,$sql)
         or die( mysqli_error($link));
        return $resultado;
    }
?>
