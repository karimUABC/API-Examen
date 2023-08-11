<?php

include_once 'libros.php';

class apiLibros{


    function getAll(){
        $libro = new Libros();
        $librosArray = array();
        $librosArray["items"] = array();

        $res = $libro->AllLibros();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "libroId" => $row['libroId'],
                    "autor" => $row['autor'],
                    "titulo" => $row['titulo'],
                    "fechaPublicacion" => $row['fechaPublicacion'],
                    "contenido" => $row['contenido']
                );
                array_push($librosArray["items"], $item);
            }
        
            echo json_encode($librosArray);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }

    function getByTitulo($titulo){
        $libro = new Libros();
        $librosArray = array();
        $librosArray["items"] = array();

        $res = $libro->LibroByTitulo($titulo);

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item=array(
                    "libroId" => $row['libroId'],
                    "autor" => $row['autor'],
                    "titulo" => $row['titulo'],
                    "fechaPublicacion" => $row['fechaPublicacion'],
                    "contenido" => $row['contenido']
                );
                array_push($librosArray["items"], $item);
            }

            // Imprimir la respuesta en formato JSON
            $this->printJSON($librosArray);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }


    function getByAutor($autor){
        $libro = new Libros();
        $librosArray = array();
        $librosArray["items"] = array();

        $res = $libro->LibroByAutor($autor);

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item=array(
                    "libroId" => $row['libroId'],
                    "autor" => $row['autor'],
                    "titulo" => $row['titulo'],
                    "fechaPublicacion" => $row['fechaPublicacion'],
                    "contenido" => $row['contenido']
                );
                array_push($librosArray["items"], $item);
            }

            // Imprimir la respuesta en formato JSON
            $this->printJSON($librosArray);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }

    function getByContenido($contenido){
        $libro = new Libros();
        $librosArray = array();
        $librosArray["items"] = array();

        $res = $libro->LibroByContenido($contenido);

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item=array(
                    "libroId" => $row['libroId'],
                    "autor" => $row['autor'],
                    "titulo" => $row['titulo'],
                    "fechaPublicacion" => $row['fechaPublicacion'],
                    "contenido" => $row['contenido']
                );
                array_push($librosArray["items"], $item);
            }

            // Imprimir la respuesta en formato JSON
            $this->printJSON($librosArray);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }


    
    
    function add($item){
        $libro = new Libros();

        $res = $libro->addLibro($item);
        $this->exito('Nueva pelicula registrada');
    }


    function error($mensaje){
        echo '<code>' . json_encode(array('mensaje' => $mensaje)) . '</code>'; 
    }

    function exito($mensaje){
        echo '<code>' . json_encode(array('mensaje' => $mensaje)) . '</code>'; 
    }

function printJSON($array){
        echo json_encode($array);
    }





}

?>