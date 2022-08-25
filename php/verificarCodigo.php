<?php
require_once("database.php");
session_name("signatura");
session_start();
  if (isset($_POST['verificar'])) {
    $codigo2 = $_POST['codigo'];
    $user2 = $_SESSION['user_registro'];
    $password2 = $_SESSION['password'];

    if ($codigo2 == $_SESSION['codigo']) {
      $insertar = "INSERT INTO users(email,password) VALUES('$user2' , ' $password2')";
      $ejecutarInsertar = mysqli_query($mysqli, $insertar);
      echo ("<script>window.location = '../inventario/Agregar.php'</script>");
    } else {
        echo ("<script>alert('Codigo incorrecto')</script>");
        echo ("<script>window.location = '../verificar.php'</script>");
      }
  }
?>