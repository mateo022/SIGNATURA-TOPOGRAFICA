<?php 
require_once("database.php");
session_name("signatura");
session_start();
if (isset($_POST['iniciar'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $consulta = "SELECT * FROM users WHERE email = '$user'";

    $ejecutarConsulta = mysqli_query($mysqli, $consulta);
    $fila = mysqli_fetch_assoc($ejecutarConsulta);
    if ($user == $fila['email'] && $password == $fila['password']) {
        header("location:../index.php");
        $_SESSION['user'] = $user;
    } else {
        echo "<script>alert('Usuario o Contraseña incorrectos')</script>";
        echo "<script>window.location.href='../login.php';</script>";
        session_destroy();
    }
}
?>