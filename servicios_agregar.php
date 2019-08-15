<!-----
Página: servicios_agregar.php
Título: Levantar o agregar un tiket (servicio).
Estilos: "starter-template.css","sticky-footer.css"
Última actualización: 05-08-2019
Autor: Ismael García Hernández.
----->
<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Mesa de servivio de la SEDETUS. Agregar equipos al catálogo (inventario)</title>    
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
                            <a href="index.html" class="btn btn-outline-light my-2 my-sm-0"style="margin-right: 5px;"><i class="fa  fa-home" title="Inicio"></i></a>
                          <!--<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>-->
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catálogos</a>
                          <div class="dropdown-menu" aria-labelledby="dropdown02">
                            <a class="dropdown-item" href="cat_u_administrativa.html">Unidades administrativas</a>
                            <a class="dropdown-item" href="cat_direccion.html">Direcciones</a>
                            <a class="dropdown-item" href="cat_departamento.html">Departamentos</a>
                            <a class="dropdown-item" href="cat_usuario.html">Usuarios</a>
                            <a class="dropdown-item" href="cat_tipo_equipo.html">Tipos de equipos</a>
                            <a class="dropdown-item" href="cat_clasifica_equipo.html">Clasificación de equipo</a>
                            <a class="dropdown-item" href="cat_equipos.html">Equipos</a></div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="resguardos.html">Resguardos</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reportes</a>
                          <div class="dropdown-menu" aria-labelledby="dropdown02">
                            <a class="dropdown-item" href="reporte_servicios.html">Servicios</a>
                            <a class="dropdown-item" href="reporte_resguardos.html">Resguardos</a>
                            <a class="dropdown-item" href="reporte_inv_general.html">Inventario general</a>
                            <a class="dropdown-item" href="reporte_inv_computo.html">Inventario de cómputo</a>
                            <a class="dropdown-item" href="reporte_inv_telecom.html">Inventario de telecomunicaciones</a>
          
                          </div>
                        </li>
          
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.html">Tiket's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.html">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acerca_de.html">Acerca de</a>
                        </li>
          
                      </ul>
                      
                      <form class="form-inline my-2 my-lg-0">
                        <!--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">-->
                        <!--<a href="#" class="btn btn-success">¿Soy un botón o un enlace?</a>-->
                        <a href="mapa_sitio.html" class="btn btn-secondary my-2 my-sm-0"style="margin-right: 5px;"><i class="fa  fa-sitemap" title="Mapa del sitio"></i></a>
                        <a href="ayuda.html" class="btn btn-secondary my-2 my-sm-0"style="margin-right: 5px;"><i class="fa  fa-question-circle" title="Ayuda"></i></a>
                        <!--<a href="login.html" class="btn btn-secondary my-2 my-sm-0"style="margin-right: 5px;"><i class="far  fa-user" title="Usuario"></i></a>-->
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                          <a class="btn btn-secondary my-2 my-sm-0"style="margin-right: 15px;" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far  fa-user" title="Usuario"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdown02">
                            <a class="dropdown-item" href="usuario_editar_perfil.html">Editar perfil</a>
                            <a class="dropdown-item" href="login.html">Salir</a>
                          </div>
          
                        </li>
                      </ul>
                       
                      </form>
                    </div>
                  </nav>
                  
        <!--Contenedor principal-->
        <main role="main" class="container" style="margin-bottom: 75px;">        
                <div class="">
                  
                  <h4><i class="fa  fa-plus" 
                      style="margin-right: 5px; color:blue" 
                      title="Levantar o agregar un tiket (servicio)."></i>
                      Levantar o agregar un tiket (servicio).</h4>
                  <hr>
                  <div style="width: 50%">
      
                  <form action="mensaje.html">

                      <div class="form-group">
                          <!--<label for="inputNombre">Equipo:</label>-->

                          <label for="selectTipo">Tipo de servicio:</label>
                          <select id="selectTipo" aria-describedby="tipoHelp" required>
                            <option value="1">Soporte Técnico</option>
                            <option value="2">Sistemas</option>
                            <option value="3">Redes y conectividad</option>
                            <option value="0">Diseño e imagen</option>

                          </select>
           
                      </div>
                        
                    <div class="form-group">
                        <label for="inputNombre">Descripción:</label>
                        <input type="text" class="form-control" id="inputNombre" aria-describedby="descripcionHelp" placeholder="Descripción." required>
                        <small id="descripcionHelp" class="form-text text-muted">Proporcione una breve descripción sobre la problemática a reportar.</small>
                    </div>
                    
                    </div>
                        <!--<div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" disabled="true">
                            <label class="form-check-label" for="exampleCheck1">Activo</label>
                        </div>-->
                        <button type="submit" class="btn btn-secondary">Agregar</button>
                        <i><a href="servicios.html" class="btn btn-secondary"style="">Cancelar</a></i>
                        
                      </form>
                  </div>
      
                  
      
                  
                </div>        
              </main>

        <!--Pie de página-->
        <footer class="footer mt-auto py-3 fixed-bottom">
            <div class="container" style="text-align:center">
              <small class="text-muted">&copy; Ismael García Hernández (2019). Última actualización: 05-08-2019</small>
            </div>
        </footer>
   
  </body>

</html>

