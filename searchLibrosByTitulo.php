<?php
header('Content-Type: application/json; charset=utf-8');

include_once 'apiLibros.php';

$api = new apiLibros();

if (isset($_GET['titulo'])) {
    $titulo = $_GET['titulo'];

    if (!empty($titulo)) {
        $api->getByTitulo($titulo);
    } else {
        echo json_encode(array('mensaje' => 'Por favor ingresa un título válido.'), JSON_UNESCAPED_UNICODE);
    }
} else {
    echo json_encode(array('mensaje' => 'Por favor ingresa un título válido.'), JSON_UNESCAPED_UNICODE);
}
?>