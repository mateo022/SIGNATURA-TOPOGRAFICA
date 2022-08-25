<?php
require_once("../php/database.php"); //Llama la conexion de la base de datos
session_name("signatura");
session_start();
if (isset($_SESSION['user'])) {//verificamos si la variable del usuario esta establecido 

    $user = $_SESSION['user'];
}
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>DATASIGN.SOFT </title>
     <meta charset="utf8" />
    <link rel="shortcut icon" href="../media/ICONODATA.png" />
    <script src="../js/main.js"></script>
    <link rel="stylesheet" href="../js/materialize/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/pruebas.css" />
    <link rel="shortcut icon" href="../media/Logos/ICONODATA.png" />
    <body>
        <div class="wrapper">
          <div>
            <div class="nav">
                <div class="config">
                    <button  id="config"><img src="../media/Logos/menu.png" id="icon_menu"></button>
                </div>
                <div class="box_collapse" id="box_collapse">
                    <div class="logo">
                        <img src="../media/Logos/loguito.png">
                    </div>
                    <div class="menu">
                        <ul class="navMenu">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="#">Empresas</a></li>
                            <li><a href="../TI/TTIC.php">Team Tic</a></li>
                            <li><a href="https://data3000sas.com/" target="_blank">Acerca de nosotros</a></li>
                            <?php
                        if (isset($_SESSION['user'])) {
                            ?>
                            <li><a href="../inventario/agregar.php">Inventario</a></li>
                            <li><form action="../index.php" method="POST"><input type="submit" name="cerrar"  class="button_cerrar" value="Cerrar Sesion"></form></li>
                            
                            <?php
                        } else {
                            ?>
                            <li><a href="../login.php" class="button_login">Login</a></li>
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
    </div>
    <div id="drag-container">
      <div id="spin-container">
        <!--aqui se a�aden imagenes o videos -->
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtg4SJFyWAnyN0W9-3dBTTgtvNRbZsiEuChuYr7YbdbBvP5ZoGzhJk5CoDIv1Mz7tqNsI&usqp=CAU" alt="" href="#">
        <img src="https://esaludsantasofia.files.wordpress.com/2008/09/logo-hss.jpg" alt="">
        <img src="https://www.tintiando.com/wp-content/uploads/2020/04/INFICALDAS-LOGO-625x600.jpg" alt="">
        <img src="http://1.bp.blogspot.com/-bnZrSxUBWwU/U-nX6ZcMW5I/AAAAAAAAPuY/uRoycIDBImk/s1600/Gobernaci%C3%B3n%2Bde%2BCaldas.png" alt="">
        <img src="https://www.webscolombia.co/wp-content/uploads/2016/02/www.emas_.com_.co--308x344.png" alt="">
        <img src="https://www.ucm.edu.co/wp-content/uploads/2021/03/fundacion_luker.png" alt="">
        <img src="https://cdn-cdded.nitrocdn.com/HZxrbMAFxhFYtLboFudoPmMAZwfnBptn/assets/static/optimized/rev-2e83dd0/wp-content/uploads/2021/05/LogoMejor-300x207.png" alt="">
        

        <p>SUS DOCUMENTOS SIEMPRE EN LAS MEJORES MANOS</p>
      </div>
    <div id="ground"></div>


  <div id="music-container"></div>
 </div>
</div> 
<script>
var radius = 240; // how big of the radius
var autoRotate = true; // auto rotate or not
var rotateSpeed = -60; // unit: seconds/360 degrees
var imgWidth = 120; // width of images (unit: px)
var imgHeight = 170; // height of images (unit: px)

// Link of background music - set 'null' if you dont want to play background music
var bgMusicURL = 'https://api.soundcloud.com/tracks/143041228/stream?client_id=587aa2d384f7333a886010d5f52f302a';
var bgMusicControls = true; // Show UI music control


// animation start after 1000 miliseconds
setTimeout(init, 1000);

var odrag = document.getElementById('drag-container');
var ospin = document.getElementById('spin-container');
var aImg = ospin.getElementsByTagName('img');
var aVid = ospin.getElementsByTagName('video');
var aEle = [...aImg, ...aVid]; // combine 2 arrays

// Size of images
ospin.style.width = imgWidth + "px";
ospin.style.height = imgHeight + "px";

// Size of ground - depend on radius
var ground = document.getElementById('ground');
ground.style.width = radius * 3 + "px";
ground.style.height = radius * 3 + "px";

function init(delayTime) {
  for (var i = 0; i < aEle.length; i++) {
    aEle[i].style.transform = "rotateY(" + (i * (360 / aEle.length)) + "deg) translateZ(" + radius + "px)";
    aEle[i].style.transition = "transform 1s";
    aEle[i].style.transitionDelay = delayTime || (aEle.length - i) / 4 + "s";
  }
}

function applyTranform(obj) {
  // Constrain the angle of camera (between 0 and 180)
  if(tY > 180) tY = 180;
  if(tY < 0) tY = 0;

  // Apply the angle
  obj.style.transform = "rotateX(" + (-tY) + "deg) rotateY(" + (tX) + "deg)";
}

function playSpin(yes) {
  ospin.style.animationPlayState = (yes?'running':'paused');
}

var sX, sY, nX, nY, desX = 0,
    desY = 0,
    tX = 0,
    tY = 10;

// auto spin
if (autoRotate) {
  var animationName = (rotateSpeed > 0 ? 'spin' : 'spinRevert');
  ospin.style.animation = `${animationName} ${Math.abs(rotateSpeed)}s infinite linear`;
}

// add background music
if (bgMusicURL) {
  document.getElementById('music-container').innerHTML += `
<audio src="${bgMusicURL}" ${bgMusicControls? 'controls': ''} autoplay loop>    
<p>If you are reading this, it is because your browser does not support the audio element.</p>
</audio>
`;
}

// setup events
document.onpointerdown = function (e) {
  clearInterval(odrag.timer);
  e = e || window.event;
  var sX = e.clientX,
      sY = e.clientY;

  this.onpointermove = function (e) {
    e = e || window.event;
    var nX = e.clientX,
        nY = e.clientY;
    desX = nX - sX;
    desY = nY - sY;
    tX += desX * 0.1;
    tY += desY * 0.1;
    applyTranform(odrag);
    sX = nX;
    sY = nY;
  };

  this.onpointerup = function (e) {
    odrag.timer = setInterval(function () {
      desX *= 0.95;
      desY *= 0.95;
      tX += desX * 0.1;
      tY += desY * 0.1;
      applyTranform(odrag);
      playSpin(false);
      if (Math.abs(desX) < 0.5 && Math.abs(desY) < 0.5) {
        clearInterval(odrag.timer);
        playSpin(true);
      }
    }, 17);
    this.onpointermove = this.onpointerup = null;
  };

  return false;
};

document.onmousewheel = function(e) {
  e = e || window.event;
  var d = e.wheelDelta / 20 || -e.detail;
  radius += d;
  init(1);
};

</script>
<script src="../js/collapse.js"></script>
</body>
</html>
