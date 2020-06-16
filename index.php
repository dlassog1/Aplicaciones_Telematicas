<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <!--        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
        <link rel="stylesheet" href="css/bootstrap.min.css">        
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <title></title>
    </head>
    <body>
        <div class="container modal-dialog modal-content mt-5 form-box">
            <form method="post">
                <div class="form-group text-center mt-2 border bg-warning rounded">
                    <h1>Iniciar Sesión</h1>
                </div>
                <div class="form-group text-center">
                    <img src="Ima/user2.png" width="180px">
                </div>
                <div class="form-group">
                    <label class="text-muted"><strong>Usuario</strong></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" aria-describedby="emailHelp" required="true" placeholder="Ingrese su usuario" name="txtusuario">
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-muted"><strong>Contraseña</strong></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" required="true" placeholder="Ingrese su contraseña" name="txtcontraseñau">
                    </div>
                </div>
                <div class="form-group">
                    <label><strong>¿No tiene un cuenta?</strong> <a href="Interfacez/FormularioUsuario.php"><strong>Create una.</strong></a></label>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary rounded-pill" name="btnregistraru" style="width: 150px; height: 40px; cursor: pointer;">Acceder</button>
                </div>
            </form>
        </div>

        <?php
        // put your code here
        if (isset($_POST["btnregistraru"])) {
            $txtusuario = $_POST["txtusuario"];
            $txtcontraseñau = $_POST["txtcontraseñau"];

            //VALIDAR USUARIO REGISTRADO
            include './Conexion/conexion.php';
            $conectar1 = conexion();
            $sql1 = "SELECT * FROM usuarios WHERE CORREO_U='$txtusuario' AND CONTRASENA='$txtcontraseñau'";
            $result1 = mysqli_query($conectar1, $sql1) or die('NO SE EJECUTO LA CONSULTA');

            $filas = mysqli_num_rows($result1);
            if ($filas > 0) {
                session_start();
                $_SESSION['username'] = $txtusuario;
                header("Location:./Interfacez/Bienvenido.php");
                //echo "Autenticado";
            } else {
                echo "<div class='container modal-dialog modal-content form-container text-center alert alert-primary' role='alert'>"
                . "<a class='alert-link'>Error en la autenticación</a></div>";
            }
            mysqli_free_result($result1);
            mysqli_close($conectar1);
        }
        ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>-->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    </body>
</html>
