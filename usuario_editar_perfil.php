<!-----
Página: usuario_editar_perfil.php
Título: Editar perfil de usuario
Estilos: "starter-template.css","sticky-footer.css"
Última actualización: 05-08-2019
Autor: Ismael García Hernández.
----->
<?php
	require "conexion.php"; //Incluye la conexión a la base de datos

	//Borrar registro
  //if (isset($_GET['id_usuario'])) {//Si la variable id_servicio y es obtenida po $_GET 
    //se ejecutala la sentencia para obtener los valores del registro a actualizar

  $sql="SELECT * FROM usuario LIMIT 1";
    //WhERE id_usuario= :id_usuario";
  
  try {
    $statement =$conexion->prepare($sql);//Se prepara la sentencia sql y se asigna al objeto $statement
    //$statement->bindValue(':id_usuario', $_GET['id_usuario']);//Para respetar el valor si la variable llegase a cambiar
    $statement->execute();//Se ejecuta la sentencia para actualizar el registro.
    //$resultado = $statement->fetch(PDO::FETCH_ASSOC);
    $resultado = $statement->fetchAll();

  } catch (PDOException $error) {//En caso de que no se pueda actualizar el registro, se muestra el error.
    echo $error->getMessage();
  }

//} else {//En caso de que no se haya proporcionado un id_servicio, se muestra el mensaje respectivo.
  //echo "Se necesita un id";
  //exit;
//}

if (isset($_POST['submit'])) {//Si se submitó, se prepara un arreglo clave-valor en el array $servicio
  /*$resultado = [
    "id_usuario"	=>$_GET['id_usuario'],
    "usuario"	=>$_GET['usuario'],
        "password"		=>$_GET['password'],
          "email"		=>$_GET['email'],
          "nombre"		=>$_GET['nombre']
    
    
  ];*/
  //Se establece la sentencia que se alamacenará en $sql para actualizar el registro cuyo id corresponda 
  //con el id seleccionado
  $id_usuario	=$_POST['id_usuario'];
  $usuario	=$_POST['usuario'];
  $password		=$_POST['password'];
  $email		=$_POST['email'];
  $nombre		=$_POST['nombre'];

  $sql="UPDATE usuario
    SET usuario='$usuario',
      password='$password',
      email='$email',
      nombre='$nombre'
    WHERE id_usuario='$id_usuario'";

  try {
    $statement =$conexion->prepare($sql);//Se prepara la sentencia $sql y se asigna al objeto $statement
    $statement->execute();//SE ejectua la sentencia sql almacenada en $statement
    
  header('Location: mensaje.php');


  } catch (PDOException $error) {//En caso de que no se pueda actualizar el registro, se muestra un mensaje
    echo $error->getMessage();
  }
  
}
?>

<?php require "header.php";?>
        <!--Contenedor principal-->
        <main role="main" class="container" style="margin-bottom: 75px;">        
          <div class="">
            
            <h4><i class="far  fa-address-card" 
                style="margin-right: 5px; color:blue" 
                title="Perfil de usuario"></i>
                Perfil del usuario.</h4>
            <hr>
            <div style="width:50%">

            <form method="POST" class="form-signin" style="text-align:center;" >
                <!--Imagen representativa para el login-->
                
                <h1 class="h3 mb-3 font-weight-normal">Modifique sus datos</h1>
                <?php foreach($resultado as $fila):?><!--Ciclo for para recorrer el arreglo $resultado-->
                  <label for="id_usuario" class="sr-only">Id_usuario</label>
                  <input type="hidden" id="id_usuario" name="id_usuario"class="form-control" placeholder="Id usuario"
                  value="<?php echo $fila["id_usuario"];?>">

                  <label for="usuario" class="sr-only">Usuario</label>
                  <input type="text" id="usuario"name="usuario"class="form-control" placeholder="Usuario" required autofocus
                  value="<?php echo $fila["usuario"];?>">
                

                  <label for="nombre" class="sr-only">Nombre</label>
                  <input type="text" id="nombre" name="nombre"class="form-control" placeholder="Nombre y apellidos" required
                  value="<?php echo $fila["nombre"];?>">

                  <label for="email" class="sr-only">Dirección</label>
                  <input type="email" id="email" name="email"class="form-control" placeholder="Email" required
                  value="<?php echo $fila["email"];?>">
                  
                  <label for="password" class="sr-only">password</label>
                  <input type="text" id="password" name="password"class="form-control" placeholder="password" required
                  value="<?php echo $fila["password"];?>">

    

                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Modificar</button>
                  <!--<button type="submit" class="btn btn-secondary" name="submit">Modificar</button>-->
                  <a href="index.php" class="btn btn-lg btn-success btn-block"style="">Cancelar</a>
                  <?php endforeach; ?>
              </form>
            </div>

            

          

            
          </div>        
        </main>

        <?php require "footer.php";?>
   
  </body>

</html>

