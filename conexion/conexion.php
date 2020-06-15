<?php

function conexion(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "tiendavirtual_bd";
        $con = mysqli_connect($host, $user, $pass, $database) or die ("Error al conectar a la base");
        return $con;
    
    }