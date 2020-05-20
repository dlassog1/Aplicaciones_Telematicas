<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require './metodos/usuario.php';
    $usuario = new Usuario();
?>

<html lang="es">
    <head>
        <meta charset="UTF-8">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title></title>
    </head>
    <body>
        <div class="container">
            <h1>Login</h1>
        </div>
        <div class="container border">
            <br>
            <form method="POST" align="center">

                <div class="form-group">
                    <label>Usuario</label>
                    <input type="email" class="form-control" placeholder="Ingrese su usuario" name="txtusuariou">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" placeholder="Ingrese la contraseña" name="txtpassu1">
                </div>
                
                <button type="submit" class="btn btn-primary" name="btnaccederu">Acceder</button>
                
            </form>
            <br>
        </div>

        <?php
            if($_POST){
                $nombres_u=$_POST['txtusuariou'];
                $contraseña=$_POST['txtpassu1'];
                $usuario->comprobarUsuario($nombres_u,$contraseña);
            }
            
        ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>
