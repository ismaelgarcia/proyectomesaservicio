<!-----
Página: inserta_resguardo.php
Última actualización: 05-08-2019
Autor: Ismael García Hernández.
----->

<?php

    require "conexion.php"; //Establecemos conexión con la base de datos

    if (isset($_POST['submit'])) {//Si existe la variable submit obtenida se ejecuta la 
                                //sentencia para insertar registros en la tabla servicio (ticket')
        $servicio = [ //Se crea el array $servicio el cual contendrá los valores del registro a insertar.
            "equipo"	=>$_POST['equipo'],
            "empleado"		=>$_POST['empleado'],
            "fecharesguardo"		=>$_POST['fecharesguardo']

        ];

        $sql = "INSERT INTO resguardo (equipo, empleado, fecharesguardo)
            values (:equipo,:empleado, :fecharesguardo)";// Sentencia sql para insertar un registro en la tabla servicio
        
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
        title="añade un reguardo."></i>
        Añadir un resguardo.
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
                <label for="descripcion">Equipo:</label>
                <input class="form-control" type="text" name="equipo" id="equipo" required>
            </div>

            <div class="form-group">
                <label for="marca">Resguardante:</label>
                <input class="form-control" type="text" name="empleado" id="empleado" required>
            </div>

               <div class="form-group">
                <label for="fechacompra">Fecha de resguardo:</label>
                <input class="form-control" type="date" name="fecharesguardo" id="fecharesguardo" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-secondary" name="submit">Añadir</button>
                <a href="resguardos.php" class="btn btn-secondary">Volver</a>
            </div>
            </form>
	</div>
</main>

<?php require "footer.php" ?><!-- Incluye el footer (pie de página)-->
