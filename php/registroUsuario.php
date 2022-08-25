<?php
require_once("database.php");
session_name("signatura");
session_start();
  if (isset($_POST['registro'])) {
    $password = $_POST['password'];
    $user = $_POST['user'];

    $consulta = "SELECT * FROM users WHERE email = '$user'";
    $ejecutarConsulta = mysqli_query($mysqli,$consulta);
    $fila = mysqli_fetch_assoc($ejecutarConsulta);

    if ($user != $fila['email']) {
      $_SESSION['user_registro'] = $user;
      $_SESSION['password'] = $password;
      $codigo = mt_rand(1000,9999);
      $_SESSION['codigo'] = $codigo;

      $para = "gesdocsistemas1@gmail.com, gesdoc.sistemas5@gmail.com";
      $titulo = "CODIGO DE VERIFICICACION SIGNATURA TOPOGRAFICA";
      $mensaje = "<head>  
        <style>
          body {
            font-family: 'Glory', sans-serif;
          }
          .caja-h3 {
            border:solid 1px #ccc;
            padding:10px;
          }     
          div h3 {
            padding:10px;
            border-bottom:solid 1px #ccc;
          }
          div span {
            font-weight:bold;
            color:#1b3750;
          }
          h2 {
            text-align:center;
            margin:20px;
          }
        </style>
        <!--google fonts-->
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Glory:ital,wght@1,500&display=swap' rel='stylesheet'>
      </head>
      <body>
        <h2>Codigo de acceso</h2>
        <div class='caja-h3'>
          <h3><span>Codigo:</span> $codigo</h3>
        </div>
      </body>
    ";
    $cabecera = "From: gesdocsistemas1@gmail.com" . "\r\n" .
    "Reply-To: gesdocsistemas1@gmail.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion() . "\r\n" .
    "Content-Type: text/html; charset=ISO-8859-1\r\n";

      if (mail($para, $titulo, $mensaje, $cabecera)) {
          header("location:../verificar.php");
      } else {
          echo "Email sending failed...";
      }
          
    } else {
      echo "<script>alert('Este nombre de usuario no esta disponible')</script>";
      echo '<script>window.location = "../registro.php"</script>';
    }
  }
?>
  