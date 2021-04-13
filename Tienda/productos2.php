<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bombas</title>

<?php
    if(isset($_REQUEST["val"])){
        $val = $_REQUEST["val"];
    }
    else{
        $val = "";
    }
    //header
    include('header_secundario.php');

    //body
    include('Partial files/body_productoses.php');

    //footer
    include('footer.php');
?>
<!-- Custom JS File -->
<script src="./productos.js"></script>