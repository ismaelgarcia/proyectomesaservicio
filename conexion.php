<?php
    //Parámetros de configuración par conectar a la base de datos
    $host       ="localhost";//Es el host donde se encuentra la base de datos
    $usuariodb  ="root";//usuario, en este caso es root
    $password   ="";//Password en este caso no tiene password la base de datos
    $nombredb   ="mesaservicio";//Nombre de la base de dasor
    $dns        ="mysql:host=$host;dbname=$nombredb;charset=UTF8";
    try {
        
        $conexion=new PDO($dns,$usuariodb,$password); //Realiza la conexion a la base de dato 
                                                    //y la almacena en el objeto $conexion  
        //echo "Conexion exitosa con la base de datos: ". $nombredb;// Mensaje que indica que 
                                                    //se tuvo conexión con la base de datos
    } catch (PDOException $error){
        echo $error->getMessage();//En caso de que no se pueda conectar mandará un mensaje de error.
    }

?>