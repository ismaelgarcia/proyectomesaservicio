<!-----
Página: servicios.html
Título: Servicios (tikets')
Estilos: "starter-template.css","sticky-footer.css"
Última actualización: 05-08-2019
Autor: Ismael García Hernández.
----->

<?php
    //Importamos el archivo de configuración a la base de datos para poder conectarnos
    require_once "conexion.php";
?>

<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Mesa de servivio de la SEDETUS. Servicios (Tiket´s)</title>    
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
            
            <h4><i class="far fa-handshake" 
                style="margin-right: 5px; color:blue;" 
                title="Servicios (Tiket´s)"></i>
                Servicios (Tiket´s)
                <!-- Botón para agregar un registro, llamará al archivo agregar.php-->
                <a href="servicios_agregar.html" class="btn btn-outline-secondary my-2 my-sm-0"style="margin-left: 50px;"><i class="fa  fa-plus" title="Levantar un tiket."></i></a>
                <!--<<a href="mensaje.html" class="btn btn-outline-secondary my-2 my-sm-0"style="margin-left: 10px;"><i class="fa  fa-print" title="Imprimer los tiket's."></i></a>-->

            </h4>
            <!--Tabla que visualizará el resultado de la consulta-->
            <table class="table table-striped">
                <!--Encabezado de las columnas de la tabla-->
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descripción del tiket</th>
                    <th scope="col">Solicitante</th>
                    <th scope="col">Fecha/apertura</th>
                     <th scope="col">Estatus</th>
                     <th scope="col">Acciones</th>
                  </tr>
                </thead>

                <!--Cuerpo de la tabla (lineas)-->
                <tbody>
                  <tr> <!--tr principal que pintará los registros-->

                        <?php
                            //Código php que realiza la consulta y imprime los registros mediante un ciclo while
                            
                            //mysqli_set_charset($conexion,'utf8'); //Para que se visualicen los acentos y demas caracteres.

                            //Consulta a la tabla de servivcios la cual se almacena en la variable $resultado
                            $resultado=$conexion->query("select * from servicio"); 

                            //Ciclo flor para recorrer el arreglo almacenado en la variable $resultado
                            
                            while($row=mysqli_fetch_array($resultado)){                            
                                echo "<tr> ";
                                    echo "<td> ".$row["id_servicio"]."</td>";
                                    echo "<td> ".$row["descripcion"]."</td>";
                                    echo "<td> ".$row["usuario"]."</td>";
                                    echo "<td> ".$row["fecha"]."</td>";
                                    echo "<td> ".$row["estatus"]."</td>";
                                    echo "<td>";
                                        echo "<a href='mensaje.html'".
                                        "style='margin-right: 5px;color: red'".
                                        "<li class='far fa-trash-alt'"."title='Agregar una direccion.'".
                                        "</i></a>";
                                    echo"</td>";
                                echo "</tr> ";
                            }

                        ?>

                    
                    </tr>
                </tbody>
              </table>

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

