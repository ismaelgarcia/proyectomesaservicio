<!-----
Página: borado.php
Título: Ayuda
Autor: Ismael García Hernández.
----->

<?php
    require "conexion.php";//Conexión con la base de datos

    if (isset($_GET['id_servicio'])){//Si existe la variable id_servico obtenida por Get se ejecuta el sql
        $sql="DELETE FROM servicio WHERE id_servicio=:id_servicio"; //Sentencia para elminar el registro según su id
        try {
            $statementDelete=$conexion->prepare($sql);//Se crea el objeto $statementDelete de tipo conexión el cual recibe la sentencia sql
            $statementDelete->bindValue (':id_servicio', $_GET('id_servicio');//la variable es vinculada como una referencia y solamente será evaluada en el momento en el que se llame a $statementDelete
            $statementDelete->execute(); //Se ejeuta la sentencia, en este caso la consulta para la eliminación del registro.

        } catch (PDOException $error){ //En caso de que no se haya tenido éxito la sentencia anterior, se muestra un mensaje
            echo $error->getMessage();
        }
    }

    $sql="SELECT * FROM servicio";//Sentencia sql para seleccionar todos los registros de la tabla servicios (ticket´s)

    try {        
        $statement =$conexion->prepare($sql);//Se crea el objeto $statementDelete de tipo conexión el cual recibe la sentencia sql
        $statement->execute(); //Se ejecuta la sentencia, en este caso la consulta de todos los registros.
        $resultado = $statement->fetchAll();//El resultado de la consulta se almacena en un array

    } catch (PDOException $error) {//En caso de que no se haya tenido éxito la sentencia anterior, se muestra un mensaje
        echo $error->getMessage();
    }
?>

<?php require "header.php"; ?><!--Incluye el menú de navegación-->

<main role="main" class="container" style="margin-bottom: 75px;"> 
    <h4><i class="far  fa-list-alt" 
        style="margin-right: 5px; color:blue" 
        title="Catalálogo de Equipos"></i>
        Consulta de ticket's.
        <a href="update-single.php" class="btn btn-outline-secondary my-2 my-sm-0"style="margin-left: 50px;"><i class="fa  fa-plus" title="Agregar un ticket."></i></a>
        <a href="mensaje.php" class="btn btn-outline-secondary my-2 my-sm-0"style="margin-left: 10px;"><i class="fa  fa-print" title="Agregar un equipo."></i></a>
    </h4>

    <?php if (isset($stantementDelete) :?> <!--Si se logró eliminar el registro, visualizamos un mensaje-->
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Ticket eliminado correctamente!</strong> Puede comprobar que ya no aparece en el listado.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif;?>

    <!--Mostramos el resultado de la consulta (todos los registros) en una tabla-->
    <table class="table table-striped">
        <thead >
            <tr>
                <th >#</th>
                <th >Descripción del ticket</th>
                <th >Solicitante</th>
                <th >Fecha apertura</th>
                <th >Estatus</th>
                <th >Acciones</th>
            </tr>
        </thead>

        <tbody> <!--Para poblar las filas de la tabla usamos el ciclo foreach de php-->
            <?php foreach($resultado as $fila):?> 
                <tr>
                    <td><?php echo $fila["id_servicio"];?></td>
                    <td><?php echo $fila["descripcion"];?></td>
                    <td><?php echo $fila["usuario"];?></td>
                    <td><?php echo $fila["fecha"];?></td>
                    <td><?php echo $fila["estatus"];?></td>
                    <td> <!--Agregamos los íconos para las acciones y pasamos el id del servicio (ticket a actualizar o a eliminar)-->
                        <a href="update-single.php?id_servicio=<?php echo $fila["id_servicio"];?>"
                            style="margin-right: 5px;"><i class="far fa-edit" title="Editar un ticket."></i></a>

                        <a href="borrado.php?id_servicio=<?php echo $fila["id_servicio"];?>"
                            style="margin-right: 5px; color:red;"><i class="far fa-trash-alt" title="Eliminar un ticket."></i></a> 
                    </td>                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php require "footer.php"; ?> <!--Incluye el footer (pie de página)-->
