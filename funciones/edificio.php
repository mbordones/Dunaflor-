<?php
   /* ########################
    #### EDIFICIO ####*/

    function verEdificio()
    {
      
       $EDIFICIO   =  $_GET['CD_EDIFICIO'];
        $link = conectar();
        $sql = "SELECT 
                CD_EDIFICIO,
                MT_FONDO_RESERVA,
                MT_FONDO_PRESTACIONES_SOC,
                CTA_BANCO,
                NM_BANCO,
                RESP_BANCO,
                CD_ID_RESPONSABLE
         FROM  EDIFICIO
         WHERE CD_EDIFICIO = ".$EDIFICIO;
              
         $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
         $edificio  = mysqli_fetch_assoc($resultado);
        return $edificio;
    }
 
    function modiEdificio()
    {
        $EDIFICIO                        = $_POST['CD_EDIFICIO'];
        $CD_ID_RESPONSABLE               = $_POST['CD_ID_RESPONSABLE'];
        $NM_BANCO                        = $_POST['NM_BANCO'];
        $RESP_BANCO                      = $_POST['RESP_BANCO'];
        $CTA_BANCO                       = $_POST['CTA_BANCO'];
        $MT_FONDO_RESERVA                = $_POST['MT_FONDO_RESERVA'];
        $MT_FONDO_PRESTACIONES_SOC       = $_POST['MT_FONDO_PRESTACIONES_SOC'];

        $link = conectar();
        $sql = "UPDATE  EDIFICIO
                SET CTA_BANCO                  = '".$CTA_BANCO."',
                    NM_BANCO                   = UPPER('".$NM_BANCO."'),
                    RESP_BANCO                 = UPPER('".$RESP_BANCO."'),
                    CD_ID_RESPONSABLE          = '".$CD_ID_RESPONSABLE."',        
                    MT_FONDO_RESERVA           = '".$MT_FONDO_RESERVA."',  
                    MT_FONDO_PRESTACIONES_SOC  = '".$MT_FONDO_PRESTACIONES_SOC."'               
                WHERE CD_EDIFICIO  = ".$EDIFICIO;
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        return $resultado;
    }
   
   
    
?>
