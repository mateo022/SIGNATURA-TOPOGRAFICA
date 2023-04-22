<?php
require_once("../php/database.php"); //Llama la conexion de la base de datos
session_name("signatura");
session_start();//inicia la sesion si el usuario se guardo en una variable global

if (isset($_SESSION['user'])) {//verificamos si la variable del usuario esta establecido 

    $user = $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/TIC.css">
  <link rel="stylesheet" type="text/css" href="css/personas.css">
  <link rel="shortcut icon" href="../media/logos/ICONODATA.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  
  <!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
  <!--font awesome-->
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>   
	
	<title>DATASIGN.SOFT</title>
</head>
<body>
  <div class="fondolist">
<div class="container">
  <input type="checkbox" class="toggle" id="toggle" checked="checked" /><label class="toggle" for="toggle"> Girar</label>
  <div class="menu">
    <div class="top">
      <span >
      BIENVENIDOS AL EQUIPO TECNOLOGICO
      </span>
      <br>
      <h3>
      CONOZCA UN POCO DE NUESTRO TRABAJO
      </h3>
      <a class="exit" href="../index.php" tabindex="0"></a>
    </div>
    <ul class="middle">
      <li tabindex="0"><a type="button" data-toggle="modal" data-target="#desarrollo"  style="text-decoration:none; color:#fff;"><i class="fa fa-code"></i> Desarrollo web</li></a>
      <li tabindex="0"><i class="fa fa-brands fa-expeditedssl"></i><a type="button" data-toggle="modal" data-target="#seguridad"  style="text-decoration:none; color:#fff;">Seguridad informática</a></li>
      <li tabindex="0"><i class="fa fa-solid fa-file-arrow-up"></i><a type="button" data-toggle="modal" data-target="#alfresco"  style="text-decoration:none; color:#fff;">Software gestion documental</a></li>
      <li tabindex="0"><i class="fa fa-solid fa-hand-sparkles"></i><a type="button" data-toggle="modal" data-target="#mantenimiento"  style="text-decoration:none; color:#fff;">Mantenimiento de equipos</a></li>
      <li tabindex="0"><i class="fa fa-solid fa-hand-holding-medical"></i><a type="button" data-toggle="modal" data-target="#soporte"  style="text-decoration:none; color:#fff;">Soporte tecnico</a></li>
      <li tabindex="0"><i class="fa fa-solid fa-handshake-angle"></i><a type="button" data-toggle="modal" data-target="#asesorias"  style="text-decoration:none; color:#fff;">Tutorias / Capacitaciones</a></li>
      <li tabindex="0"><i class="fa fa-solid fa-hard-drive"></i><a type="button" data-toggle="modal" data-target="#almacenamiento"  style="text-decoration:none; color:#fff;">Almacenamiento de información</a></li>
      <li tabindex="0"><i class="fa fa-solid fa-laptop-file"></i><a type="button" data-toggle="modal" data-target="#digitalizacion"  style="text-decoration:none; color:#fff;">Digitalización</a></li>   
</ul>  
    <div class="bottom"></div>
    <div class="menu-back"></div>
    <div class="glass-reflection"></div>
  </div>
</div>
<!-- Modal Desarrolladores -->
  <div class="modal fade" id="desarrollo" tabindex="-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Desarrolladores</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <a type="button" data-toggle="modal" data-target="#andres" class="h4 text-dark"><i class="fa-solid fa-address-card"></i> Camilo Andres Villada</a><br>
            <a type="button" data-toggle="modal" data-target="#mateo" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Mateo Ceballos </a><br>
            <a type="button" data-toggle="modal" data-target="#sergio" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Sergio Parra </a>
         
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
      </div>
    </div>
  </div>
   <!-- Modal Seguridad -->
   <div class="modal fade" id="seguridad" tabindex="-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Seguridad</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <a type="button" data-toggle="modal" data-target="#erika" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Erika Gomez Tangarife</a><br>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
        </div>
      </div>
      <!-- Modal software alfresco -->
    <div class="modal fade" id="alfresco" tabindex="-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Alfresco</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <a type="button" data-toggle="modal" data-target="#sergio" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Sergio Parra</a><br>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
        </div>
      </div>
      <!-- Modal mantenimientos -->
 <div class="modal fade" id="mantenimiento" tabindex="-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Mantenimiento de equipos</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <a type="button" data-toggle="modal" data-target="#erika" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Erika Gomez</a><br>
                <a type="button" data-toggle="modal" data-target="#mateo" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Mateo Ceballos</a><br>
                <a type="button" data-toggle="modal" data-target="#andres" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Camilo Andres Villada</a><br>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
        </div>
      </div>
        <!-- Modal soporte -->
        <div class="modal fade" id="soporte" tabindex="-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Soporte tecnico</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <a type="button" data-toggle="modal" data-target="#erika" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Erika Gomez</a><br>
                <a type="button" data-toggle="modal" data-target="#mateo" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Mateo Ceballos</a><br>
                <a type="button" data-toggle="modal" data-target="#andres" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Camilo Andres Villada</a><br>
                <a type="button" data-toggle="modal" data-target="#sergio" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Sergio Parra</a><br>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
        </div>
      </div>

       <!-- Modal asesorias -->
       <div class="modal fade" id="asesorias" tabindex="-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> Asesorias / Tutorias   / Capacitaciones</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <a type="button" data-toggle="modal" data-target="#jose" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Jose Miguel Ramirez </a><br>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
        </div>
      </div>

      <!-- Modal almacenamiento -->
      <div class="modal fade" id="almacenamiento" tabindex="-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> Almacenamiento </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <a type="button" data-toggle="modal" data-target="#sergio" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Sergio Parra </a><br>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
        </div>
      </div>
       <!-- Modal digitalizacion -->
       <div class="modal fade" id="digitalizacion" tabindex="-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> Digitalización </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <a type="button" data-toggle="modal" data-target="#laura" class="h4 text-dark"> <i class="fa-solid fa-address-card"></i> Laura Cardona </a><br>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
        </div>
      </div>
         <!-- Modal desarrollador Andres-->
    <div class="modal fade boxModal" id="andres" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                  <h2 class="text-center font-weight-bold w-100 h1">Tecnólogo en análisis y desarrollo de software </h2>
              </div>
                <div class="modal-body">
                    <div>
                        <h2 class="font-weight-bold"><i class="fa-solid fa-address-card"></i> Camilo Andrés Villada Torres</h2>
                      <div class="info-andres">
                        <h3><span class="font-weight-bold">Cargo:</span> Desarrollador web</h3>
                        <h3><span class="font-weight-bold">Contacto:</span> 3245646052</h3>
                        <h3><span class="font-weight-bold">Correo:</span> gesdocsistemas1@gmail.com</h3>
                      </div>
                    </div>
                    <div>
                      <!-- <img src="assets/andres.jpg" alt=""> -->
                    </div>
                </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
        </div>
    </div>
     <!-- Modal info sergio-->
     <div class="modal fade boxModal" id="sergio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                  <h2 class="text-center font-weight-bold w-100 h1">Administrador de sistemas informáticos </h2>
              </div>
                <div class="modal-body">
                    <div>
                        <h2 class="font-weight-bold"><i class="fa-solid fa-address-card"></i> Jhon Sergio Parra Montoya</h2>
                      <div class="info-andres">
                        <h3><span class="font-weight-bold">Cargo:</span> Lider de proyectos TI</h3>
                        <h3><span class="font-weight-bold">Contacto:</span> 3045414449 </h3>
                        <h3><span class="font-weight-bold">Correo:</span> tecnologia.data3000sa@gmail.com </h3>
                      </div>
                    </div>
                    <div>
                      <img src="assets/Sergio.jpg" alt="">
                    </div>
                </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
        </div>
    </div>
         <!-- Modal desarrollador Mateo-->
    <div class="modal fade boxModal" id="mateo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                  <h2 class="text-center font-weight-bold w-100 h1">Tecnólogo en sistemas informáticos </h2>
              </div>
                <div class="modal-body">
                    <div>
                        <h2 class="font-weight-bold"><i class="fa-solid fa-address-card"></i> Mateo Ceballos Chica</h2>
                      <div class="info-andres">
                        <h3><span class="font-weight-bold">Cargo:</span> Desarrollador web</h3>
                        <h3><span class="font-weight-bold">Contacto:</span> 3147894195</h3>
                        <h3><span class="font-weight-bold">Correo:</span> gesdoc.sistemas5@gmail.com</h3>
                      </div>
                    </div>
                    <div>
                      <img src="assets/teo.jpg" alt="">
                    </div>
                </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
        </div>
    </div>
         <!-- Modal seguridad informatica erika-->
    <div class="modal fade boxModal" id="erika" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                  <h2 class="text-center font-weight-bold w-100 h1">Ingeniera de sistemas </h2>
              </div>
                <div class="modal-body">
                    <div>
                        <h2 class="font-weight-bold"><i class="fa-solid fa-address-card"></i> Erika Gomez Tangarife</h2>
                      <div class="info-andres">
                        <h3><span class="font-weight-bold">Cargo:</span> Oficial en seguridadde la información</h3>
                        <h3><span class="font-weight-bold">Contacto:</span> 3046561386 </h3>
                        <h3><span class="font-weight-bold">Correo:</span> gesdoc.sistemas3@gmail.com</h3>
                      </div>
                    </div>
                    <div>
                      <img src="assets/Erik.png" alt="">
                    </div>
                </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
        </div>
    </div>

         <!-- Modal info sergio-->
    <div class="modal fade boxModal" id="sergio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                  <h2 class="text-center font-weight-bold w-100 h1">Administrador de sistemas informáticos </h2>
              </div>
                <div class="modal-body">
                    <div>
                        <h2 class="font-weight-bold"><i class="fa-solid fa-address-card"></i> Jhon Sergio Parra Montoya</h2>
                      <div class="info-andres">
                        <h3><span class="font-weight-bold">Cargo:</span> Lider de proyectos TI</h3>
                        <h3><span class="font-weight-bold">Contacto:</span> 3045414449 </h3>
                        <h3><span class="font-weight-bold">Correo:</span> tecnologia.data3000sa@gmail.com </h3>
                      </div>
                    </div>
                    <div>
                      <img src="assets/Sergio.jpg" alt="">
                    </div>
                </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
        </div>
    </div>

          <!-- Modal info Laura-->
          <div class="modal fade boxModal" id="laura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                  <h2 class="text-center font-weight-bold w-100 h1">Tecnóloga en sistemas y gestión documental </h2>
              </div>
                <div class="modal-body">
                    <div>
                        <h2 class="font-weight-bold"><i class="fa-solid fa-address-card"></i> Laura Cardona </h2>
                      <div class="info-andres">
                        <h3><span class="font-weight-bold">Cargo:</span> Coordinador de consultas </h3>
                        <h3><span class="font-weight-bold">Contacto:</span> 3193754747 </h3>
                        <h3><span class="font-weight-bold">Correo:</span> sed.consultas@gmail.com </h3>
                      </div>
                    </div>
                    <div>
                      <img src="assets/Lau.png" alt="">
                    </div>
                </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
        </div>
    </div>

       <!-- Modal info  Jose Miguel-->
       <div class="modal fade boxModal" id="jose" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                  <h2 class="text-center font-weight-bold w-100 h1"> Asesor juridico area TI </h2>
              </div>
                <div class="modal-body">
                    <div>
                        <h2 class="font-weight-bold"><i class="fa-solid fa-address-card"></i> Jose Miguel Ramirez</h2>
                      <div class="info-andres">
                        <h3><span class="font-weight-bold">Cargo:</span> Líder área TI</h3>
                        <h3><span class="font-weight-bold">Contacto:</span> 3206953976 </h3>
                        <h3><span class="font-weight-bold">Correo:</span> asesoriasjm@gmail.com </h3>
                      </div>
                    </div>
                    <div>
                      <img src="assets/js.jpg" alt="">
                    </div>
                </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
        </div>
    </div>

</body>

<script src="../js/jquery.js"></script>
<!--script bootstrap-->
<script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</html>