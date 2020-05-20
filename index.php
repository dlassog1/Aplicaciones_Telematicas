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
		 <!-- Index CSS -->
        <link rel="stylesheet" href="css/index.css" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <title>Login</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-none d-md-block image-container">

                </div>
                <div class="col-lg-6 col-md-6 form-container">
                    <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                        <div class="logo mb-3">
                            <img src="imagenes/user.png" width="150px">
                        </div>
                        <div class="heading mb-4">
                            <h3>Login</h3>
                        </div>
                        <form method="POST">
                            <div class="col-6 d-flex">
                                <h5>Usuario</h5>
                            </div>
                            <div class="form-input">
                                <span><i class="fa fa-envelope"></i></span>
                                <input type="email" placeholder="Ingrese su usuario" name="txtusuariou" required="true">
                            </div>
                            <div class="col-6 d-flex">
                                <h5>Contraseña</h5>
                            </div>
                            <div class="form-input">
                                <span><i class="fa fa-lock"></i></span>
                                <input type="password" placeholder="Ingrese la contraseña" name="txtpassu1" required="true">
                            </div>
                            <div class="row mb-3">
                                <div class="col-6 d-flex">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cb1">
                                        <label class="custom-control-label text-white" for="cb1">Recordar Contraseña</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="" class="forget-link">Olvide Contraseña</a>
                                </div>
                            </div>
                            <div class="text-left mb-3">
                                <button type="submit" class="btn" name="btnaccederu">Acceder</button>
                            </div>
                            <div style="color: #777">No tienes una cuenta
                                <a href="" class="register-link">Registrate aqui</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
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
