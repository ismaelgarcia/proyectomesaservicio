<!-----
Página: actualiza-resguardo.php
Última actualización: 05-08-2019
Autor: Ismael García Hernández.
----->

<?php

	require "conexion.php";//Establecemos conexión con la base de datos

	if (isset($_GET['id_resguardo'])) {//Si la variable id_servicio y es obtenida po $_GET 
            //se ejecutala la sentencia para obtener los valores del registro a actualizar

		$sql="SELECT id_resguardo, equipo, empleado, fecharesguardo FROM resguardo
			WhERE id_resguardo= :id_resguardo";
		
		try {
			$statement =$conexion->prepare($sql);//Se prepara la sentencia sql y se asigna al objeto $statement
			$statement->bindValue(':id_resguardo', $_GET['id_resguardo']);//Para respetar el valor si la variable llegase a cambiar
			$statement->execute();//Se ejecuta la sentencia para actualizar el registro.
			$direccion = $statement->fetch(PDO::FETCH_ASSOC);

		} catch (PDOException $error) {//En caso de que no se pueda actualizar el registro, se muestra el error.
			echo $error->getMessage();
		}

	} else {//En caso de que no se haya proporcionado un id_servicio, se muestra el mensaje respectivo.
		echo "Se necesita un id";
		exit;
	}

	if (isset($_POST['submit'])) {//Si se submitó, se prepara un arreglo clave-valor en el array $servicio
		$direccion = [
			"id_resguardo"	=>$_POST['id_resguardo'],
            "equipo"	=>$_POST['equipo'],
            "empleado"		=>$_POST['empleado'],
            "fecharesguardo"		=>$_POST['fecharesguardo']
		];
		//Se establece la sentencia que se alamacenará en $sql para actualizar el registro cuyo id corresponda 
		//con el id seleccionado

		$sql="UPDATE resguardo
			SET id_resguardo=:id_resguardo,
				equipo=:equipo,
				empleado=:empleado,
                fecharesguardo=:fecharesguardo
            
				
			WHERE id_resguardo=:id_resguardo";

		try {
			$statement =$conexion->prepare($sql);//Se prepara la sentencia $sql y se asigna al objeto $statement
			$statement->execute($direccion);//SE ejectua la sentencia sql almacenada en $statement

		} catch (PDOException $error) {//En caso de que no se pueda actualizar el registro, se muestra un mensaje
			echo $error->getMessage();
		}
		
	}
?>

<?php require "header.php";?><!-- Insertamos el footer (pied de página-->

<main role="main" class="container" style="margin-bottom: 75px;">        
	<h4><i class="far  fa-edit" 
		style="margin-right: 5px; color:blue" 
		title="Editar un resguardo."></i>
		Editar un resguardo.
	</h4>
	<hr>
	<div style="width:50%;">
		<!--En caso de que se haya hecho submit, mostrar un mensaje de éxito-->
		<?php if (isset($_POST['submit']) && $statement):?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Registro actualizado correctamente! </strong> Puede comprobar que aparece modificado en el listado.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>			
		<?php endif;?>
		<!--Formulario que presentará los datos del registro y en el cual se actualizará-->	
		<form method="POST" class="form-group">
			<?php foreach ($direccion as $key=>$value) : ?><!--Ciclo for para recorrer el arreglo $servicio-->
				<div class="form-group">
					<label for="<?php echo $key;?>"><?php echo ucfirst($key);?></label>
					<input class="form-control" type="text" name="<?php echo $key;?>"id="<?php echo $key;?>"
						value="<?php echo $value;?>"<?php echo($key==='id'? 'readonly':null);?> required>
				</div>
			<?php endforeach; ?>

			<div class="form-group">
				<!--Botón que dispara la acción para actualizar y botón que regresa al listado de tickets'-->
				<button type="submit" class="btn btn-secondary" name="submit">Modificar</button>
				<a href="resguardos.php" class="btn btn-secondary">Volver</a>
			</div>
		</form>
	</div>
</main>

<?php require "footer.php" ?><!--Insertamos el footer (pie de página)-->
