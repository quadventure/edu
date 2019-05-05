<?php

require_once "conexion.php";

class Model extends Conexion {
    private $varModel = "contenido varModel";

    private $link;
    private $stmt;

    function mostrarVarModel () {

        echo $this->varModel."<br>";

        echo "test dentro de Modelo <br>";
    }

    function conectar () {
        $this->link = Conexion::conexion();
    }

    function mostrar_tabla () {

//        echo var_dump ($this->link);
        
        $this->stmt = $this->link->prepare("SELECT id, usuario, password, email FROM usuarios");

        $this->stmt->execute();

		#fetchAll(): Obtiene todas las filas de un conjunto de resultados asociado al objeto PDOStatement.
//        echo var_dump ($this->stmt->fetchAll());
        
        return $this->stmt->fetchAll();

    }
}

