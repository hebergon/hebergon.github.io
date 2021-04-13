<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'pruebahyp');
    if(!$conexion){
        die(mysqli_error());
    }
    $open = fopen('marcas.txt', 'r');
    while(!feof($open)){
        $getTextLine = fgets($open);
        $explodeLine = explode(" - ", $getTextLine);
        list($nombre, $descripcion, $imagen) = $explodeLine;
        $descripcion = ucfirst($descripcion);
        echo $nombre." <br>";
        echo $descripcion." <br>";
        echo $imagen." <br>";
        $qry = "INSERT INTO marcas (id, nombre, descripcion, imagen) values('','".$nombre."', '".$descripcion."', '".$imagen."')";
        mysqli_query($conexion, $qry);
    }
    fclose($open);

?>