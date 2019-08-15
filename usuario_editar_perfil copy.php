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
	if (isset($_GET['id_usuario'])){ //Si existe la variable id_servicio se ejecuta la sentencia sql de eliminación
		$sql="DELETE FROM usuario WHERE id_usuario=:id_usuario";//Elimina todos los registros de la tabla 
			//servicios cuyo campo id_servicio sea igual a la variable obtenida por $_GET id_servicio.
		try {
			$statementDelete=$conexion->prepare($sql); //Prepara la sentencia sql y la asigna a $statementDelete
			$statementDelete->bindValue (':id_usuario', $_GET['id_usuario']); //la variable es vinculada como una referencia y solamente será evaluada en el momento en el que se llame a $statementDelete
			$statementDelete->execute(); //Ejectuca la sentencia

		} catch (PDOException $error){//En caso de error en la sentencia anterior, muestra un mensaje.
			echo $error->getMessage();
		}
	}

	$sql="SELECT TOP 1 * FROM usuario";// Sentencia sql para obtener todos los registros de la tabla servicio

	try {	
		$statement =$conexion->prepare($sql);//Prepara la sentencia sql y la asigna a $statementDelete
		$statement->execute(); //Ejectuca la sentencia
		$resultado = $statement->fetchAll(); //Al macena el resultado de la consulta en un array $resultado

	} catch (PDOException $error) {//En caso de error en la sentencia anterior, muestra un mensaje.
		echo $error->getMessage();
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

            <form class="form-signin" style="text-align:center;" action="mensaje.php" >
                <!--Imagen representativa para el login-->
                
                <h1 class="h3 mb-3 font-weight-normal">Modifique sus datos</h1>
                <?php foreach($resultado as $fila):?><!--Ciclo for para recorrer el arreglo $resultado-->
                  <label for="id_usuario" class="sr-only">Id_usuario</label>
                  <input type="hidden" id="id_usuario" class="form-control" placeholder="Id usuario"
                  value='<?php echo $fila["id_usuario"];?>'>

                  <label for="usuario" class="sr-only">Usuario</label>
                  <input type="text" id="usuario" class="form-control" placeholder="Correo electrónico" required autofocus>

                  <label for="nombre" class="sr-only">Nombre</label>
                  <input type="text" id="nombre" class="form-control" placeholder="Nombre y apellidos" required>

                  <label for="email" class="sr-only">Dirección</label>
                  <input type="email" id="email" class="form-control" placeholder="Email" required>
                  
                  <label for="password" class="sr-only">password</label>
                  <input type="text" id="password" class="form-control" placeholder="password" required>

    

                  <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>

                  <a href="index.php" class="btn btn-lg btn-success btn-block"style="">Cancelar</a>
                  <?php endforeach; ?>
              </form>
            </div>

            

            <?php foreach($resultado as $fila):?><!--Ciclo for para recorrer el arreglo $resultado-->
				<tr>
                    <td><?php echo $fila["id_usuario"];?></td>
                    <td><?php echo $fila["usuario"];?></td>
					<td><?php echo $fila["password"];?></td>
                    <td><?php echo $fila["email"];?></td>
                    <td><?php echo $fila["nombre"];?></td>
                    <td><?php echo $fila["apellido_p"];?></td>
                    <td><?php echo $fila["apellido_m"];?></td>
                    <td><?php echo $fila["adscripcion"];?></td>
                    <td><?php echo $fila["tipousuario"];?></td>
                    
					
				
					<td><!-- Íconos para ejecutar las acciones de actualización y eliminación-->
						<a href="actualiza-usuario.php?id_usuario=<?php echo $fila["id_usuario"];?>"
							style="margin-right: 5px;"><i class="far fa-edit" title="Editar un ticket."></i></a> 
					
						<a href="cat_usuario.php?id_usuario=<?php echo $fila["id_usuario"];?>"
						style="margin-right: 5px; color:red;"><i class="far fa-trash-alt" title="Eliminar un ticket."></i></a> 
					</td>				
				</tr>

			<?php endforeach; ?>


            
          </div>        
        </main>

        <?php require "footer.php";?>
   
  </body>

</html>

