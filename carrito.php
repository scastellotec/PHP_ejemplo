<?php
    session_start();
    // recojo los datos del REQUEST
    $id = $_REQUEST["id"];
    $nombre = $_REQUEST["nombre"];
    $precio = $_REQUEST["precio"];

    // Lo guardo en la sesion

    /*$prodsession = [
        "id" => $id,
        "nombre" => $nombre,
        "precio" => $precio
    ];
*/

    $prodsession = [$id, $nombre, $precio];
    $_SESSION["$nombre"] = $prodsession;

    // Me redirijo a index.php
    header("Location: index.php");
?>