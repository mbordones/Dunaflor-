<?php  
    require "funciones/conexion.php";
    $mes     =  ($_POST['mes']);
    $year    =  ($_POST['year']);

 
 $link = conectar();
 $SQL_DELETE = "DELETE FROM RECIBOSMOV WHERE  
   RECI_CD_EDIFICIO = 1 AND
   RECI_NU_TORRE = 1 AND
   MONTH(RECI_FE_RECIBO)  = $mes AND YEAR(RECI_FE_RECIBO) = $year;";
   $queries = mysqli_query($link,$SQL_DELETE) or die( mysqli_error($link));


$SQL_READ = "SELECT 
   GACM_CD_GASTO CD_GASTO,
   GCON_DESC_GASTO DESC_GASTO,
   GACM_MT_GASTO MT_GASTO, 
   ((GACM_MT_GASTO * ALICUOTA_D)/100) MT_RECIBO,
   GACM_FE_GASTO FE_GASTO,
   CD_DEPARTAMENTO_D DEPTO
   FROM DEPARTAMENTO,
        GASTOS_CONSERJE_MENSUAL,
        GASTOS_CONSERJE
   WHERE GACM_CD_EDIFICIO = CD_EDIFICIO_D AND
   GCON_CD_EDIFICIO = GACM_CD_EDIFICIO AND
   GCON_CD_GASTO = GACM_CD_GASTO AND
   MONTH(GACM_FE_GASTO)  = '$mes'   AND YEAR(GACM_FE_GASTO) = '$year'
   UNION
   SELECT 
    GAGE_CD_GASTO CD_GASTO,
    GAGE_DESC_GASTO DESC_GASTO,
    GAGM_MT_GASTO MT_GASTO, 
    ((GAGM_MT_GASTO * ALICUOTA_D)/100) MT_RECIBO,
      GAGM_FE_GASTO FE_GASTO,
      CD_DEPARTAMENTO_D DEPTO
   FROM DEPARTAMENTO,
        GASTOS_GENERAL_MENSUAL,
        GASTOS_GENERAL
   WHERE GAGM_CD_EDIFICIO = CD_EDIFICIO_D AND
   GAGE_CD_EDIFICIO = GAGM_CD_EDIFICIO AND
   GAGE_CD_GASTO = GAGM_CD_GASTO AND
   MONTH(GAGM_FE_GASTO)  = '$mes'   AND YEAR(GAGM_FE_GASTO) = '$year' 
   UNION
   SELECT 
      GADM_CD_GASTO CD_GASTO,
      GAMI_DESC_GASTO DESC_GASTO,
      GADM_MT_GASTO MT_GASTO,
      ((GADM_MT_GASTO * ALICUOTA_D)/100) MT_RECIBO,
      GADM_FE_GASTO FE_GASTO,
        CD_DEPARTAMENTO_D DEPTO
     FROM DEPARTAMENTO,
          GASTOS_ADMIN_MENSUAL,
          GASTOS_ADMIN
     WHERE GADM_CD_EDIFICIO = CD_EDIFICIO_D AND
     GAMI_CD_EDIFICIO = GADM_CD_EDIFICIO AND
     GAMI_CD_GASTO = GADM_CD_GASTO AND
     MONTH(GADM_FE_GASTO)  = '$mes'   AND YEAR(GADM_FE_GASTO) = '$year' 
     UNION
     SELECT 
   GPAM_CD_GASTO CD_GASTO,
   GPAR_DESC_GASTO DESC_GASTO,
   GPAM_MT_GASTO MT_GASTO, 
   GPAM_MT_GASTO  MT_RECIBO,
   GPAM_FE_GASTO FE_GASTO,
     CD_DEPARTAMENTO_D DEPTO
   FROM DEPARTAMENTO,
        GASTOS_PARTICULARES_MENSUAL,
        GASTOS_PARTICULARES
   WHERE GPAM_CD_EDIFICIO = CD_EDIFICIO_D AND
   GPAM_CD_EDIFICIO = GPAR_CD_EDIFICIO AND
   GPAM_CD_GASTO = GPAR_CD_GASTO AND
   GPAM_CD_DEPTO = CD_DEPARTAMENTO_D AND
   MONTH(GPAM_FE_GASTO)  = '$mes'   AND YEAR(GPAM_FE_GASTO) = '$year';";



   $mto_saldo = 0;
   $recibos = mysqli_query($link,$SQL_READ)  or die( mysqli_error($link));
        while($movrecibo = mysqli_fetch_assoc($recibos))
        {

            $SQL_CREATE = "INSERT INTO RECIBOSMOV
            ( RECI_CD_EDIFICIO,
              RECI_NU_TORRE,
              RECI_NU_DEPTO,
              RECI_FE_RECIBO,
              RECI_CD_GASTO, 
              RECI_MT_GASTO, 
              RECI_MT_RECIBO)
              VALUES ('1',
              '1',
              '$movrecibo[DEPTO]',
              '$movrecibo[FE_GASTO]',
              '$movrecibo[CD_GASTO]',
              '$movrecibo[MT_GASTO]',
              '$movrecibo[MT_RECIBO]');";  
               $queries = mysqli_query($link,$SQL_CREATE)  or die(mysqli_error($link));


        }

        header("Location: generarMovi.php");
?>