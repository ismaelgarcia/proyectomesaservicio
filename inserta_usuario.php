<!-----
Página: inserta_usuario.php
Última actualización: 05-08-2019
Autor: Ismael García Hernández.
----->

<?php

    require "conexion.php"; //Establecemos conexión con la base de datos


    if (isset($_POST['submit'])) {//Si existe la variable submit obtenida se ejecuta la 
                                //sentencia para insertar registros en la tabla servicio (ticket')
        $servicio = [ //Se crea el array $servicio el cual contendrá los valores del registro a insertar.
            "usuario"	=>$_POST['usuario'],
            "password"		=>$_POST['password'],
            "email"		=>$_POST['email'],
            "nombre"		=>$_POST['nombre'],
            "apellido_p"		=>$_POST['apellido_p'],
            "apellido_m"		=>$_POST['apellido_m'],
            "adscripcion"		=>$_POST['adscripcion'],
            "tipousuario"		=>$_POST['tipousuario']
        ];

        $sql = "INSERT INTO usuario (usuario, password, email, nombre, apellido_p, apellido_m,adscripcion, tipousuario)
            values (:usuario,:password, :email,:nombre, :apellido_p, :apellido_m, :adscripcion, :tipousuario)";// Sentencia sql para insertar un registro en la tabla servicio
        
        try {
            $statement =$conexion->prepare($sql);//Se prepara la sentencia sql y se le asigna a la variable $statement
            $statement->execute($servicio);//Se ejecuta la sentencia sql contenida en la variable $statement

        } catch (PDOException $error) {//En caso de rerror en la sentencia anterior, muestra un mensaje
            echo $error->getMessage();
        }	
    }

?>

<?php require "header.php";?> <!-- Incluimos el menú de navegación-->

<main role="main" class="container" style="margin-bottom: 75px;">        
	<h4><i class="fa fa-plus" 
        style="margin-right: 5px; color:blue" 
        title="añade un usuario."></i>
        Añadir un usuario.
    </h4>    
    <hr>
    
    <div style="width:50%;">

        <!--En caso de que se oprima el boton submit para añadir y se alla insertado el registro $statement,
            muestra un mensaje de éxito.-->
		<?php if (isset($_POST['submit']) && $statement):?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>El registro fue añadido correctamente!</strong>Lo puede comprobar regresando al listado.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif;?>
        
		<!--Formulario para ingresar un nuevo ticket-->	
		<form method="POST" class="form-group">
        
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input class="form-control" type="text" name="usuario" id="usuario" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="text" name="password" id="password" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input class="form-control" type="text" name="nombre" id="nombre" required>
            </div>

            <div class="form-group">
                <label for="apellido_p">Apellido paterno:</label>
                <input class="form-control" type="text" name="apellido_p" id="apellido_p" required>
            </div>

            <div class="form-group">
                <label for="apellido_m">Apellido materno:</label>
                <input class="form-control" type="text" name="apellido_m" id="apellido_m" required>
            </div>

            <div class="form-group">
                <label for="adscripcion">Adscripción:</label>
                <input class="form-control" type="number" name="adscripcion" id="adscripcion" required>
            </div>

            <div class="form-group">
                <label for="tipousuario">Tipo usuario:</label>
                <input class="form-control" type="number" name="tipousuario" id="tipousuario" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-secondary" name="submit">Añadir</button>
                <a href="cat_usuario.php" class="btn btn-secondary">Volver</a>
            </div>
            </form>
	</div>
</main>

<?php require "footer.php" ?><!-- Incluye el footer (pie de página)-->
