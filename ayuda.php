<!-----
Página: ayuda.php
Última actualización: 05-08-2019
Autor: Ismael García Hernández.
----->
<?php require "header.php";?>

        <!--Contenedor principal-->
       
        <main role="main" class="container" style="margin-bottom: 75px;">        
          <div class="lead">
            <!--<h4><i class="btn btn-primary my-2 my-sm-0"style="margin-right: 5px;"><i class="fa  fa-question-circle" title="Mapa del sitio"></i></i>Ayuda</h4>-->
            <img class="mb-4" src="https://www.netkia.es/wp-content/uploads/2018/12/dibujo-help-desk.png" alt="Imagen relativa a ayuda" width="400px">
            <hr>

            <h5>
              <i class="fa  fa-id-card-alt" style="margin-right: 5px; color:#49A4F3;font-size:32px" ></i>
              Acceso (login).
            </h5>
            <p >Es la primer página de la aplicación mediante la cual el usuario se tendrá que autenticar 
              para poder usar la mesa de servicio ya sea como usuario normal que reporta, usario que atiende
              (operativo) o usuario administrador. Actualmente está en desarrollo ya que se tienen que definir
              tipos de usuario y sus permisos.
            </p><hr>

            <h5>
              <i class="fa  fa-home" style="margin-right: 5px; color:#49A4F3;font-size:32px"></i>
              Inicio.
            </h5>
            <p>Es la página principal de la aplicación de la mesa de servicio, es la que se carga cuando el
              usuario logra autenticarse. Y solo mostrará las opciones de acuerdo al rol del usuario ingresado. En 
              ella también se visualizarán anuncios de importancia para los usuarios, como actualizaciones de la
              aplicación, entre otras cosas.        
            </p><hr>

            <h5>
              <i class="fa  fa-book" style="margin-right: 5px; color:#49A4F3;font-size:32px"></i>
              Catálogos.
            </h5>
            <p>Es la primer opción que se encuentra en el menú principal y es la principal para que puedan
              funcionar las demás opciones. Se accede a todos los catálogos de la aplicación, los cuales se 
              se tendrán que alimentar como primer paso. El llenado de los catálogos corresponde al usuario 
              con nivel de administrador.
            </p><hr>

            <h5>
            <i class="fa  fa-file-signature" style="margin-right: 5px; color:#49A4F3;font-size:32px"></i>
              Resguardos.
            </h5>            
            <p>En esta opción del menu principal se accede a los resguardos de equipo que tienen todos los 
              empleados (usuarios). Se pueden realizar más resguardos (asignación de equipo), editar, consultar 
              y eliminar resguardos.
            </p><hr>

            <h5>
            <i class="fa  fa-print" style="margin-right: 5px; color:#49A4F3;font-size:32px"></i>
              Reportes.
            </h5>
            <p >En esta opción se generan diversos reportes como:<br>
              <i>Reporte de servicios,</i> en donde se enlistan 
              todos los servicios (ticket) que se han generado a petición de los usuarios. <br>
              <i>Resguardos.</i> Este tipo de reporte muestra los equipos y las personas que tienen reguardado dicho equipo,
              es decir, quien es el usuario oficial. <br>
              <i>Inventario general.</i> Este reporte muestra todo los equipos tanto de computo y de telecomunicaciones
              que tiene la dependencia. <br>
              <i>Inventario de cómputo.</i> Muestra el listado de equipo exclusivo de cómputo. <br>
              <i>Inventario de telecomuninicaciones.</i> Muestra el listado de equipos de telecomunciaciones.
            </p><hr>

            <h5>
              <i class="fa  fa-ticket-alt" style="margin-right: 5px; color:#49A4F3;font-size:32px"></i>
              Tiket'. 
            </h5>
            <p >Esta opción es la principal y es la razón de ser de este sistema. En esta sección los usuarios
              podrán levantar un ticket electrónico mediante el cual hagan una solicitud de servicio ténico,
              pudiendo der: falla de sistema, red, conectividad, equipo, asesoria, etc. <br>
              Cabe destacar que para levantar un ticket se podrá hacer desde cualquier lugar, lo único 
              que se necesita es un equipo de cómputo y conexión a internet.
            </p><hr>

            <h5>
              <i class="far  fa-id-badge" style="margin-right: 5px; color:#49A4F3;font-size:32px"></i>
              Contacto.
            </h5>
            <p >En esta sección se mostrará información relativa al personal a quien se pueda contactar, en caso 
              en caso de que no sea posible dar solución mediante un ticket o por cualquier otra circunstancia.
            </p><hr>

            <h5>
              <i class="fa  fa-building" style="margin-right: 5px; color:#49A4F3;font-size:32px"></i>
              Acerca de...
            </h5>
            <p>En esta sección se visualizará información relativa la organización (empresa). Se publicará, entre 
              otras cocas, la misión, visión, antecedentes y sitio oficial.
            </p><hr>

            <h5>
            <i class="fa  fa-sitemap" style="margin-right: 5px; color:#49A4F3;font-size:32px"></i>
              Mapa del sitio.
            </h5>
            <p>Aquí se mostrará el mapa de navegación del sitio.
            </p><hr>

            <h5>
            <i class="fa  fa-info-circle" style="margin-right: 5px; color:#49A4F3;font-size:32px"></i>
              Ayuda.
            </h5>
            <p>Este tópico es esta sección. Y contendrá de manera enunciativa que es lo que hace cada 
              hipervínculo u opción del menú de navegación.
            </p><hr>

            <h5>
              <i class="far  fa-user" style="margin-right: 5px; color:#49A4F3;font-size:32px"></i>
                Usuario.
            </h5>
            <p>Esta opción es para que el usuario pueda cambiar sus datos relacionados con su nombre, correo, 
              password, etc.
            </p><hr>

          </div>        
        </main>
        
        <?php require "footer.php";?>
   
  </body>

</html>

