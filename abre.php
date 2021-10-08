<?php

$conexion= new mysqli("localhost","root","","contactos");
    if($conexion){
        echo "la gestion fue exitosa !!";
        /*header("lOCATION: INDEX.PHP");*/
    }else {
        echo "fallo la gestion";
    }
?>
