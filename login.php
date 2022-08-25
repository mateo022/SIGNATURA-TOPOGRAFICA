<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="shortcut icon" href="media\Logos\ICONODATA.png" />
     <!--font awesome-->
     <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>   
	<title>DATASIGN.SOFT</title>
</head>
<body>
<div class="wrapper">
  <div class="Container">
        <div class="nav">
            <div class="config">
                <button  id="config"><img src="media/Logos/menu.png" id="icon_menu"></button>
            </div>
            <div class="box_collapse" id="box_collapse">
                <div class="logo">
                    <img src="media\Logos\loguito.png">
                </div>
                <div class="menu">
                    <ul class="navMenu">
                        <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="empresas/Empresas.php"> <i class="fa-solid fa-building-circle-check"></i> Empresas </a></li>
                        <li><a href="TI/TTIC.php"> <i class="fa-solid fa-people-group"></i> Equipo TI</a></li>
                        <li><a href="https://data3000sas.com/" target="_blank"><i class="fa-solid fa-envelopes-bulk"></i> Acerca de nosotros</a></li>
                        </ul>
                </div>
            </div>
        </div>
        <header>
            <form action="php/comprobar.php" method="POST">
                <h2>Inicio de sesion Admin</h2>
                <input type="text" placeholder="Nombre de usuario" name="user" required>
                <input type="password" placeholder="Contraseña" name="password" required>
                <input type="submit" value="Iniciar sesion" name="iniciar" class="iniciar">
                <a href="registro.php">Registrarse</a>
            </form>
        </header>  
    </div>	
</div>

<script src="js/collapse.js"></script>
</body>
</html>