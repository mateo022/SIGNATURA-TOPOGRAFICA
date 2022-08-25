<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="shortcut icon" href="media\Logos\ICONODATA.png" />
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="empresas/Empresas.php">Empresas</a></li>
                        <li><a href="TI/TTIC.php">Equipo TI</a></li>
                        <li><a href="https://data3000sas.com/" target="_blank">Acerca de nosotros</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <header>
            <form action="php/registroUsuario.php" method="POST">
                <h2>Registro de usuario</h2>
                <input type="text" placeholder="Nombre de usuario" name="user" required>
                <input type="password" placeholder="Contraseña" name="password" required>
                <input type="submit" value="Registrarse" name="registro" class="iniciar">
                <a href="login.php">Iniciar sesion</a>
            </form>
        </header>  
    </div>	
</div>

<script src="js/collapse.js"></script>
</body>
</html>