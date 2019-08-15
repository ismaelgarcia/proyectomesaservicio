<!-----
Página: login.php
Título: Login
Estilos: "signin.css"
Última actualización: 05-08-2019
Autor: Ismael García Hernández.
----->
<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Login</title>    
    <meta charset="UTF-8">
    <link href="css/all.css" rel="stylesheet"><!--Estilos para los íconos fuente awesome-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="css/sitio/signin.css"><!--Estilo personalizado de esta página-->
  </head>  
  
  <body>
    <form class="form-signin" style="text-align:center;" action="index.html">
      <!--Imagen representativa para el login-->
      <img class="mb-4" src="media/img/helpdesk-icon.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Ingrese con sus datos</h1>
      <label for="inputEmail" class="sr-only">Coreo electrónico</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordar...
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2019. Proyecto Mesa de servicio.</p>
    </form>
    <?php require "footer.php";?>
  </body>  
</html>


