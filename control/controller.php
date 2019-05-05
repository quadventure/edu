<?php

class Controller {

    private $varController = "contenido varController";

    function mostrarVarController () {


        echo $this->varController."<br>";

        echo "teste dentro de Controller<br>";

        $model = new Model ();
        
        $model -> mostrarVarModel ();

        $pdo_link = $model -> conectar ();

//        echo var_dump ($pdo_link);

        $users = $model -> mostrar_tabla ();

//        echo var_dump ($users);

        foreach($users as $row => $item){
            echo $item["usuario"]."<br>".$item["password"]."<br>".$item["email"]."<br>".$item["id"]."<br>";
        }


    }

    function mostrarTemplate () {
        include "view/template.php";
    }
}

