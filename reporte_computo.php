<!-----
Página: reporte_equipo.php
Última actualización: 05-08-2019
Autor: Ismael García Hernández.
----->
<?php
	require "conexion.php"; //Incluye la conexión a la base de datos

	//Borrar registro
	if (isset($_GET['id_equipo'])){ //Si existe la variable id_servicio se ejecuta la sentencia sql de eliminación
		$sql="DELETE FROM equipo WHERE id_equipo=:id_equipo";//Elimina todos los registros de la tabla 
			//servicios cuyo campo id_servicio sea igual a la variable obtenida por $_GET id_servicio.
		try {
			$statementDelete=$conexion->prepare($sql); //Prepara la sentencia sql y la asigna a $statementDelete
			$statementDelete->bindValue (':id_equipo', $_GET['id_equipo']); //la variable es vinculada como una referencia y solamente será evaluada en el momento en el que se llame a $statementDelete
			$statementDelete->execute(); //Ejectuca la sentencia

		} catch (PDOException $error){//En caso de error en la sentencia anterior, muestra un mensaje.
			echo $error->getMessage();
		}
	}

	$sql="SELECT * FROM equipo WHERE id_equipoclase=0";// Sentencia sql para obtener todos los registros de la tabla servicio

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
		title="Reporte equipo de cómputo."></i>
		Reporte equipo de cómputo.
		
		<a href="mensaje.php" class="btn btn-outline-secondary my-2 my-sm-0"style="margin-left: 10px;"><i class="fa  fa-print" title="Imprimir el catálogo."></i></a>
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
				<th >Descripcion</th>
                <th >Marca</th>
                <th >Modelo</th>
                <th >Serie</th>
                <th >Fecha/compra</th>
                <th >Precio</th>
                <th >Condición</th>
                <th >Estatus</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach($resultado as $fila):?><!--Ciclo for para recorrer el arreglo $resultado-->
				<tr>
                    <td><?php echo $fila["id_equipo"];?></td>
                    <td><?php echo $fila["descripcion"];?></td>
					<td><?php echo $fila["marca"];?></td>
                    <td><?php echo $fila["modelo"];?></td>
                    <td><?php echo $fila["serie"];?></td>
                    <td><?php echo $fila["fechacompra"];?></td>
                    <td><?php echo $fila["precio"];?></td>
                    <td><?php echo $fila["condicion"];?></td>
                    <td><?php echo $fila["estatus"];?></td>
                    
					
				
								
				</tr>

			<?php endforeach; ?>
		</tbody>
	</table>

</main>

<?php require "footer.php"; ?> <!--Incluye el footer (pie de página)-->
