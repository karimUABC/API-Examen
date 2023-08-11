<?php
header('Content-Type: application/json; charset=utf-8');

include_once 'apiLibros.php';

$api = new apiLibros();

if (isset($_GET['autor'])) {
    $autor = $_GET['autor'];

    if (!empty($autor)) {
        $api->getByAutor($autor);
    } else {
        echo json_encode(array('mensaje' => 'Por favor ingresa un autor válido.'), JSON_UNESCAPED_UNICODE);
    }
} else {
    echo json_encode(array('mensaje' => 'Por favor ingresa un autor válido.'), JSON_UNESCAPED_UNICODE);
}
?>