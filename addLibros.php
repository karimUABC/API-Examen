<?php


    include_once 'apiLibros.php';
    
    $api = new apiLibros();
    $autor = '';
    $titulo = '';
    $fechaPublicacion = '';
    $contenido = '';
    $error = '';

    if(isset($_POST['autor']) && isset($_POST['titulo']) && isset($_POST['fechaPublicacion']) && isset($_POST['contenido'])){

        $item = array(
            'autor' => $_POST['autor'],
            'titulo' => $_POST['titulo'],
            'fechaPublicacion' => $_POST['fechaPublicacion'],
            'contenido' => $_POST['contenido'],
        );
        $api->add($item);
       
    }else{
        $api->error('Error al llamar a la API');
    }


    
?>