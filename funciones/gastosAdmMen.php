<?php

function mostrarGtosAdmMen()
{
   $link = conectar();
   $mes  = $_GET['mes'];
   $year = $_GET['year'];
   $sql = "select  GADM_CD_GASTO,GAMI_DESC_GASTO,GADM_MT_GASTO,GADM_FE_GASTO 
   from gastos_admin_mensual,
        gastos_admin
    WHERE GADM_CD_GASTO = GAMI_CD_GASTO AND
          MONTH(GADM_FE_GASTO)  = '$mes'   AND YEAR(GADM_FE_GASTO) = '$year'
      ORDER BY GADM_FE_GASTO DESC,
      GADM_CD_GASTO";
    $gtosAdm = mysqli_query($link,$sql);
    return $gtosAdm;
 }

function listarGtosAdmMen()
{
   $link = conectar();
   $mes  = $_POST['mes'];
   $year = $_POST['year'];
   $sql = "select  GADM_CD_GASTO,GAMI_DESC_GASTO,GADM_MT_GASTO,GADM_FE_GASTO 
   from gastos_admin_mensual,
        gastos_admin
    WHERE GADM_CD_GASTO = GAMI_CD_GASTO AND
          MONTH(GADM_FE_GASTO)  = '$mes'   AND YEAR(GADM_FE_GASTO) = '$year'
          ORDER BY GADM_FE_GASTO DESC,
          GADM_CD_GASTO";
    $gtosAdm = mysqli_query($link,$sql);
    return $gtosAdm;
 }

 function listarAdminMenSolo()
 {
    $link = conectar();
    $sql = "SELECT GAMI_CD_GASTO,GAMI_DESC_GASTO
            FROM GASTOS_ADMIN 
            ORDER BY GAMI_CD_GASTO";
     $gastoA = mysqli_query($link,$sql) or die( mysqli_error($link));  
     return $gastoA;
  }

  function agregarAdminMen()
  {
  
     $GAMI_CD_GASTO   = $_POST['GAMI_CD_GASTO']; 
     $GADM_MT_GASTO   = $_POST['GADM_MT_GASTO'];
     $GADM_FE_GASTO   = $_POST['GADM_FE_GASTO'];
     $link = conectar();
     $sql = "INSERT INTO GASTOS_ADMIN_MENSUAL
     (GADM_CD_EDIFICIO,
     GADM_CD_GASTO,
     GADM_MT_GASTO,
     GADM_FE_GASTO)
      VALUE 
       ('1',
         '.$GAMI_CD_GASTO.',
         '$GADM_MT_GASTO',
         '".$GADM_FE_GASTO."')";
         $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
      return $resultado;
    }
  
    function verAdminMenPorID()
  {
      $link = conectar();
      $GADM_CD_GASTO   =  $_GET['GADM_CD_GASTO']; 
      $GADM_FE_GASTO   =  $_GET['GADM_FE_GASTO'];
          
      $sql = "select GAMI_CD_GASTO, 
      GAMI_DESC_GASTO,
      GADM_MT_GASTO,
      GADM_FE_GASTO 
      from gastos_admin_mensual,
           gastos_admin
       WHERE GADM_CD_GASTO = GAMI_CD_GASTO AND
            GADM_CD_GASTO  =  $GADM_CD_GASTO AND
            GADM_FE_GASTO = '".$GADM_FE_GASTO."'
            ORDER BY GADM_FE_GASTO DESC,
            GAMI_CD_GASTO";
      $resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
      $gasto = mysqli_fetch_assoc($resultado);
      return $gasto;
   }
  
   function  eliminarAdminMen()
  {
      $GAMI_CD_GASTO   = $_POST['GAMI_CD_GASTO']; 
      $GADM_FE_GASTO   = $_POST['GADM_FE_GASTO'];
  
   
   $link = conectar();
   $sql = "DELETE FROM GASTOS_ADMIN_MENSUAL
           WHERE GADM_CD_EDIFICIO = 1 AND
           GADM_CD_GASTO =  $GAMI_CD_GASTO AND
           GADM_FE_GASTO =  '".$GADM_FE_GASTO."'";
     $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
     return $resultado;
  }
   
   
  

 







?>





