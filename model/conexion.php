<?php

class Conexion {

    private $linkConexion;

    public function conexion () {

    $this->linkConexion = new PDO("mysql:host=localhost;dbname=cursophp","root","");

//        echo isset ($this->link);

//        echo var_dump($this->link);

    return $this->linkConexion;

    }


}