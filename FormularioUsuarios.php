<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title></title>
    </head>
    <body>

        <div class="container">
            <h1>Registro de Usuario</h1>
        </div>
        <div class="container border">
            <br>
            <form>
                <div class="form-group">
                    <label>Nombres</label>
                    <input type="text" class="form-control" placeholder="Ingrese sus dos nombres" name="txtnombresu" required="true">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Ingrese sus dos apellidos" name="txtapellidosu">
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="email" class="form-control" placeholder="Ingrese su correo electronico" name="txtcorreou">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" placeholder="Ingrese la contraseña" name="txtpassu">
                </div>
                <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" class="form-control" placeholder="Ingrese sus numero telefonico" name="txtfonou">
                </div>
                
                <button type="submit" class="btn btn-primary" name="btnregistraru">Registrar</button>
            </form>
            <br>
        </div>
        <?php
        // put your code here
        ?>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
