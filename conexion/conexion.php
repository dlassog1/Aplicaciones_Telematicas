<?php
    $user="root";
    $pass="";
    $dbname="tiendavirtual_bd";
    try{
       $conexion=new PDO("mysql:host=localhost;charset=UTF8;dbname=$dbname",$user,$pass);
       //echo "Conexión Exitosa";

    } catch (Exception $ex) {
       echo "Conexion no exitosa";
    }

    function mostrar($sql){
        $mostrar=$this->cone->query($sql);
        return $mostrar;
    }
    function insertar($sql){
        $inser=$this->cone->prepare($sql);
        $mensa="";
        if($inser->execute()){
            $mensa= "<script> alert(\"Los datos se han ingresado con éxito\"); </script>";
        } else {
            $mensa="<script> alert(\"Error-->Revise los datos ingresados\"); </script>";
        } 
        return $mensa;
    }
