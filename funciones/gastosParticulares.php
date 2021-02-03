<?php
function listarGtosPar()
{
   $link = conectar();
   $sql = "SELECT GPAR_CD_GASTO,GPAR_DESC_GASTO FROM GASTOS_PARTICULARES;";
   $gtosParticulares = mysqli_query($link,$sql);
    return $gtosParticulares;
 }

?>





