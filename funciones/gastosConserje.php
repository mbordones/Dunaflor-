<?php
function listarConserje()
{
   $link = conectar();
   $sql = "SELECT GCON_CD_EDIFICIO,
   GCON_CD_GASTO,
   GCON_DESC_GASTO FROM GASTOS_CONSERJE";
    $gtosConserje = mysqli_query($link,$sql);
    return $gtosConserje;
 }

 function verConserjePorID()
  {
      $GCON_CD_GASTO   =  $_GET['GCON_CD_GASTO']; 
      $link = conectar();
      $sql = "SELECT GCON_CD_GASTO,GCON_DESC_GASTO
                  FROM GASTOS_CONSERJE
                  WHERE GCON_CD_GASTO =".$GCON_CD_GASTO;
      $resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
      $gasto = mysqli_fetch_assoc($resultado);
      return $gasto;
  }

 function agregarConserje()
{
   $GCON_CD_GASTO   =  $_POST['GCON_CD_GASTO']; 
   $GCON_DESC_GASTO =  $_POST['GCON_DESC_GASTO'];
   $link = conectar();
   $sql = "INSERT INTO GASTOS_CONSERJE
   (GCON_CD_EDIFICIO, 
    GCON_CD_GASTO, 
    GCON_DESC_GASTO)
     VALUE 
     ('1',
       '.$GCON_CD_GASTO.',
       '".$GCON_DESC_GASTO."')";
    $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
    return $resultado;
}

  function  eliminarConserje()
  {
   $GCON_CD_GASTO   =  $_POST['GCON_CD_GASTO']; 
   $link = conectar();
   $sql = "DELETE FROM GASTOS_CONSERJE
           WHERE GCON_CD_EDIFICIO = 1 AND
                 GCON_CD_GASTO = $GCON_CD_GASTO";
     $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
     return $resultado;
  }

  function modificarGastosConserje()
  {
      $GCON_CD_GASTO   =  $_POST['GCON_CD_GASTO']; 
      $GCON_DESC_GASTO =  $_POST['GCON_DESC_GASTO'];
      $link = conectar();
      $sql = "UPDATE  GASTOS_CONSERJE
              SET  GCON_DESC_GASTO = '".$GCON_DESC_GASTO."'
              WHERE GCON_CD_GASTO = ".$GCON_CD_GASTO;
           
         $resultado = mysqli_query( $link, $sql )  or die( mysqli_error($link) );
      return $resultado;
  }
  
?>







