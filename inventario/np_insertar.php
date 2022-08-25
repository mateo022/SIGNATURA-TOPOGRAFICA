<?php
require_once("../php/database.php");
session_name("signatura");
session_start();
if (isset($_POST['Insertar'])) {
    $id = $_POST['id'];
    $estante = $_POST['estante'];
    $lado = $_POST['lado'];
    $entrepano = $_POST['entrepano'];
    $posicion = $_POST['posicion'];
    $dependencia = $_POST['dependencia'];
    $serie = $_POST['serie'];
    $subserie = $_POST['subserie'];
    $num_Caja = $_POST['num_Caja'];
    $empresa = $_POST['empresa'];
    
    if ($lado == 0) {
        echo "<script>alert('No es posible insertar este registro'); window.location='Agregar.php'</script>";
    }else{
    $sql= "INSERT INTO product (estante, lado, entrepano, posicion, dependencia, serie, subserie, num_Caja, empresa) values ('$estante','$lado','$entrepano','$posicion', '$dependencia', '$serie', '$subserie',  '$num_Caja', '$empresa')";
    $rta= mysqli_query($mysqli,$sql);
    $maxPag = $_SESSION['maxPag'];
    if ($rta) {

        $consulta = "SELECT MAX(id) AS id FROM product";
        $ejecutarConsulta = mysqli_query($mysqli,$consulta);
        $fila = mysqli_fetch_assoc($ejecutarConsulta);
        
        include('../phpqrcode/qrlib.php'); 

        $contenido = $fila['id'];

        QRcode::png($contenido,"../media/codigosqr/".$fila['id'].".png",QR_ECLEVEL_L,10,2);

        header("location:Agregar.php?dependencia=&serie=".$serie."&subserie=&descripcion=&documento=&numCaja=&empresa=".$empresa."&pagina=".$maxPag."&button=true#id".$contenido);
    
    }
    }

    if (!$rta) {
        echo "No se pudo insertar!";
    }
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $consultaBorrar = "SELECT * FROM product WHERE id = '$id'";
    $ejectconsultaBorrar = mysqli_query($mysqli,$consultaBorrar);
    $datos = mysqli_fetch_assoc($ejectconsultaBorrar);

    $id = $datos['id'];
    $estante = $datos['estante'];
    $lado = $datos['lado'];
    $entrepano = $datos['entrepano'];
    $posicion = $datos['posicion'];
    $dependencia = $datos['dependencia'];
    $serie = $datos['serie'];
    $subserie = $datos['subserie'];
    $num_Caja = $datos['num_Caja'];
    $empresa = $datos['empresa'];

    //procedemos a eliminar el registro
    $borrar = "DELETE FROM product WHERE id = '$id'";
    if ($borrar) {
        echo "<script>alert('No es posible borrar este registro'); window.location='Agregar.php'</script>";
    }
    $executeBorrar = mysqli_query($mysqli,$borrar);


    $pagina = $_GET['pagina'];
    header("location:Agregar.php?pagina=".$pagina); // redireccionamos al usuario al inventario con la pagina en la que se encontraba actualmente
    }  
//----------------------------------------------------
?>
