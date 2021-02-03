<?php
function listarGtosAdm()
{
   $link = conectar();
   $sql = "SELECT GAMI_CD_GASTO, GAMI_DESC_GASTO FROM GASTOS_ADMIN;";
    $gtosAdm = mysqli_query($link,$sql);
    return $gtosAdm;
 }

?>





