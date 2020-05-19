<?php
    $user="root";
    $pass="";
    $dbname="tiendavirtual_bd";
    try{
       $conexion=new PDO("mysql:host=localhost;charset=UTF8;dbname=$dbname",$user,$pass);
       echo "Conexión Exitosa";
       echo "PRUEBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
       echo "PRUEBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
       echo "PRUEBARA";
       echo "PRUEBARA";
       echo "PRUEBARA";
    } catch (Exception $ex) {
       echo "Conexion no exitosa";
    }
