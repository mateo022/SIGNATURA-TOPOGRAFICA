<?php
require_once("database.php");
session_name("signatura");
session_start();
  if (isset($_GET['fondo'])) {
    $fondo = $_GET['fondo'];
    $dependencia = $_GET['dependencia'];
    $serie = $_GET['serie'];
    $consulta = mysqli_query($mysql,"SELECT fondo.id, dependencia.id, serie.id
    FROM fondo
        LEFT JOIN dependencia ON dependencia.idFondo = fondo.id
        LEFT JOIN serie ON serie.idDependencia = dependencia.id
        WHERE fondo.nombre = '$fondo' AND dependencia.nombre = '$dependencia' AND serie.nombre = '$serie'");
    $result = mysqli_fetch_array($consulta);
    
    echo "<script>window.location='../../HADES/consultor/php/puenteSignatura.php?idSerie=".$result['2']."&nombreSerie=".$serie."&nombreFondo=".$fondo."&pagina=1'</script>";
  }
?>