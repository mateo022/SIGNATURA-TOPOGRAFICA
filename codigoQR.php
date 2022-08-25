<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/codigosQR.css">
    <!--font awesome-->
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>codigoQR</title>
</head>
<body>
    <div class="container_qr">
        <img src="media/codigosqr/<?php echo $_GET['id'];?>.png">
        <a href="media/codigosqr/<?php echo $_GET['id'];?>.png" download><i class="fa-solid fa-download"></i></a>
    </div>
</body>
</html>