<?php
function listarGtosGenMen()
{
   $link = conectar();
   $mes  = $_POST['mes'];
   $year = $_POST['year'];

   $sql = "select GAGM_CD_GASTO, GAGE_DESC_GASTO,GAGM_MT_GASTO,GAGM_FE_GASTO 
   from gastos_general_mensual,
       gastos_general
       WHERE GAGM_CD_GASTO = GAGE_CD_GASTO AND
       MONTH(GAGM_FE_GASTO)  = '$mes'   AND YEAR(GAGM_FE_GASTO) = '$year'
       ORDER BY GAGM_FE_GASTO DESC,
       GAGM_CD_GASTO";
     $gtosGenerales = mysqli_query($link,$sql);
    return $gtosGenerales;
 }

 function mostrarGtosGenMen()
{
   $link = conectar();
   $mes  = $_GET['mes'];
   $year = $_GET['year'];

   $sql = "select GAGM_CD_GASTO, GAGE_DESC_GASTO,GAGM_MT_GASTO,GAGM_FE_GASTO 
   from gastos_general_mensual,
       gastos_general
       WHERE GAGM_CD_GASTO = GAGE_CD_GASTO AND
       MONTH(GAGM_FE_GASTO)  = '$mes'   AND YEAR(GAGM_FE_GASTO) = '$year'
       ORDER BY GAGM_FE_GASTO DESC,
       GAGM_CD_GASTO";
     $gtosGenerales = mysqli_query($link,$sql);
    return $gtosGenerales;
 }

 function listarGeneralMenSolo()
 {
    $link = conectar();
    $sql = "SELECT GAGE_CD_GASTO,GAGE_DESC_GASTO
            FROM GASTOS_GENERAL 
            ORDER BY GAGE_CD_GASTO";
     $gastoM = mysqli_query($link,$sql) or die( mysqli_error($link));  
     return $gastoM;
  }

 function agregarGeneralesMen()
{

   $GAGE_CD_GASTO   = $_POST['GAGE_CD_GASTO']; 
   $GAGM_MT_GASTO   = $_POST['GAGM_MT_GASTO'];
   $GAGM_FE_GASTO   = $_POST['GAGM_FE_GASTO'];
   $link = conectar();
   $sql = "INSERT INTO GASTOS_GENERAL_MENSUAL
   (GAGM_CD_EDIFICIO,
   GAGM_CD_GASTO,
   GAGM_MT_GASTO,
   GAGM_FE_GASTO)
    VALUE 
     ('1',
       '.$GAGE_CD_GASTO.',
       '$GAGM_MT_GASTO',
       '".$GAGM_FE_GASTO."')";
       $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
    return $resultado;

}


function  eliminarGeneralMen()
  {
   $GAGM_CD_GASTO   = $_POST['GAGM_CD_GASTO']; 
   $GAGM_FE_GASTO   = $_POST['GAGM_FE_GASTO'];
  
   
   $link = conectar();
   $sql = "DELETE FROM GASTOS_GENERAL_MENSUAL
           WHERE GAGM_CD_EDIFICIO = 1 AND
           GAGM_CD_GASTO =  $GAGM_CD_GASTO AND
           GAGM_FE_GASTO =  '".$GAGM_FE_GASTO."'";
     $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
     return $resultado;
  }

  function verGeneralMenPorID()
  {
      $link = conectar();
      $GAGM_CD_GASTO   =  $_GET['GAGM_CD_GASTO']; 
      $GAGM_FE_GASTO   =  $_GET['GAGM_FE_GASTO'];
          
      $sql = " select GAGM_CD_GASTO, 
                      GAGE_DESC_GASTO,
                      GAGM_MT_GASTO,
                      GAGM_FE_GASTO 
      from gastos_general_mensual,
          gastos_general
          WHERE GAGM_CD_GASTO = GAGE_CD_GASTO AND
          GAGM_CD_GASTO  = $GAGM_CD_GASTO AND
          GAGM_FE_GASTO = '".$GAGM_FE_GASTO."'";
      $resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
      $gasto = mysqli_fetch_assoc($resultado);
          
      return $gasto;
   }

  
?>

   