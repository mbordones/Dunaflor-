<?php
function listarRecibos()
{
   $link = conectar();
   $sql = "SELECT 
   GACM_CD_GASTO CD_GASTO1,
   GCON_DESC_GASTO DESC_GASTO1,
   GACM_MT_GASTO MT_GASTO1, 
   ((GACM_MT_GASTO * ALICUOTA_D)/100) MT_RECIBO1,
   CD_DEPARTAMENTO_D DEPTO1
   FROM DEPARTAMENTO,
        GASTOS_CONSERJE_MENSUAL,
        GASTOS_CONSERJE
   WHERE GACM_CD_EDIFICIO = CD_EDIFICIO_D AND
   GCON_CD_EDIFICIO = GACM_CD_EDIFICIO AND
   GCON_CD_GASTO = GACM_CD_GASTO AND
   GACM_FE_GASTO = '2020-07-30'
   UNION
   SELECT 
    GAGE_CD_GASTO CD_GASTO2,
    GAGE_DESC_GASTO DESC_GASTO2,
    GAGM_MT_GASTO MT_GASTO2, 
    ((GAGM_MT_GASTO * ALICUOTA_D)/100) MT_RECIBO2,
      CD_DEPARTAMENTO_D DEPTO2
   FROM DEPARTAMENTO,
        GASTOS_GENERAL_MENSUAL,
        GASTOS_GENERAL
   WHERE GAGM_CD_EDIFICIO = CD_EDIFICIO_D AND
   GAGE_CD_EDIFICIO = GAGM_CD_EDIFICIO AND
   GAGE_CD_GASTO = GAGM_CD_GASTO AND
   GAGM_FE_GASTO = '2020-07-30'
   UNION
   SELECT 
      GADM_CD_GASTO CD_GASTO3,
      GAMI_DESC_GASTO DESC_GASTO3,
      GADM_MT_GASTO MT_GASTO3,
      ((GADM_MT_GASTO * ALICUOTA_D)/100) MT_RECIBO3,
        CD_DEPARTAMENTO_D DEPTO3
     FROM DEPARTAMENTO,
          GASTOS_ADMIN_MENSUAL,
          GASTOS_ADMIN
     WHERE GADM_CD_EDIFICIO = CD_EDIFICIO_D AND
     GAMI_CD_EDIFICIO = GADM_CD_EDIFICIO AND
     GAMI_CD_GASTO = GADM_CD_GASTO AND
     GADM_FE_GASTO = '2020-07-30'
     UNION
     SELECT 
   GPAM_CD_GASTO CD_GASTO4,
   GPAR_DESC_GASTO DESC_GASTO4,
   GAPM_MT_GASTO MT_GASTO4, 
   ((GAPM_MT_GASTO * ALICUOTA_D)/100) MT_RECIBO4,
     CD_DEPARTAMENTO_D DEPTO4
   FROM DEPARTAMENTO,
        GASTOS_PARTICULARES_MENSUAL,
        GASTOS_PARTICULARES
   WHERE GPAM_CD_EDIFICIO = CD_EDIFICIO_D AND
   GPAM_CD_EDIFICIO = GPAR_CD_EDIFICIO AND
   GPAM_CD_GASTO = GPAR_CD_GASTO AND
   GPAM_CD_DEPTO = CD_DEPARTAMENTO_D AND
   GPAM_FE_GASTO = '2020-07-30';";
    $gtosAdm = mysqli_query($link,$sql);
    return $Recibos;
 }
?>
