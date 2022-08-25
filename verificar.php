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
                        <li><a href="Empresas.php">Empresas</a></li>
                        <li><a href="TTIC.php">Equipo TI</a></li>
                        <li><a href="https://data3000sas.com/" target="_blank">Acerca de nosotros</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <header>
            <form action="php/verificarCodigo.php" method="POST">
                <h2>Por favor inserte el codigo de 4 digitos para ingresar</h2>
                <input type="text" placeholder="Codigo de acceso" name="codigo" required>
                <input type="submit" value="Verificar" name="verificar" class="iniciar">
                <a href="login.php">Volver</a>
            </form>
        </header>  
    </div>	
</div>

<script src="js/collapse.js"></script>
</body>
</html>