<?php
require_once("../php/database.php");
session_name("signatura");
session_start();
if (isset($_SESSION['user'])) { 
    if (isset($_POST['guardar'])) {
        $id = $_POST['id'];
        $estante = $_POST['estante'];
        $lado = $_POST['lado'];
        $entrepano = $_POST['entrepano'];
        $posicion = $_POST['posicion'];
        $Dependencia = $_POST['Dependencia'];
        $Serie = $_POST['Serie'];
        $Subserie = $_POST['subserie'];
        $Numcaja = $_POST['Numcaja'];
        $empresa = $_POST['empresa'];
        $pagina = $_POST['pagina'];
 

        $update = "UPDATE product SET estante = '$estante' , lado = '$lado', entrepano = '$entrepano' , posicion = '$posicion' , dependencia = '$Dependencia' , serie = '$Serie' , subserie = '$Subserie' , num_Caja = '$Numcaja' , empresa = '$empresa' WHERE id = '$id'";
        $ExecuteUpdate = mysqli_query($mysqli, $update);

        header("location:Agregar.php?pagina=".$pagina);
    }
    if (isset($_POST['borrar'])) {
            $id = $_POST['id'];
            $id2 = $id + 1;
            $Serie = $_POST['Serie'];
            $empresa = $_POST['empresa'];

        if ($_POST['borrar'] == 0) {
            header("location:Agregar.php?dependencia=&serie=".$Serie."&subserie=&descripcion=&documento=&numCaja=&empresa=".$empresa."&button=true#id".$id);
        } else {
            unlink("../media/codigosqr/".$id.".png");
            $delete = "DELETE FROM product WHERE id = '$id'";
            $executeDelete = mysqli_query($mysqli,$delete);
            header("location:Agregar.php");
        }
    }
    //FILTRO ESTANTE
if (!isset($_SESSION['estanteFiltrado'])) {
    $_SESSION['estanteFiltrado'] = '%%';
}
if (isset($_GET['estanteFiltrado'])) {
    if ($_GET['estanteFiltrado'] == '') {
        $_SESSION['estanteFiltrado'] = '%%';
    } else {
    $_SESSION['estanteFiltrado'] = "%".$_GET['estanteFiltrado']."%";
    }
    $estanteFiltrado = $_SESSION['estanteFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
if (isset($_GET['estanteVacias'])) {
    $_SESSION['estanteFiltrado'] = $_GET['estanteVacias'];
    $estanteFiltrado = $_SESSION['estanteFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
$estanteFiltrado = $_SESSION['estanteFiltrado'];

//FILTRO LADO
if (!isset($_SESSION['ladoFiltrado'])) {
    $_SESSION['ladoFiltrado'] = '%%';
}
if (isset($_GET['ladoFiltrado'])) {
    if ($_GET['ladoFiltrado'] == '') {
        $_SESSION['ladoFiltrado'] = '%%';
    } else {
    $_SESSION['ladoFiltrado'] = "%".$_GET['ladoFiltrado']."%";
    }
    $ladoFiltrado = $_SESSION['ladoFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
if (isset($_GET['ladoVacias'])) {
    $_SESSION['ladoFiltrado'] = $_GET['ladoVacias'];
    $ladoFiltrado = $_SESSION['ladoFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
$ladoFiltrado = $_SESSION['ladoFiltrado'];

//FILTRO ENTREPAÑO
if (!isset($_SESSION['entrepanoFiltrado'])) {
    $_SESSION['entrepanoFiltrado'] = '%%';
}
if (isset($_GET['entrepanoFiltrado'])) {
    if ($_GET['entrepanoFiltrado'] == '') {
        $_SESSION['entrepanoFiltrado'] = '%%';
    } else {
    $_SESSION['entrepanoFiltrado'] = "%".$_GET['entrepanoFiltrado']."%";
    }
    $entrepanoFiltrado = $_SESSION['entrepanoFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
if (isset($_GET['entrepanoVacias'])) {
    $_SESSION['entrepanoFiltrado'] = $_GET['entrepanoVacias'];
    $entrepanoFiltrado = $_SESSION['entrepanoFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
$entrepanoFiltrado = $_SESSION['entrepanoFiltrado'];

//FILTRO POSICION
if (!isset($_SESSION['posicionFiltrado'])) {
    $_SESSION['posicionFiltrado'] = '%%';
}
if (isset($_GET['posicionFiltrado'])) {
    if ($_GET['posicionFiltrado'] == '') {
        $_SESSION['posicionFiltrado'] = '%%';
    } else {
    $_SESSION['posicionFiltrado'] = "%".$_GET['posicionFiltrado']."%";
    }
    $posicionFiltrado = $_SESSION['posicionFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
if (isset($_GET['posicionVacias'])) {
    $_SESSION['posicionFiltrado'] = $_GET['posicionVacias'];
    $posicionFiltrado = $_SESSION['posicionFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
$posicionFiltrado = $_SESSION['posicionFiltrado'];

//FILTRO dependencia
if (!isset($_SESSION['dependenciaFiltrado'])) {
    $_SESSION['dependenciaFiltrado'] = '%%';
}
if (isset($_GET['dependenciaFiltrado'])) {
    if ($_GET['dependenciaFiltrado'] == '') {
        $_SESSION['dependenciaFiltrado'] = '%%';
    } else {
    $_SESSION['dependenciaFiltrado'] = "%".$_GET['dependenciaFiltrado']."%";
    }
    $dependenciaFiltrado = $_SESSION['dependenciaFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
if (isset($_GET['dependenciaVacias'])) {
    $_SESSION['dependenciaFiltrado'] = $_GET['dependenciaVacias'];
    $dependenciaFiltrado = $_SESSION['dependenciaFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
$dependenciaFiltrado = $_SESSION['dependenciaFiltrado'];

//FILTRO serie
if (!isset($_SESSION['serieFiltrado'])) {
    $_SESSION['serieFiltrado'] = '%%';
}
if (isset($_GET['serieFiltrado'])) {
    if ($_GET['serieFiltrado'] == '') {
        $_SESSION['serieFiltrado'] = '%%';
    } else {
    $_SESSION['serieFiltrado'] = "%".$_GET['serieFiltrado']."%";
    }
    $serieFiltrado = $_SESSION['serieFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
if (isset($_GET['serieVacias'])) {
    $_SESSION['serieFiltrado'] = $_GET['serieVacias'];
    $serieFiltrado = $_SESSION['serieFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
$serieFiltrado = $_SESSION['serieFiltrado'];

//FILTRO subserie
if (!isset($_SESSION['subserieFiltrado'])) {
    $_SESSION['subserieFiltrado'] = '%%';
}
if (isset($_GET['subserieFiltrado'])) {
    if ($_GET['subserieFiltrado'] == '') {
        $_SESSION['subserieFiltrado'] = '%%';
    } else {
    $_SESSION['subserieFiltrado'] = "%".$_GET['subserieFiltrado']."%";
    }
    $subserieFiltrado = $_SESSION['subserieFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
if (isset($_GET['serieVacias'])) {
    $_SESSION['subserieFiltrado'] = $_GET['serieVacias'];
    $subserieFiltrado = $_SESSION['subserieFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
$subserieFiltrado = $_SESSION['subserieFiltrado'];

//FILTRO numCaja
if (!isset($_SESSION['numCajaFiltrado'])) {
    $_SESSION['numCajaFiltrado'] = '%%';
}
if (isset($_GET['numCajaFiltrado'])) {
    if ($_GET['numCajaFiltrado'] == '') {
        $_SESSION['numCajaFiltrado'] = '%%';
    } else {
    $_SESSION['numCajaFiltrado'] = "%".$_GET['numCajaFiltrado'];
    }
    $numCajaFiltrado = $_SESSION['numCajaFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
if (isset($_GET['numCajaVacias'])) {
    $_SESSION['numCajaFiltrado'] = $_GET['numCajaVacias'];
    $numCajaFiltrado = $_SESSION['numCajaFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
$numCajaFiltrado = $_SESSION['numCajaFiltrado'];

//FILTRO empresa
if (!isset($_SESSION['empresaFiltrado'])) {
    $_SESSION['empresaFiltrado'] = '%%';
}
if (isset($_GET['empresaFiltrado'])) {
    if ($_GET['empresaFiltrado'] == '') {
        $_SESSION['empresaFiltrado'] = '%%';
    } else {
    $_SESSION['empresaFiltrado'] = "%".$_GET['empresaFiltrado']."%";
    }
    $empresaFiltrado = $_SESSION['empresaFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
if (isset($_GET['empresaVacias'])) {
    $_SESSION['empresaFiltrado'] = $_GET['empresaVacias'];
    $empresaFiltrado = $_SESSION['empresaFiltrado'];
    echo "<script>window.location='Agregar.php'</script>";
}
$empresaFiltrado = $_SESSION['empresaFiltrado'];

 //----------------------------------------------------

        //QUITAR FILTROS
        if (isset($_POST['quitarFiltros'])) {
            $_SESSION['estanteFiltrado'] = "%".$_POST['estanteFiltrado']."%";
            $_SESSION['ladoFiltrado'] = "%".$_POST['ladoFiltrado']."%";
            $_SESSION['entrepanoFiltrado'] = "%".$_POST['entrepanoFiltrado']."%";
            $_SESSION['posicionFiltrado'] = "%".$_POST['posicionFiltrado']."%";
            $_SESSION['dependenciaFiltrado'] = "%".$_POST['dependenciaFiltrado']."%";
            $_SESSION['subserieFiltrado'] = "%".$_POST['subserieFiltrado']."%";
            $_SESSION['serieFiltrado'] = "%".$_POST['serieFiltrado']."%";
            $_SESSION['numCajaFiltrado'] = "%".$_POST['numCajaFiltrado']."%";
            $_SESSION['empresaFiltrado'] = "%".$_POST['empresaFiltrado']."%";

            echo "<script>window.location='Agregar.php'</script>";
        }
//----------------------------------------------------
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>DATASIGN.SOFT </title>
    <meta charset="utf8" />
    <link rel="shortcut icon" href="../media\ICONODATA.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="shortcut icon" href="../media\Logos\ICONODATA.png" />
    <!--font awesome-->
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<body>
<div class="Container">
    <div class="wrapper">
            <div class="nav">
                    <div class="logo">
                        <img src="../media\Logos\loguito.png">
                    </div>
                    <div class="menu">
                        <ul class="navMenu">
                        <li><a href="../index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="../empresas/Empresas.php"> <i class="fa-solid fa-building-circle-check"></i> Empresas </a></li>
                        <li><a href="../TI/TTIC.php"> <i class="fa-solid fa-people-group"></i> Team Tic</a></li>
                        <li><a href="https://data3000sas.com/" target="_blank"><i class="fa-solid fa-envelopes-bulk"></i> Acerca de nosotros</a></li>
                        
                        <?php
                        if (isset($_SESSION['user'])) {
                            ?>
                            <li><a type="button" data-toggle="modal" data-target="#administracion" class="text-white"><i class="fa-solid fa-screwdriver-wrench"></i> Administracion </a></li>
                            <li><a type="button" data-toggle="modal" data-target="#configuraciones"><i class="fa-solid fa-gear text-white"></i></a></li>
                            <li><form action="../index.php" method="POST"><input type="submit" name="cerrar"  class="button_cerrar" value="Cerrar Sesion"></form></li>
                            <?php
                        } else {
                            ?>
                            <li><a href="../login.php" class="button_login">Iniciar Sesion</a></li>
                            <?php
                        }
                        ?>
                        <?php
                if (isset($_POST['cerrar'])) {
                    session_destroy();
                    echo "<script>window.location='../login.php'</script>";
                }
                //----------------------------------------------------
                ?>
                    </ul>
                </div>
        </div>
            <div class="header2">
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">Agregar posicion</button>
            </div>
<div class="container1">
<div class="row" >
    <div class="scroll">
        <table class="table">
        <tr class="sticky-top">
            <th>
                <div class="dropdown">
                <a class="btn dropdown-toggle <?php if ($_SESSION['estanteFiltrado'] != '%%'){ echo "bg-light text-black";} else { echo "text-white";}?>" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    N° Estante
                </a>
                <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuLink">
                    <form action="Agregar.php" method="GET" class="form-group">
                        <input type="text" class="form-control" name="estanteFiltrado">
                        <button type="submit" class="btn" name="filtrarEstante"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <form action="Agregar.php" method="GET" class="form-group">
                        <button type="submit" class="btn btn-outline-dark" name="estanteVacias">Vacias</button>
                    </form>
                </div>
            </div>  
            </th>   
                <th>
                <div class="dropdown">
                <a class="btn dropdown-toggle <?php if ($_SESSION['ladoFiltrado'] != '%%'){ echo "bg-light text-black";} else { echo "text-white";}?>" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    Lado
                </a>
                <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuLink">
                    <form action="Agregar.php" method="GET" class="form-group">
                        <input type="text" class="form-control" name="ladoFiltrado">
                        <button type="submit" class="btn" name="filtrarLado"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <form action="Agregar.php" method="GET" class="form-group">
                        <button type="submit" class="btn btn-outline-dark" name="ladoVacias">Vacias</button>
                    </form>
                </div>
            </div>  
                </th>
                <th>
                <div class="dropdown">
                <a class="btn dropdown-toggle <?php if ($_SESSION['entrepanoFiltrado'] != '%%'){ echo "bg-light text-black";} else { echo "text-white";}?>" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    Entrepaño
                </a>
                <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuLink">
                    <form action="Agregar.php" method="GET" class="form-group">
                        <input type="text" class="form-control" name="entrepanoFiltrado">
                        <button type="submit" class="btn" name="filtrarEntrepano"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <form action="Agregar.php" method="GET" class="form-group">
                        <button type="submit" class="btn btn-outline-dark" name="entrepanoVacias">Vacias</button>
                    </form>
                </div>
            </div>  
                </th>
                <th>
                <div class="dropdown">
                <a class="btn dropdown-toggle <?php if ($_SESSION['posicionFiltrado'] != '%%'){ echo "bg-light text-black";} else { echo "text-white";}?>" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    Posición
                </a>
                <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuLink">
                    <form action="Agregar.php" method="GET" class="form-group">
                        <input type="text" class="form-control" name="posicionFiltrado">
                        <button type="submit" class="btn" name="filtrarPosicion"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <form action="Agregar.php" method="GET" class="form-group">
                        <button type="submit" class="btn btn-outline-dark" name="posicionVacias">Vacias</button>
                    </form>
                </div>
            </div>  
                </th>
                <th>
                <div class="dropdown">
                <a class="btn dropdown-toggle <?php if ($_SESSION['dependenciaFiltrado'] != '%%'){ echo "bg-light text-black";} else { echo "text-white";}?>" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    Depedencia
                </a>
                <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuLink">
                    <form action="Agregar.php" method="GET" class="form-group">
                        <input type="text" class="form-control" name="dependenciaFiltrado">
                        <button type="submit" class="btn" name="filtrarDependencia"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <form action="Agregar.php" method="GET" class="form-group">
                        <button type="submit" class="btn btn-outline-dark" name="dependenciaVacias">Vacias</button>
                    </form>
                </div>
            </div>  
                </th>
                <th>
                <div class="dropdown">
                <a class="btn dropdown-toggle <?php if ($_SESSION['serieFiltrado'] != '%%'){ echo "bg-light text-black";} else { echo "text-white";}?>" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    Serie
                </a>
                <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuLink">
                    <form action="Agregar.php" method="GET" class="form-group">
                        <input type="text" class="form-control" name="serieFiltrado">
                        <button type="submit" class="btn" name="filtrarSerie"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <form action="Agregar.php" method="GET" class="form-group">
                        <button type="submit" class="btn btn-outline-dark" name="serieVacias">Vacias</button>
                    </form>
                </div>
            </div>  
         </th>
                <th>
                <div class="dropdown">
                <a class="btn dropdown-toggle <?php if ($_SESSION['subserieFiltrado'] != '%%'){ echo "bg-light text-black";} else { echo "text-white";}?>" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    Subserie
                </a>
                <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuLink">
                    <form action="Agregar.php" method="GET" class="form-group">
                        <input type="text" class="form-control" name="subserieFiltrado">
                        <button type="submit" class="btn" name="filtrarsubserie"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <form action="Agregar.php" method="GET" class="form-group">
                        <button type="submit" class="btn btn-outline-dark" name="subserieVacias">Vacias</button>
                    </form>
                </div>
            </div>  
                </th>
                <th>
                <div class="dropdown">
                <a class="btn dropdown-toggle <?php if ($_SESSION['numCajaFiltrado'] != '%%'){ echo "bg-light text-black";} else { echo "text-white";}?>" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    Número caja
                </a>
                <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuLink">
                    <form action="Agregar.php" method="GET" class="form-group">
                        <input type="text" class="form-control" name="numCajaFiltrado">
                        <button type="submit" class="btn" name="filtrarNumCaja"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <form action="Agregar.php" method="GET" class="form-group">
                        <button type="submit" class="btn btn-outline-dark" name="numCajaVacias">Vacias</button>
                    </form>
                </div>
            </div>  
                </th>
                <th>
                <div class="dropdown">
                <a class="btn dropdown-toggle <?php if ($_SESSION['empresaFiltrado'] != '%%'){ echo "bg-light text-black";} else { echo "text-white";}?>" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    empresa
                </a>
                <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuLink">
                    <form action="Agregar.php" method="GET" class="form-group">
                        <input type="text" class="form-control" name="empresaFiltrado">
                        <button type="submit" class="btn" name="filtrarEmpresa"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <form action="Agregar.php" method="GET" class="form-group">
                        <button type="submit" class="btn btn-outline-dark" name="empresaVacias">Vacias</button>
                    </form>
                </div>
            </div>  
                </th>
                <th class="text-white">CODIGO QR</th>
                <th colspan="3"></span>

                <div class="dropdown">
                <a class="btn text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-gear"></i>
                </a>
                <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuLink">
                    <form action="Agregar.php" method="POST" class="form-group">
                        <input type="hidden" class="form-control" name="estanteFiltrado">
                        <input type="hidden" class="form-control" name="ladoFiltrado">
                        <input type="hidden" class="form-control" name="entrepanoFiltrado">
                        <input type="hidden" class="form-control" name="posicionFiltrado">
                        <input type="hidden" class="form-control" name="dependenciaFiltrado">
                        <input type="hidden" class="form-control" name="subserieFiltrado">     
                        <input type="hidden" class="form-control" name="serieFiltrado">
                        <input type="hidden" class="form-control" name="numCajaFiltrado">
                        <input type="hidden" class="form-control" name="empresaFiltrado">
                        <button type="submit" class="btn btn-outline-dark" name="quitarFiltros">Quitar filtros</button>
                    </form>
                </div>
                </div>
            </th>
            </tr>
        <?php
        /*
            PAGINACIÓN
            el siguiente bloque de codigo sirve para configurar la paginacion
            -si el usuario elige una cantidad de registro por paginas isset($_GET['regxpag']
                creamos una variable global con su valor
                $_SESSION['reg_x_pag'] = $_GET['regxpag'];
            
            -si la variable global $_SESSION['reg_x_pag'] existe creamos una variable $reg_x_pag y le asignamos $_SESSION['reg_x_pag']
                $reg_x_pag = $_SESSION['reg_x_pag'];
            
                si no existe $_SESSION['reg_x_pag'] le damos por defecto a $reg_x_pag un valor de 50
                    $reg_x_pag = 50;
            
            -si no hay ninguna variable enviada por metodo GET redirigimos el usuario a la misma pagina y dejamos por defecto que la pagina sea 1
                if (!$_GET) {
                echo "<script>window.location='inventarioGeneral.php?pagina=1'</script>";
                }
            */
            if (isset($_GET['regxpag'])) {
                $_SESSION['reg_x_pag'] = $_GET['regxpag'];
            }

            if (isset($_SESSION['reg_x_pag'])) {
                $reg_x_pag = $_SESSION['reg_x_pag'];
            } else {
                $reg_x_pag = 50;
            }
            if (!$_GET) {
                echo "<script>window.location='Agregar.php?pagina=1'</script>";
            }
            /*
            PAGINACION
            -cada vez que el usuario haga clic en siguiente o atras recibimos ese valor y lo guardamos en una variable pagina
                $pagina = $_GET['pagina'];
            
            -creamos una variable $iniciar que indicara desde donde debe comenzar o continuar la paginacion, es igual a la pagina donde estamos - 1 multiplicado por los registros por pagina 
                $iniciar = ($_GET['pagina']-1)*$reg_x_pag;
            
            -creamos la consulta y la filtramos por las variables creadas en los filtros de arriba, ademas le damos un limit con la variable $iniciar y $reg_x_pag
                $selectAll = "SELECT * FROM fuid WHERE idSerie = '$idSerie' AND numCaja LIKE '$numCajaFiltrado' AND numReg LIKE '$numRegFiltrado' AND descripcion LIKE '$descripcionFiltrado' AND numIdentificacion LIKE '$identificacionFiltrado' AND nombre LIKE '$nombreFiltrado' AND fecha LIKE '$fechaFiltrado' AND estado LIKE '$estadoFiltrado' AND folios LIKE '$foliosFiltrado' AND novedad LIKE '$novedadFiltrado' AND descriptor LIKE '$descriptorFiltrado' ORDER BY numCaja,numReg ASC LIMIT $iniciar,$reg_x_pag";
            
            -creamos una consulta para saber la cantidad de registros que hay y de esta manera poder hacer el calculo de la cantidad de paginas que hayan
                $selectCount = "SELECT COUNT(numOrden) as numOrden FROM fuid WHERE idSerie = '$idSerie' AND numCaja LIKE '$numCajaFiltrado' AND numReg LIKE '$numRegFiltrado' AND descripcion LIKE '$descripcionFiltrado' AND numIdentificacion LIKE '$identificacionFiltrado' AND nombre LIKE '$nombreFiltrado' AND fecha LIKE '$fechaFiltrado' AND estado LIKE '$estadoFiltrado' AND folios LIKE '$foliosFiltrado' AND novedad LIKE '$novedadFiltrado' AND descriptor LIKE '$descriptorFiltrado'";

            -si se ejecuto la consulta anterior extraemos el valor y creamos una variable $maxPag con el calculo realizado.
                $idCount = mysqli_fetch_assoc($executeSelectCount);
                $maxPag = ceil($idCount['numOrden'] / $reg_x_pag);
            
            -si no se ejecuta la cantidad de registros sera 50 por defecto

            -creamos una variable $fecha y le asignamos la fecha actual
                date_default_timezone_set('America/Bogota');
                $fecha = date('d/m/Y', time());
            
            -extraemos los datos de la consulta y los guardamos en un arreglo, posteriormente los mostramos en un bucle while
                while ($reg = mysqli_fetch_assoc($executeSelectAll){}
                    comparamos la fecha actual con la de la base de datos y si son iguales mostramos los resultados, pero no dejamos modificar
                        if ($reg['fechaIngreso'] == $fecha ) {}
                    si no es igual mostramos los registros, pero si dejamos modificar
            */
            $pagina = $_GET['pagina'];
            $iniciar = ($_GET['pagina']-1)*$reg_x_pag;

            $selectAll = "SELECT * FROM product WHERE estante LIKE '$estanteFiltrado' AND lado LIKE '$ladoFiltrado' AND entrepano LIKE '$entrepanoFiltrado' AND posicion LIKE '$posicionFiltrado' AND dependencia LIKE '$dependenciaFiltrado' AND serie LIKE '$serieFiltrado' AND subserie LIKE '$subserieFiltrado' AND num_Caja LIKE '$numCajaFiltrado' AND empresa LIKE '$empresaFiltrado' LIMIT $iniciar,$reg_x_pag";
            $executeSelectAll = mysqli_query($mysqli,$selectAll);
            
            $selectCount = "SELECT COUNT(id) as id FROM product WHERE estante LIKE '$estanteFiltrado' AND lado LIKE '$ladoFiltrado' AND entrepano LIKE '$entrepanoFiltrado' AND posicion LIKE '$posicionFiltrado' AND dependencia LIKE '$dependenciaFiltrado' AND serie LIKE '$serieFiltrado' AND subserie LIKE '$subserieFiltrado' AND num_Caja LIKE '$numCajaFiltrado' AND empresa LIKE '$empresaFiltrado'";
            $executeSelectCount = mysqli_query($mysqli,$selectCount);
            $idCount = mysqli_fetch_assoc($executeSelectCount);
            $maxPag = ceil(($idCount['id']+0.1) / $reg_x_pag);
            $_SESSION['maxPag'] = $maxPag;

            $i = 0;

        while($mostrar = mysqli_fetch_assoc($executeSelectAll)){
        ?>
                <form action="Agregar.php" method="POST">
                <tr id="id<?php echo $mostrar['id'];?>">
                    <input type="hidden" name="pagina" value="<?php echo $pagina;?>">
                    <input type="hidden" name="id" value="<?php echo $mostrar['id'];?>">
                    <td><input type="text" value="<?php echo $mostrar['estante']?>" name="estante" class="input_reg Num"></td>
                    <td><input type="text" value="<?php echo $mostrar['lado']?>" name="lado" class="input_reg Num"></td>
                    <td><input type="text" value="<?php echo $mostrar['entrepano']?>" name="entrepano" class="input_reg Num"></td>
                    <td><input type="text" value="<?php echo $mostrar['posicion']?>" name="posicion" class="input_reg Num"></td>
                    <td><input type="text" value="<?php echo $mostrar['dependencia']?>" name="Dependencia" class="input_reg"></td>
                    <td><input type="text" value="<?php echo $mostrar['serie']?>" name="Serie" class="input_reg"></td>
                    <td><input type="text" value="<?php echo $mostrar['subserie']?>" name="subserie" class="input_reg"></td>
                    <td><input type="text" value="<?php echo $mostrar['num_Caja']?>" name="Numcaja" class="input_reg Num"></td>
                    <td><textarea name="empresa" class="input_reg textarea" id="" cols="30" rows="10"><?php echo $mostrar['empresa']?></textarea></td>
                    <td><a href="../codigoQR.php?id=<?php echo $mostrar['id'];?>" target="_blank"><img src="../media/codigosqr/<?php echo $mostrar['id']?>.png"></a></td> 
                    <td><button type="submit" name="guardar" class="btn"><i class="fa-solid fa-floppy-disk"></i></button></td>
                    <td> <a onclick="if(confirm('Deseas Borrar este registro?')){window.location = 'np_insertar.php?id=<?php echo $mostrar['id'];?>&pagina=<?php echo $pagina;?>'} else {alert('Operación cancelada')}" class="btn"><i class="fa-solid fa-trash-can"></i></a></td>
                 </tr>
                </form>
        <?php
        }
        ?>
        </table>   
    </div>
    <div class="pagination">
        <ul>
            <!--PAGINACION
                -si la pagina es distinta al maximo de paginas este aumenta en 1 cada vez que haga clic en el
                    if($pagina != $maxPag){ echo $pagina + 1;} 
                -si la pagina llega al maximo de paginas , cada vez que hagan clic en siguiente este ya no aumenta si no que sera igual a maxPag
                    else { echo $maxPag;}
            -->
            <li class="page-item"><a class="btn btn-outline-light mx-2" href="Agregar.php?pagina=<?php if($pagina != 1){ echo $pagina - 1;} else { echo 1;}?>">Anterior</a></li>
            <li class="page-item"><a class="btn btn-outline-light mx-2" href="Agregar.php?pagina=<?php if($pagina != $maxPag){ echo $pagina + 1;} else { echo $maxPag;}?>">Siguiente</a></li>
            <div class="dropdown">
                <!--enlace para ver la cantidad de paginas-->
                <a class="btn dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    Pagina <?php echo $pagina;?>
                </a>
                <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuLink">
                    <div>
                        <ul class="scroll-pag">
                        <?php
                        /*
                        el siguiente bucle permite ver la cantidad de paginas que hay utilizando la variable maxPag

                        -si el usuario hace clic en una pagina lo redirigimos a esta misma con la pagina seleccionada
                            <a href="inventarioGeneral.php?pagina=<?php echo $i;?>"><?php echo $i;?></a>
                        */
                        $i = 1;
                        while ($i <= $maxPag) {
                        ?>
                        <li>
                            <a href="Agregar.php?pagina=<?php echo $i;?>" class="btn <?php if($i == $pagina){ echo "btn-primary";}?>"><?php echo $i;?></a>
                        </li>
                        <?php
                        $i++;
                        }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <a class="btn dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    <!--enlace para ver la cantidad de registros a mostrar-->
                    Cantidad <?php echo $reg_x_pag;?>
                </a>
                <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuLink">
                    <div>
                        <a href="Agregar.php?pagina=<?php echo 1;?>&regxpag=10" class="btn <?php if(isset($_SESSION['reg_x_pag'])){if($_SESSION['reg_x_pag'] == 10){ echo "btn-primary";}}?>">10</a>
                        <a href="Agregar.php?pagina=<?php echo 1;?>&regxpag=20" class="btn <?php if(isset($_SESSION['reg_x_pag'])){if($_SESSION['reg_x_pag'] == 20){ echo "btn-primary";}}?>">20</a>
                        <a href="Agregar.php?pagina=<?php echo 1;?>&regxpag=50" class="btn <?php if(isset($_SESSION['reg_x_pag'])){if($_SESSION['reg_x_pag'] == 50){ echo "btn-primary";}}?>">50</a>
                    </div>
                </div>
            </div>
        </ul>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Posición</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="np_insertar.php" method="POST">
                <input type="hidden" name="pagina" value="<?php echo $pagina;?>">
                <input type="text" placeholder="Estante" name="estante" required>
                <select name="lado">
                    <option value="0">Lado</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                </select>
                <input type="text" placeholder="Entrepano" name="entrepano" required>
                <input type="text" placeholder="Posicion" name="posicion" required>
                <input type="text" placeholder="Dependencia" name="dependencia" required>
                <input type="text" placeholder="Serie" name="serie" required>
                <input type="text" placeholder="Subserie" name="subserie">
                <input type="text" placeholder="Numero de caja" name="num_Caja" required>
                <input type="text" placeholder="empresa" name="empresa" required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" name="Insertar">Insertar</button>
        </form>
        </div>
        </div>
    </div>
    </div>
</div>
 <!-- Modal Administracion -->
 <div class="modal fade" id="administracion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Administración</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
             <div class="modal-body">
             <a href="../movimientos/index.php"  class="btn btn-outline-dark" > <i class="fa-solid fa-user-secret"></i> Movimientos</a>
             </div>
             <div class="modal-body">
             <form action="php/descargar.php" method="post"><input type="submit" name="descargar"  style="display:none;" id="backup"><label for="backup" class="btn btn-outline-dark"  > <i class="fa-solid fa-database"></i> Crear Backup de la base de datos</label> </form>
             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>
<!-- Modal configuraciones -->
<div class="modal fade" id="configuraciones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Configuraciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <a type="button" data-toggle="modal" data-target="#cambiarcontraseña"><i class="fa-solid fa-address-card"></i> Cambiar contraseña</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal cambiar contraseña-->
    <div class="modal fade" id="cambiarcontraseña" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña <span class="text-primary"><?php echo $_SESSION['user'];?></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
            <div class="modal-body">
                    <form action="index.php" method="post" class="form-group">
                    <button type="button" class="btn" onclick="mostrarPassword()"><i class="fa-solid fa-eye"></i></button>
                    <input type="password" name="password1" placeholder="Contraseña nueva" class="form-control mt-2" minlength="5" id="password1" required>
                    <input type="password" name="password2" placeholder="Repetir Contraseña" class="form-control mt-2" min="5" id="password2" required>
                    <script>
                //----------------------------------------------------
                /*
                funcion para mostrar la contraseña
                    function mostrarPassword(){}

                llamamos los dos inputs de las contraseñas
                    input = document.getElementById('password1');
                    input2 = document.getElementById('password2');
                
                verificamos si los input son tipo password o text y cambiamos su tipo
                            if (input.type == "password") {
                                input.type = 'text';
                                input2.type = 'text';
                            } else {
                                input.type = 'password';
                                input2.type = 'password';
                            }
                */
                        function mostrarPassword(){
                            input = document.getElementById('password1');
                            input2 = document.getElementById('password2');
                            if (input.type == "password") {
                                input.type = 'text';
                                input2.type = 'text';
                            } else {
                                input.type = 'password';
                                input2.type = 'password';
                            }
                        }
                //----------------------------------------------------
                    </script>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" name="cambiarPassword">Cambiar</button>
                    </form>
            </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>

<?php
if (isset($_POST['cerrar'])) {
    session_destroy();
    echo "<script>window.location='../index.php'</script>";
}

} else {
    session_destroy();
    echo "<script>alert('Por favor inicia sesion')</script>";
    echo "<script>window.location='../login.php'</script>";
}
?>
