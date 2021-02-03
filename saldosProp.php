<?php  
    include 'includes/config/config.php'; 
    include 'includes/header.html';
    require 'funciones/autenticacion.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Actualizar Saldos</title>

</head>
<body>
<?php  
    require "funciones/conexion.php";
    $mes     =  ($_POST['mes']);
    $year    =  ($_POST['year']);

 
 $link = conectar();
 
$SQL_CONT = "SELECT COUNT(*) CONT
FROM SALDO_PROPIETARIOS
WHERE SA_CD_EDIFICIO = 1 AND
      SA_NU_TORRE    = 1 AND
      SA_ANO         = '$year';";

$saldos  = mysqli_query($link,$SQL_CONT)  or die( mysqli_error($link));
$tsaldos = mysqli_fetch_assoc($saldos);


if('$tsaldos[CONT]' > 0 )
{
  $conta = 1;
}
else
{
  $conta = 0;
}




$SQL_READ = "SELECT RECI_NU_DEPTO DEPTO,
     NVL(SUM(RECI_MT_RECIBO),0)  MT_RECIBO 
FROM recibosmov
WHERE RECI_CD_EDIFICIO = 1 AND
	  RECI_NU_TORRE = 1 AND
      MONTH(RECI_FE_RECIBO)  = '$mes' AND YEAR(RECI_FE_RECIBO) = '$year'
      GROUP BY RECI_NU_DEPTO;";
  
   $recibos = mysqli_query($link,$SQL_READ)  or die( mysqli_error($link));
        while($movrecibo = mysqli_fetch_assoc($recibos))
     {
       if($conta == 0)
       {
          if($mes==1)
          {
               $SQL_UPDATE = "UPDATE SALDO_PROPIETARIOS
               SET 
                 SA_MT_ENERO        = '$movrecibo[MT_RECIBO]'
                WHERE SA_CD_EDIFICIO = 1 AND
                 SA_NU_TORRE    = 1 AND 
                 SA_DEPTO       = '$movrecibo[DEPTO]' AND
                 SA_ANO         = '$year';";
          }
           elseif($mes==2)
           {
               $SQL_UPDATE = "UPDATE SALDO_PROPIETARIOS
               SET 
                 SA_MT_FEBRERO        = '$movrecibo[MT_RECIBO]'
                WHERE SA_CD_EDIFICIO = 1 AND
                 SA_NU_TORRE    = 1 AND 
                 SA_DEPTO       = '$movrecibo[DEPTO]' AND
                 SA_ANO         = '$year';";
           }elseif($mes==3)
           {
               $SQL_UPDATE = "UPDATE SALDO_PROPIETARIOS
               SET 
                 SA_MT_MARZO        = '$movrecibo[MT_RECIBO]'
                WHERE SA_CD_EDIFICIO = 1 AND
                 SA_NU_TORRE    = 1 AND 
                 SA_DEPTO       = '$movrecibo[DEPTO]' AND
                 SA_ANO         = '$year';";
           }elseif($mes==4)
           {
               $SQL_UPDATE = "UPDATE SALDO_PROPIETARIOS
               SET 
                 SA_MT_ABRIL        = '$movrecibo[MT_RECIBO]'
                WHERE SA_CD_EDIFICIO = 1 AND
                 SA_NU_TORRE    = 1 AND 
                 SA_DEPTO       = '$movrecibo[DEPTO]' AND
                 SA_ANO         = '$year';";
           }elseif($mes==5)
           {
               $SQL_UPDATE = "UPDATE SALDO_PROPIETARIOS
               SET 
                SA_MT_MAYO        = '$movrecibo[MT_RECIBO]'
                WHERE SA_CD_EDIFICIO = 1 AND
                 SA_NU_TORRE    = 1 AND 
                 SA_DEPTO       = '$movrecibo[DEPTO]' AND
                 SA_ANO         = '$year';";
           }elseif($mes==6)
           {
               $SQL_UPDATE = "UPDATE SALDO_PROPIETARIOS
               SET 
                 SA_MT_JUNIO       = '$movrecibo[MT_RECIBO]'
                WHERE SA_CD_EDIFICIO = 1 AND
                 SA_NU_TORRE    = 1 AND 
                 SA_DEPTO       = '$movrecibo[DEPTO]' AND
                 SA_ANO         = '$year';";
           }elseif($mes==7)
           {
               $SQL_UPDATE = "UPDATE SALDO_PROPIETARIOS
               SET 
                 SA_MT_JULIO       = '$movrecibo[MT_RECIBO]'
                WHERE SA_CD_EDIFICIO = 1 AND
                 SA_NU_TORRE    = 1 AND 
                 SA_DEPTO       = '$movrecibo[DEPTO]' AND
                 SA_ANO         = '$year';";
                  
           }elseif($mes==8)
           {
               $SQL_UPDATE = "UPDATE SALDO_PROPIETARIOS
               SET 
                 SA_MT_AGOSTO       = '$movrecibo[MT_RECIBO]'
                WHERE SA_CD_EDIFICIO = 1 AND
                 SA_NU_TORRE    = 1 AND 
                 SA_DEPTO       = '$movrecibo[DEPTO]' AND
                 SA_ANO         = '$year';";
                 
           }elseif($mes==9)
           {
               $SQL_UPDATE = "UPDATE SALDO_PROPIETARIOS
               SET 
                 SA_MT_SEPTIEMBRE       = '$movrecibo[MT_RECIBO]'
                WHERE SA_CD_EDIFICIO = 1 AND
                 SA_NU_TORRE    = 1 AND 
                 SA_DEPTO       = '$movrecibo[DEPTO]' AND
                 SA_ANO         = '$year';";
           }elseif($mes==10)
           {
               $SQL_UPDATE = "UPDATE SALDO_PROPIETARIOS
               SET 
                 SA_MT_OCTUBRE        = '$movrecibo[MT_RECIBO]'
                WHERE SA_CD_EDIFICIO = 1 AND
                 SA_NU_TORRE    = 1 AND 
                 SA_DEPTO       = '$movrecibo[DEPTO]' AND
                 SA_ANO         = '$year';";
           }
           elseif($mes==11)
           {
               $SQL_UPDATE = "UPDATE SALDO_PROPIETARIOS
               SET 
                 SA_MT_NOVIEMBRE        = '$movrecibo[MT_RECIBO]'
                WHERE SA_CD_EDIFICIO = 1 AND
                 SA_NU_TORRE    = 1 AND 
                 SA_DEPTO       = '$movrecibo[DEPTO]' AND
                 SA_ANO         = '$year';";
           }
           elseif($mes==12)
           {
            $SQL_UPDATE = "UPDATE SALDO_PROPIETARIOS
            SET 
              SA_MT_DICIEMBRE        = '$movrecibo[MT_RECIBO]'
             WHERE SA_CD_EDIFICIO = 1 AND
              SA_NU_TORRE    = 1 AND 
              SA_DEPTO       = '$movrecibo[DEPTO]' AND
              SA_ANO         = '$year';";
           }
           $queries = mysqli_query($link,$SQL_UPDATE)  or die(mysqli_error($link));
        }

        if($conta == 1)
          {
           $SQL_CREATE = "INSERT INTO SALDO_PROPIETARIOS
          (SA_CD_EDIFICIO,
           SA_NU_TORRE,
           SA_DEPTO,
           SA_ANO,
           SA_MT_ANO_ANTERIOR,
           SA_MT_ENERO,
           SA_MT_FEBRERO,
           SA_MT_MARZO,
           SA_MT_ABRIL,
           SA_MT_MAYO,
           SA_MT_JUNIO,
           SA_MT_JULIO,
           SA_MT_AGOSTO,
           SA_MT_SEPTIEMBRE,
           SA_MT_OCTUBRE,
           SA_MT_NOVIEMBRE, 
           SA_MT_DICIEMBRE)
           VALUES
           ('1',
            '1',
            '$movrecibo[DEPTO]',
            '$year',
            '0',
            IF('$mes'='1','$movrecibo[MT_RECIBO]','0'),
            IF('$mes'='2','$movrecibo[MT_RECIBO]','0'),
            IF('$mes'='3','$movrecibo[MT_RECIBO]','0'),
            IF('$mes'='4','$movrecibo[MT_RECIBO]','0'),
            IF('$mes'='5','$movrecibo[MT_RECIBO]','0'),
            IF('$mes'='6','$movrecibo[MT_RECIBO]','0'),
            IF('$mes'='7','$movrecibo[MT_RECIBO]','0'),
            IF('$mes'='8','$movrecibo[MT_RECIBO]','0'),
            IF('$mes'='9','$movrecibo[MT_RECIBO]','0'),
            IF('$mes'='10','$movrecibo[MT_RECIBO]','0'),
            IF('$mes'='11','$movrecibo[MT_RECIBO]','0'),
            IF('$mes'='12','$movrecibo[MT_RECIBO]','0'));";
           $queries = mysqli_query($link,$SQL_CREATE)  or die(mysqli_error($link));
         }
   
      }

   $SQL_302 = "SELECT 
      GADM_MT_GASTO
   FROM 
        GASTOS_ADMIN_MENSUAL
   WHERE GADM_CD_EDIFICIO = 1 AND
      GADM_CD_GASTO = 302  AND
      MONTH(GADM_FE_GASTO)  = '$mes'   AND YEAR(GADM_FE_GASTO) = '$year';";

      $monto_reserva =  mysqli_query($link,$SQL_302)  or die( mysqli_error($link));
      $mto_reserva   = mysqli_fetch_assoc($monto_reserva);

      $reserva = $mto_reserva['GADM_MT_GASTO'];

      $SQL_303 = "SELECT 
      GADM_MT_GASTO
   FROM 
        GASTOS_ADMIN_MENSUAL
   WHERE GADM_CD_EDIFICIO = 1 AND
      GADM_CD_GASTO = 303  AND
      MONTH(GADM_FE_GASTO)  = '$mes'   AND YEAR(GADM_FE_GASTO) = '$year';";

      $monto_prestaciones =  mysqli_query($link,$SQL_303)  or die( mysqli_error($link));
      $mto_prestac        = mysqli_fetch_assoc($monto_prestaciones);

      $prestaciones  = $mto_prestac['GADM_MT_GASTO'];

      $SQL_FONDO = "SELECT  MT_FONDO_RESERVA,
                  MT_FONDO_PRESTACIONES_SOC 
          FROM EDIFICIO
          WHERE CD_EDIFICIO = 1;";
      $fondo    = mysqli_query($link,$SQL_FONDO)  or die( mysqli_error($link));
      $movfondo = mysqli_fetch_assoc($fondo);


      $mt_reserva      =    $movfondo['MT_FONDO_RESERVA'];  
      $mt_prestaciones =    $movfondo['MT_FONDO_PRESTACIONES_SOC'];  

      $mt_reserva      = $mt_reserva +  $reserva;
      $mt_prestaciones = $mt_prestaciones + $prestaciones;

       
      $sql_upd = "UPDATE  EDIFICIO
                SET MT_FONDO_RESERVA           = '".$mt_reserva."',  
                    MT_FONDO_PRESTACIONES_SOC  = '".$mt_prestaciones."'               
                WHERE CD_EDIFICIO  = 1";
        $resultado = mysqli_query($link,$sql_upd) or die(mysqli_error($link));

 if($mes == 12)
 {

      $year_new = $year + 1;

      $SQL_DEUDA = "SELECT
      SA_DEPTO,
      SA_MT_ANO_ANTERIOR +
      IF(SA_IND_ENERO = 'S',0,SA_MT_ENERO) +
      IF(SA_IND_FEBRERO  = 'S',0,SA_MT_FEBRERO) +
      IF(SA_IND_MARZO = 'S',0,SA_MT_MARZO) +
      IF(SA_IND_ABRIL = 'S',0,SA_MT_ABRIL) +
      IF(SA_IND_JUNIO = 'S',0,SA_MT_JUNIO) +
      IF(SA_IND_JULIO = 'S',0,SA_MT_JULIO) +
      IF(SA_IND_AGOSTO = 'S',0,SA_MT_AGOSTO) +
      IF(SA_IND_SEPTIEMBRE = 'S',0,SA_MT_SEPTIEMBRE) +
      IF(SA_IND_OCTUBRE = 'S',0,SA_MT_OCTUBRE) +
      IF(SA_IND_NOVIEMBRE = 'S',0,SA_MT_NOVIEMBRE)  DEUDA
      from SALDO_PROPIETARIOS
      WHERE SA_CD_EDIFICIO = 1 AND
      SA_NU_TORRE    = 1 AND
      SA_ANO         = '$year';";
      
     
  
  $resultado   = mysqli_query($link,$SQL_DEUDA)  or die( mysqli_error($link));
  while($deuda = mysqli_fetch_assoc($resultado))
  {
      $sql_inse = "INSERT INTO SALDO_PROPIETARIOS
        (SA_CD_EDIFICIO,  
         SA_NU_TORRE,
         SA_DEPTO,  
         SA_ANO,  
         SA_MT_ANO_ANTERIOR,
         SA_MT_ENERO,
         SA_MT_FEBRERO,  
         SA_MT_MARZO, 
         SA_MT_ABRIL, 
         SA_MT_MAYO, 
         SA_MT_JUNIO, 
         SA_MT_JULIO, 
         SA_MT_AGOSTO, 
         SA_MT_SEPTIEMBRE, 
         SA_MT_OCTUBRE, 
         SA_MT_NOVIEMBRE, 
         SA_MT_DICIEMBRE, 
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
         SA_IND_DICIEMBRE)
        VALUES
        (1,
        1,
        '$deuda[SA_DEPTO]',
        '.$year_new.',
        '.$deuda[DEUDA].',
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        ' ',
        ' ',
        ' ',
        ' ',
        ' ',
        ' ',
        ' ',
        ' ',
        ' ',
        ' ',
        ' ',
        ' ');";
      $insert  = mysqli_query($link,$sql_inse)  or die( mysqli_error($link));
    }
 }

 header("Location:  generarSaldos.php");

?>
</body>
</html>