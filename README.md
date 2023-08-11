# API-Examen
## API del proyecto
Estos son los archivos que se utilizaron para realizar el servicio web API REST. Están alojados en un host gratuito (000.webhost.com). Si deseas probarlo de forma local, debes modificar el archivo db.php
colocando los valores de tu servidor en el siguiente fragmento de código:

### db.php

```PHP
public function __construct(){
        $this->host     = '';
        $this->db       = '';
        $this->user     = '';
        $this->password = "";
        $this->charset  = '';
    }

```

A continuación le proporcionaré la tabla de la base de datos en MySQL que se utilizó para almacenar los registros:

### Tabla Libros
```SQL
CREATE TABLE Libros (
    libroId int NOT NULL AUTO_INCREMENT,
    autor varchar(255) NOT NULL,
    titulo varchar(255) NOT NULL,
    fechaPublicacion date NOT NULL,
    contenido varchar(100) NOT NULL,
    PRIMARY KEY (libroId)
);
```
