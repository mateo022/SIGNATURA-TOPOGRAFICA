<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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