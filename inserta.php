<!-----
Página: inserta.php
Última actualización: 05-08-2019
Autor: Ismael García Hernández.
----->

<?php

    require "conexion.php"; //Establecemos conexión con la base de datos


    if (isset($_POST['submit'])) {//Si existe la variable submit obtenida se ejecuta la 
                                //sentencia para insertar registros en la tabla servicio (ticket')
        $servicio = [ //Se crea el array $servicio, contendrá los valores del registro a insertar.
            "descripcion"	=>$_POST['descripcion'],
            "usuario"		=>$_POST['usuario']
        ];

        $sql = "INSERT INTO servicio (descripcion, usuario)
            values (:descripcion, :usuario)";// Sentencia sql para insertar un registro.
        
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
        title="Levantar o agregar un tiket (servicio)."></i>
        Añadir un tiket (servicio).
    </h4>    
    <hr>
    
    <div style="width:50%;">

        <!--En caso de que se oprima el boton submit para añadir y se alla insertado el registro $statement,
            muestra un mensaje de éxito.-->
		<?php if (isset($_POST['submit']) && $statement):?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Ticket fue añadido correctamente!</strong>Lo puede comprobar regresando al listado.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif;?>
        
		<!--Formulario para ingresar un nuevo ticket-->	
		<form method="POST" class="form-group">
        
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input class="form-control" type="text" name="descripcion" id="descripcion" required>
            </div>

            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input class="form-control" type="text" name="usuario" id="usuario" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-secondary" name="submit">Añadir</button>
                <a href="consulta.php" class="btn btn-secondary">Volver</a>
            </div>
            </form>
	</div>
</main>

<?php require "footer.php" ?><!-- Incluye el footer (pie de página)-->
