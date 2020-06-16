<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
//<?php
//if (isset($_SESSION['error'])){
//    $class = 'error';
//    $mensaje = $_SESSION['error'];
//    unset($_SESSION['error']);
//}else{
//    $class = 'info';
//    $mensaje = "Ingresa tu correo y te haremos recuperar la clave de acceso";
//}
//?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="../Css/index.css">
        <title></title>
    </head>
    <body>
        <div class="container modal-dialog modal-content mt-5 form-box">
            <form method="post">
                <div class="form-group text-center mt-2">
                    <h1>Recuperar Contraseña</h1>
                </div>
                <div class="form-group text-center">
                    <img src="../Ima/user2.png" width="150px">
                </div>
                <div class="form-group text-center">
                    <p class="">Ingresa tu correo y te haremos recuperar la clave de acceso</p>
                </div>
                <div class="form-group">
                    <label>Correo Electrónico</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" required="true" placeholder="Ingrese su correo" name="txtcorreou">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="btncambiarclaveu">Enviar</button>
                </div>
            </form>
        </div>
        <?php
        // put your code here
        /*if (isset($_POST["btncambiarclaveu"])) {
            $txtcorreou = $_POST["txtcorreou"];

            include '../Conexion/conexion.php';
            $conectar = conexion();
            $sql = "SELECT NOMBRES_U, APELLIDOS_U, CONTRASENA FROM usuarios WHERE CORREO_U = '$txtcorreou' LIMIT 1";
            $result = mysqli_query($conectar, $sql) or die('NO SE EJECUTO LA CONSULTA');

            $filas = mysqli_fetch_assoc($result);
            var_dump($filas);
            if (!$filas) {
                $_SESSION['error'] = "Usuario Inexistente";
                die();
            }
        }*/
        ?>
    </body>
</html>
