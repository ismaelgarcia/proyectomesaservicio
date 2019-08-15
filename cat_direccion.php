<!-----
Página: cat_direccion.php
Última actualización: 05-08-2019
Autor: Ismael García Hernández.
----->
<?php
	require "conexion.php"; //Incluye la conexión a la base de datos

	//Borrar registro
	if (isset($_GET['id_direccion'])){ //Si existe la variable id_servicio se ejecuta la sentencia sql de eliminación
		$sql="DELETE FROM direccion WHERE id_direccion=:id_direccion";//Elimina todos los registros de la tabla 
			//servicios cuyo campo id_servicio sea igual a la variable obtenida por $_GET id_servicio.
		try {
			$statementDelete=$conexion->prepare($sql); //Prepara la sentencia sql y la asigna a $statementDelete
			$statementDelete->bindValue (':id_direccion', $_GET['id_direccion']); //la variable es vinculada como una referencia y solamente será evaluada en el momento en el que se llame a $statementDelete
			$statementDelete->execute(); //Ejectuca la sentencia

		} catch (PDOException $error){//En caso de error en la sentencia anterior, muestra un mensaje.
			echo $error->getMessage();
		}
	}

	$sql="SELECT * FROM direccion";// Sentencia sql para obtener todos los registros de la tabla servicio

	try {	
		$statement =$conexion->prepare($sql);//Prepara la sentencia sql y la asigna a $statementDelete
		$statement->execute(); //Ejectuca la sentencia
		$resultado = $statement->fetchAll(); //Al macena el resultado de la consulta en un array $resultado

	} catch (PDOException $error) {//En caso de error en la sentencia anterior, muestra un mensaje.
		echo $error->getMessage();
	}
?>

<?php require "header.php";?> <!--Incluye el menu de avegacion-->




        <!--Contenedor principal-->
        <main role="main" class="container" style="margin-bottom: 75px;"> 
	<h4><i class="far  fa-list-alt" 
		style="margin-right: 5px; color:blue" 
		title="Catalálogo de Equipos"></i>
		Catálogo de Direcciones.
		<a href="inserta_direccion.php" class="btn btn-outline-secondary my-2 my-sm-0"style="margin-left: 50px;"><i class="fa  fa-plus" title="Agregar un ticket."></i></a>
		<a href="mensaje.php" class="btn btn-outline-secondary my-2 my-sm-0"style="margin-left: 10px;"><i class="fa  fa-print" title="Agregar un equipo."></i></a>
	</h4>

	<?php if (isset($statementDelete)) :?><!--Si se eliminó el registro muestra un mensaje de éxito-->
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Registro eliminado correctamente!</strong> Puede comprobar que ya no aparece en el listado.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif;?> 

	<table class="table table-striped"> <!--- Tabla para presentar todos los registros de la tabla con sus acciones edición y eliminación-->
		<thead >
			<tr>
				<th >#</th>
				<th >Direccion</th>
				<th >Titular</th>

				<th >Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($resultado as $fila):?><!--Ciclo for para recorrer el arreglo $resultado-->
				<tr>
					<td><?php echo $fila["id_direccion"];?></td>
					<td><?php echo $fila["nombre"];?></td>
					<td><?php echo $fila["titular"];?></td>
					
				
					<td><!-- Íconos para ejecutar las acciones de actualización y eliminación-->
						<a href="actualiza-direccion.php?id_direccion=<?php echo $fila["id_direccion"];?>"
							style="margin-right: 5px;"><i class="far fa-edit" title="Editar un ticket."></i></a> 
					
						<a href="cat_direccion.php?id_direccion=<?php echo $fila["id_direccion"];?>"
						style="margin-right: 5px; color:red;"><i class="far fa-trash-alt" title="Eliminar un ticket."></i></a> 
					</td>				
				</tr>

			<?php endforeach; ?>
		</tbody>
	</table>

</main>

<?php require "footer.php"; ?> <!--Incluye el footer (pie de página)-->
