<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'pruebahyp');
    if(!$conexion){
        die(mysqli_error());
    }
    $open = fopen('bombas.txt', 'r');
    while(!feof($open)){
        $getTextLine = fgets($open);
        $explodeLine = explode(",", $getTextLine);
        list($nombre, $categoria) = $explodeLine;
        $categoria = trim($categoria);
        $qry = "INSERT INTO productos (id, nombre, descripcion, categoria) values('','".$nombre."', 'lorem ipsum dolor', '".$categoria."')";
        mysqli_query($conexion, $qry);
    }
    fclose($open);

?>