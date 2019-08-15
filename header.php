<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Mesa de servivio de la SEDETUS. Inicio</title>    
    <meta charset="UTF-8">
    <link href="css/all.css" rel="stylesheet"><!--Estilos para los íconos fuente awesome-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    <!--Estilos personalizados para el sitio-->
    <link rel="stylesheet" href="css/sitio/starter-template.css">
    <link rel="stylesheet" href="css/sitio/sticky-footer.css">
  </head>

  <body>

      <!--Barra de navegación principal-->

      <!--<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">-->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:rgb(73, 164, 243)">
          <!--<a class="navbar-brand" href="#" style="color:black"><i class="far fa-handshake" style="font-size: 34px"></i><small >Mesa Servicio</small>│</a>-->
          
          <i class="navbar-brand" href="#" style="color:black"> <!--Logo y nombre de la aplicación-->
            <i class="far fa-handshake" style="font-size: 34px"></i>
            <small >Mesa Servicio</small>│
          </i>

          <!--Botón para colapsar el menu y aparecerlo cuando se pincha-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <!--Opciones del menú que se colapsarán-->
          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a href="index.php" class="btn btn-outline-light my-2 my-sm-0"style="margin-right: 5px;"><i class="fa  fa-home" title="Inicio"></i></a>
                <!--<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>-->
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catálogos</a>
                <div class="dropdown-menu" aria-labelledby="dropdown02">
                  <a class="dropdown-item" href="cat_u_administrativa.php">Unidades administrativas</a>
                  <a class="dropdown-item" href="cat_direccion.php">Direcciones</a>
                  <a class="dropdown-item" href="cat_departamento.php">Departamentos</a>
                  <a class="dropdown-item" href="cat_usuario.php">Usuarios</a>
                  <a class="dropdown-item" href="cat_equipotipo.php">Tipos de equipos</a>
                  <a class="dropdown-item" href="cat_equipoclase.php">Clasificación de equipo</a>
                  <a class="dropdown-item" href="cat_equipo.php">Equipos</a></div>
              </li>
              
              <li class="nav-item">
                  <a class="nav-link" href="resguardos.php">Resguardos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reportes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown02">
                  <a class="dropdown-item" href="reporte_servicio.php">Servicios</a>
                  <a class="dropdown-item" href="reporte_resguardo.php">Resguardos</a>
                  <a class="dropdown-item" href="reporte_equipo.php">Inventario general</a>
                  <a class="dropdown-item" href="reporte_computo.php">Inventario de cómputo</a>
                  <a class="dropdown-item" href="reporte_telecomunicacion.php">Inventario de telecomunicaciones</a>

                </div>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="consulta.php">Ticket's</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contacto.php">Contacto</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="acerca_de.php">Acerca de</a>
              </li>

                
              <!--<li class="nav-item"> Esta parte es para usar un submenu colgante
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>-->
              <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown02">
                  <a class="dropdown-item" href="#">Opción</a>
                  <a class="dropdown-item" href="#">Otra opción</a>
                  <a class="dropdown-item" href="#">Otra opción</a>
                </div>
              </li>-->

            </ul>
            
            <form class="form-inline my-2 my-lg-0">
              <!--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">-->
              <!--<a href="#" class="btn btn-success">¿Soy un botón o un enlace?</a>-->
              <a href="mapa_sitio.php" class="btn btn-secondary my-2 my-sm-0"style="margin-right: 5px;"><i class="fa  fa-sitemap" title="Mapa del sitio"></i></a>
              <a href="ayuda.php" class="btn btn-secondary my-2 my-sm-0"style="margin-right: 5px;"><i class="fa  fa-question-circle" title="Ayuda"></i></a>
              <!--<a href="login.html" class="btn btn-secondary my-2 my-sm-0"style="margin-right: 5px;"><i class="far  fa-user" title="Usuario"></i></a>-->
              <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="btn btn-secondary my-2 my-sm-0"style="margin-right: 15px;" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far  fa-user" title="Usuario"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdown02">
                  <a class="dropdown-item" href="usuario_editar_perfil.php">Editar perfil</a>
                  <a class="dropdown-item" href="login.php">Salir</a>
                </div>

              </li>
            </ul>
              <!--<button class="btn btn-secondary my-2 my-sm-0" style="margin-right: 5px;" type="submit"><i class="fa  fa-sitemap" title="Mapa del sitio"></i></button>
              <button class="btn btn-secondary my-2 my-sm-0" style="margin-right: 5px;" type="submit"><i class="far  fa-question-circle" title="Ayuda"></i></button>
              <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="far  fa-user" title="Usuario"></i></button>-->
            </form>
          </div>
        </nav>
  </body>

</html>