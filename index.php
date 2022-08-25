<?php
require_once("php/database.php"); //Llama la conexion de la base de datos
session_name("signatura");
session_start();//inicia la sesion si el usuario se guardo en una variable global

if (isset($_SESSION['user'])) {//verificamos si la variable del usuario esta establecido 

    $user = $_SESSION['user'];
}
//----------------------------------------------------
if (isset($_POST['cambiarPassword'])) {
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];

    if ($pass1 == $pass2) {
         
    $update = "UPDATE users SET  password = '$pass1' WHERE email = '$user'";
    $ejectUpdate = mysqli_query($mysqli,$update);

    session_destroy();
    echo "<script>alert('Contraseña cambiada con exitó, iniciar sesion nuevamente');window.location='login.php'</script>";
    }else {
        echo "<script>alert('Contraseñas no coiciden')</script>";
    }
}
//---------
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="shortcut icon" href="media\Logos\ICONODATA.png" />
     <!--bootstrap-->
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      <!--font awesome-->
     <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>   
	<title>DATASIGN.SOFT</title>
</head>
<body>
<div class="wrapper">
  <div class="Container">
        <div class="nav">
                <div class="logo">
                    <img src="media\Logos\loguito.png">
                </div>
                <div class="menu">
                    <ul class="navMenu">
                    <li><a href="#"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="empresas/Empresas.php"> <i class="fa-solid fa-building-circle-check"></i> Empresas </a></li>
                        <li><a href="TI/TTIC.php"> <i class="fa-solid fa-people-group"></i> Equipo TI</a></li>
                        <li><a href="https://data3000sas.com/" target="_blank"><i class="fa-solid fa-envelopes-bulk"></i> Acerca de nosotros</a></li>
                        
                        <?php
                        if (isset($_SESSION['user'])) {
                            ?>
                            <li><a type="button" data-toggle="modal" data-target="#administracion" class="text-white"><i class="fa-solid fa-screwdriver-wrench"></i> Administracion </a></li>
                            <li><a type="button" data-toggle="modal" data-target="#configuraciones"><i class="fa-solid fa-gear text-white"></i></a></li>
                            <li><form action="index.php" method="POST"><input type="submit" name="cerrar"  class="button_cerrar" value="Cerrar Sesion"></form></li>
                            <?php
                        } else {
                            ?>
                            <li><a href="login.php" class="button_login">Iniciar Sesion</a></li>
                            <?php
                        }
                        ?>
                        <?php
                if (isset($_POST['cerrar'])) {
                    session_destroy();
                    echo "<script>window.location='login.php'</script>";
                }
                //----------------------------------------------------
                ?>
                    </ul>
                </div>
        </div>
                    </ul>
                </div>
        </div>
        <header>
            <h1>SIGNATURA TOPOGRAFICA <br> DATA 3000 SAS</h1>
            <p>Manizales / Caldas / Colombia</p>
            <button type="button"><a href="AgregarColab.php" >BUSCADOR</a></button>
        </header>     
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
            <a href="inventario/Agregar.php"  class="btn btn-outline-dark" > <i class="fa-solid fa-file-pen"></i> Inventario</a>
             </div>
             <div class="modal-body">
             <a href="movimientos/index.php"  class="btn btn-outline-dark" > <i class="fa-solid fa-user-secret"></i> Movimientos</a>
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
 <script src="js/jquery.js"></script>
    <!--script bootstrap-->
    <script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="js/collapse.js"></script>
</body>
</html>