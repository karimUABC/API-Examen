<?php
include_once 'db.php';

class Libros extends db{

    function AllLibros(){
        $query = $this->connect()->query('SELECT * FROM Libros ORDER BY libroId DESC');
        return $query;
    }

    function addLibro($libro){
        $query = $this->connect()->prepare('INSERT INTO Libros (autor, titulo, fechaPublicacion, contenido) VALUES (:autor, :titulo, :fechaPublicacion, :contenido)');
        $query->execute(['autor' => $libro['autor'], 'titulo' => $libro['titulo'], 'fechaPublicacion' => $libro['fechaPublicacion'], 'contenido' => $libro['contenido']]);
        return $query;
    }

    function LibroByTitulo($titulo){
       $query = $this->connect()->prepare('SELECT * FROM Libros WHERE titulo LIKE :titulo ORDER BY libroId DESC');
        $query->execute(['titulo' => '%' . $titulo . '%']); // Utilizamos '%' para buscar coincidencias parciales en el título
        return $query;
    }

    function LibroByAutor($autor){
        $query = $this->connect()->prepare('SELECT * FROM Libros WHERE autor LIKE :autor ORDER BY libroId DESC');
         $query->execute(['autor' => '%' . $autor . '%']); // Utilizamos '%' para buscar coincidencias parciales en el título
         return $query;
     }

     function LibroByContenido($contenido){
        $query = $this->connect()->prepare('SELECT * FROM Libros WHERE contenido LIKE :contenido ORDER BY libroId DESC');
         $query->execute(['contenido' => '%' . $contenido . '%']); // Utilizamos '%' para buscar coincidencias parciales en el título
         return $query;
     }
    
    
}
?>