<?php
    //CONECCION A LA BASE DE DATOS
    function Conectarse(){
        if(!($link = mysqli_connect("localhost","root","12345678"))){
            echo "Credenciales incorrectas";
            exit();
        }

        if(!mysqli_select_db($link,"alumnosleones")){
            echo "Base de datos incorrecta";
            exit();
        }
        return $link;
    }