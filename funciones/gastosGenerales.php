<?php
function listarGtosGen()
{
   $link = conectar();
   $sql = "select GAGE_CD_GASTO, GAGE_DESC_GASTO FROM GASTOS_GENERAL;";
   $gtosGenerales = mysqli_query($link,$sql);
    return $gtosGenerales;
 }

 function agregarGastosGen()
 {
    $GAGE_CD_GASTO   =  $_POST['GAGE_CD_GASTO']; 
    $GAGE_DESC_GASTO =  $_POST['GAGE_DESC_GASTO'];
    $link = conectar();
    $sql = "INSERT INTO GASTOS_GENERAL
    (GAGE_CD_EDIFICIO, 
    GAGE_CD_GASTO, 
    GAGE_DESC_GASTO)
      VALUE 
      ('1',
        '.$GAGE_CD_GASTO.',
        '".$GAGE_DESC_GASTO."')";
     $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
     return $resultado;
 }

 
  function  verGastosGenPorID()
 {
       $GAGE_CD_GASTO   =  $_GET['GAGE_CD_GASTO']; 
       $link = conectar();
       $sql = "SELECT GAGE_CD_GASTO,GAGE_DESC_GASTO
                   FROM GASTOS_GENERAL
                   WHERE GAGE_CD_GASTO =".$GAGE_CD_GASTO;
       $resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
       $gasto = mysqli_fetch_assoc($resultado);
       return $gasto;
  }

  function modificarGastosGeneral()
  {       
   
    $GAGE_DESC_GASTO =  $_POST['GAGE_DESC_GASTO']; 
    $GAGE_CD_GASTO   =  $_POST['GAGE_CD_GASTO']; 

      $link = conectar();
      $sql = "UPDATE  GASTOS_GENERAL
              SET   GAGE_DESC_GASTO = '".$GAGE_DESC_GASTO."'
              WHERE GAGE_CD_GASTO   = ".$GAGE_CD_GASTO;
       $resultado = mysqli_query( $link, $sql )  or die( mysqli_error($link) );
      return $resultado;
  }


 function  eliminarGastosGen()
 { 
  $GAGE_CD_GASTO   =  $_POST['GAGE_CD_GASTO']; 
  $link = conectar();
  $sql = "DELETE FROM GASTOS_GENERAL
          WHERE GAGE_CD_EDIFICIO = 1 AND
          GAGE_CD_GASTO = $GAGE_CD_GASTO";
    $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
    return $resultado;
 }

 

?>





