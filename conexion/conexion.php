<?php
    $user="root";
    $pass="";
    $dbname="at";
    try{
       $conexion=new PDO("mysql:host=localhost;charset=UTF8;dbname=$dbname",$user,$pass);
       echo "Conexión Exitosa";
        
    } catch (Exception $ex) {
       echo "Conexion no exitosa";
    }
