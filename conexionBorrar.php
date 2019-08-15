<?php
    define("HOST_DB","localhost");
    define("USER_DB","root");
    define("PASS_DB",'');
    define("NAME_DB","mesaservicio");

    $conexion=new mysqli(
        constant ("HOST_DB"),
        constant ("USER_DB"),
        constant ("PASS_DB"),
        constant ("NAME_DB")
    );

    //Para que se visualicen los acentos y demas caracteres.
    mysqli_set_charset($conexion,'utf8');
    

?>


























<?php
    // Conexión base de datos del hosting
    /*define("HOST_DB","localhost");
    define("USER_DB","id10342591_root");
    define("PASS_DB","igh12122");
    define("NAME_DB","id10342591_mesaservicio");

    $conexion=new mysqli(
        constant ("HOST_DB"),
        constant ("USER_DB"),
        constant ("PASS_DB"),
        constant ("NAME_DB")
    );
    //$conexion -> exec(" SETCHARACTER SET utf8");*/

?>