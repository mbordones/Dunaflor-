<?php
function listarConserjeMen()
{
   $link = conectar();
   $mes  = $_POST['mes'];
   $year = $_POST['year'];

       
   $sql = "select GACM_CD_GASTO,GCON_DESC_GASTO,GACM_MT_GASTO,GACM_FE_GASTO
        from gastos_conserje_mensual,
             gastos_conserje
         WHERE  GACM_CD_GASTO = GCON_CD_GASTO AND
         MONTH(GACM_FE_GASTO)  = '$mes'  AND YEAR(GACM_FE_GASTO) = '$year'
         ORDER BY GACM_FE_GASTO DESC,
                  GACM_CD_GASTO";
         
         $gtosConserjeMen = mysqli_query($link,$sql) or die(mysqli_error($link));
         return $gtosConserjeMen;
 }
 function mostrarConserjeMen()
{
   $link = conectar();
   $mes  = $_GET['mes'];
   $year = $_GET['year'];

       
   $sql = "select GACM_CD_GASTO,GCON_DESC_GASTO,GACM_MT_GASTO,GACM_FE_GASTO
        from gastos_conserje_mensual,
             gastos_conserje
         WHERE  GACM_CD_GASTO = GCON_CD_GASTO AND
         MONTH(GACM_FE_GASTO)  = '$mes'  AND YEAR(GACM_FE_GASTO) = '$year'
         ORDER BY GACM_FE_GASTO DESC,
         GACM_CD_GASTO";
         
         $gtosConserjeMen = mysqli_query($link,$sql) or die(mysqli_error($link));
         return $gtosConserjeMen;
 }

 
 function listarConserjeMenSolo()
{
   $link = conectar();
   $sql = "select GCON_CD_GASTO,GCON_DESC_GASTO
            from 
            gastos_conserje
            order by GCON_CD_GASTO";
    $gastoM = mysqli_query($link,$sql);
    return $gastoM;
 }

 function verConserjeMenPorID()
  {
      $GACM_CD_GASTO   =  $_GET['GACM_CD_GASTO']; 
      $GACM_FE_GASTO   =  $_GET['GACM_FE_GASTO'];
      
      $link = conectar();
          
      $sql = "select GACM_CD_GASTO,GCON_DESC_GASTO, GACM_MT_GASTO,GACM_FE_GASTO
      from gastos_conserje_mensual,
            gastos_conserje
            WHERE  GACM_CD_GASTO =  GCON_CD_GASTO AND
                   GACM_CD_GASTO =  $GACM_CD_GASTO AND
                   GACM_FE_GASTO = '".$GACM_FE_GASTO."'";
      $resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
      $gasto = mysqli_fetch_assoc($resultado);
          
      return $gasto;
  }
  
 function agregarConserjeMen()
{

   $GACM_CD_GASTO   = $_POST['GCON_CD_GASTO']; 
   $GACM_MT_GASTO   = $_POST['GACM_MT_GASTO'];
   $GACM_FE_GASTO   = $_POST['GACM_FE_GASTO'];
   $link = conectar();
   $sql = "INSERT INTO GASTOS_CONSERJE_MENSUAL
   (GACM_CD_EDIFICIO, 
    GACM_CD_GASTO,
    GACM_MT_GASTO, 
    GACM_FE_GASTO)
     VALUE 
     ('1',
       '.$GACM_CD_GASTO.',
       '$GACM_MT_GASTO',
       '".$GACM_FE_GASTO."')";
       $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
    return $resultado;

}

  function  eliminarConserjeMen()
  {
   $GACM_CD_GASTO   = $_POST['GACM_CD_GASTO']; 
   $GACM_FE_GASTO   = $_POST['GACM_FE_GASTO'];
  
   
   $link = conectar();
   $sql = "DELETE FROM GASTOS_CONSERJE_MENSUAL
           WHERE GACM_CD_EDIFICIO = 1 AND
                 GACM_CD_GASTO =  $GACM_CD_GASTO AND
                 GACM_FE_GASTO =  '".$GACM_FE_GASTO."'";
     $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
     return $resultado;
  }

 
  function modificarGastosConserjeMen()
  {
   $GACM_CD_GASTO   = $_POST['GACM_CD_GASTO']; 
   $GACM_MT_GASTO   = $_POST['GACM_MT_GASTO'];
      $link = conectar();
      $sql = "UPDATE  GASTOS_CONSERJE_MENSUAL
              SET   GACM_FE_GASTO = '".$GACM_FE_GASTO."',
                    GACM_MT_GASTO = '.$GACM_MT_GASTO.'
              WHERE GACM_CD_GASTO = ".$GACM_CD_GASTO;
           
         $resultado = mysqli_query( $link, $sql )  or die( mysqli_error($link) );
      return $resultado;
  }
?>





