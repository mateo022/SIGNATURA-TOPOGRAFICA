<?php
$mysqli = mysqli_connect("localhost","root","","loginsigsoft");

if ($mysqli->connect_errno) {
	echo "fallo la conexion: (".$mysqli->connect_errno.")". $mysqli->connect_errno;
}
/*conexion a la base de datos hades*/
$mysql = new mysqli(
	"localhost",
	"root",
	"",
	"hades"
);
$mysql->set_charset("utf8");

if ($mysql->connect_error){
	die("FAILE TO CONNECT" . $mysql->connect_error);
}
?>
