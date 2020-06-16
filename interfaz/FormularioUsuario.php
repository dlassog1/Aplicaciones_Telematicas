<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">        
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <title></title>
    </head>
    <body>
        <div class="container modal-content mt-5 form-box">
            <form method="post">
                <div class="form-group text-center mt-2 border bg-warning rounded">
                    <h1>Registro de Usuario</h1>
                </div>
                <div class="form-group">
                    <h2>Crear Cuenta</h2>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-muted"><strong>Nombres</strong></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" required="true" placeholder="Ingrese sus dos nombres" name="txtnombresu">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label class="text-muted"><strong>Apellidos</strong></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" required="true" placeholder="Ingrese sus dos apellidos" name="txtapellidosu">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-muted"><strong>Correo Electrónico</strong></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" aria-describedby="emailHelp" required="true" placeholder="Ingrese su correo" name="correou">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-muted"><strong>Contraseña</strong></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" required="true" placeholder="Ingrese una contraseña" name="txtcontraseñau">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-muted"><strong>Teléfono</strong></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" required="true" placeholder="Ingrese su numero telefónico" name="txtfonou">
                        </div>
                    </div>
                    <div class="form-group col-md-6 text-right">
                        <a class="btn btn-success" href="VisualizarUsuario.php" role="button">Visualizar</a>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded-pill" style="width: 150px; height: 40px; cursor: pointer;" name="btnregistraru">Registrar</button>
                </div>
            </form>
        </div>

        <?php
        // put your code here
        if (isset($_POST["btnregistraru"])) {
            $nombresu = $_POST["txtnombresu"];
            $apellidosu = $_POST["txtapellidosu"];
            $correou = $_POST["correou"];
            $contraseñau = $_POST["txtcontraseñau"];
            $telefonou = $_POST["txtfonou"];
            include_once '../Metodos/Usuario.php';
            RegistrarUsuario($nombresu, $apellidosu, $correou, $contraseñau, $telefonou);
        }
        ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    </body>
</html>
