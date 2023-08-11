<?php
header('Content-Type: application/json; charset=utf-8');

include_once 'apiLibros.php';

$api = new apiLibros();

if (isset($_GET['contenido'])) {
    $contenido = $_GET['contenido'];

    if (!empty($contenido)) {
        $api->getByContenido($contenido);
    } else {
        echo json_encode(array('mensaje' => 'Por favor ingresa un contenido válido.'), JSON_UNESCAPED_UNICODE);
    }
} else {
    echo json_encode(array('mensaje' => 'Por favor ingresa un contenido válido.'), JSON_UNESCAPED_UNICODE);
}
?>