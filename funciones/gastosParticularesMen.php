<?php
function listarPartMenSolo()
 {
    $link = conectar();
  
   
    $sql = "SELECT GPAR_CD_GASTO,
    GPAR_DESC_GASTO
    FROM GASTOS_PARTICULARES 
    ORDER BY GPAR_CD_GASTO;";
     $gastoA = mysqli_query($link,$sql) or die( mysqli_error($link));  
     return $gastoA;
  }

function listarGtosParMen()
{
   $link = conectar();
   $mes  = $_POST['mes'];
   $year = $_POST['year'];
  /* echo 'Listar Gastos ....',$mes,$year;*/

    $sql = "select  GPAM_CD_GASTO,GPAR_DESC_GASTO,GPAM_CD_DEPTO,GPAM_MT_GASTO,GPAM_FE_GASTO
   from gastos_particulares_mensual,
        gastos_particulares
  WHERE GPAM_CD_GASTO = GPAR_CD_GASTO AND   MONTH(GPAM_FE_GASTO)  = '$mes'   AND YEAR(GPAM_FE_GASTO) = '$year'";
   $gtosParticulares = mysqli_query($link,$sql);
    return $gtosParticulares;
 }
 function mostrarGtosParMen()
{
   $link = conectar();
   $mes  = $_GET['mes'];
   $year = $_GET['year'];
  /* echo 'Mostrar Gastos ....',$mes,$year;*/

    $sql = "select  GPAM_CD_GASTO,GPAR_DESC_GASTO,GPAM_CD_DEPTO,GPAM_MT_GASTO,GPAM_FE_GASTO
   from gastos_particulares_mensual,
        gastos_particulares
  WHERE GPAM_CD_GASTO = GPAR_CD_GASTO AND   MONTH(GPAM_FE_GASTO)  = '$mes'   AND YEAR(GPAM_FE_GASTO) = '$year'";
   $gtosParticulares = mysqli_query($link,$sql);
    return $gtosParticulares;
 }

 function verGastosPartPorMen()
 {
    $GPAM_CD_GASTO = $_GET['GPAM_CD_GASTO'];
    $GPAM_FE_GASTO = $_GET['GPAM_FE_GASTO'];
    $GPAM_CD_DEPTO = $_GET['GPAM_CD_DEPTO'];
    $link = conectar();
     $sql = "select  GPAM_CD_GASTO,GPAR_DESC_GASTO,GPAM_CD_DEPTO,GPAM_MT_GASTO,GPAM_FE_GASTO
            from gastos_particulares_mensual,
                gastos_particulares
            WHERE GPAM_CD_GASTO = GPAR_CD_GASTO AND
                  GPAM_CD_GASTO = $GPAM_CD_GASTO AND
                  GPAM_CD_DEPTO = '".$GPAM_CD_DEPTO."' AND
                  GPAM_FE_GASTO = '".$GPAM_FE_GASTO."'";
           $gtosParticulares = mysqli_query($link,$sql)  or die( mysqli_error($link));
           $gasto = mysqli_fetch_assoc($gtosParticulares);
     return $gasto;
  }

  function agregarGastosPartMen()
  {
    $GPAR_CD_GASTO = $_POST['GPAR_CD_GASTO'];
    $GPAM_CD_DEPTO = $_POST['GPAM_CD_DEPTO'];
    $GPAM_MT_GASTO = $_POST['GPAM_MT_GASTO'];
    $GPAM_FE_GASTO = $_POST['GPAM_FE_GASTO'];
    $link = conectar();
      $sql = "INSERT INTO gastos_particulares_mensual
                        (GPAM_CD_EDIFICIO,
                         GPAM_CD_GASTO,
                         GPAM_CD_DEPTO,
                         GPAM_MT_GASTO,
                         GPAM_FE_GASTO)
                  VALUE 
                      ('1',
                      '.$GPAR_CD_GASTO.',
                       UPPER('".$GPAM_CD_DEPTO."'),
                      '$GPAM_MT_GASTO',   
                      '".$GPAM_FE_GASTO."')";
        $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
      return $resultado;
    }

    function  eliminarPartMen()
    {
     $GPAM_CD_GASTO   =  $_POST['GPAM_CD_GASTO']; 
     $GPAM_CD_DEPTO   =  $_POST['GPAM_CD_DEPTO'];
     $GPAM_FE_GASTO   =  $_POST['GPAM_FE_GASTO'];
     $mes1  = substr($GPAM_FE_GASTO,0,4);
     $year1 = substr($GPAM_FE_GASTO,5,2);
     $link = conectar();
     $sql = "DELETE FROM GASTOS_PARTICULARES_MENSUAL
             WHERE GPAM_CD_EDIFICIO = 1 AND
             GPAM_CD_GASTO =  $GPAM_CD_GASTO AND
             GPAM_CD_DEPTO = '".$GPAM_CD_DEPTO."' AND
             GPAM_FE_GASTO =  '".$GPAM_FE_GASTO."'";
       $resultado = mysqli_query( $link, $sql ) or die( mysqli_error($link) );
       return $resultado;
    }
 ?>





