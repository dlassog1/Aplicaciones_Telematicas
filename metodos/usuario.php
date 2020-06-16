<?php

include_once '../Conexion/conexion.php';

function RegistrarUsuario($nombresu, $apellidosu, $correou, $contraseñau, $telefonou) {
    $conectar = conexion();
    $sql1 = "select * from usuarios where CORREO_U='$correou'";
    $result1 = mysqli_query($conectar, $sql1) or die('NO SE EJECUTO LA CONSULTA');
    if (mysqli_num_rows($result1) >= 1) {
        echo "CORREO REPETIDO";
    } else {
        $sql = "INSERT INTO usuarios (NOMBRES_U,APELLIDOS_U,CORREO_U,"
                . "CONTRASENA,TELEFONO_U) VALUES ('$nombresu','$apellidosu','$correou','$contraseñau','$telefonou')";
        $result = mysqli_query($conectar, $sql) or die('NO SE EJECUTO LA CONSULTA');
        if ($result == TRUE) {
            echo "Registrado";
        }
    }

    //ALTER TABLE tu_tabla_va_aqui AUTO_INCREMENT = 1
}
function EliminarUsuario($id){
    
    $conectar = conexion();
    $sql = "DELETE FROM usuarios WHERE ID_USUARIO = $id";
    $resultado = mysqli_query($conectar, $sql) or die ("No se ejecuto la consulta");
    //echo "<h3>Registro eliminado</h3>";
}

function ModificarUsuario($id,$nombresu, $apellidosu, $correou, $contraseñau, $telefonou){
    
    $conectar = conexion();
    $sql = "UPDATE usuarios SET NOMBRES_U='$nombresu', APELLIDOS_U='$apellidosu', CORREO_U='$correou', CONTRASENA='$contraseñau', TELEFONO_U = '$telefonou' WHERE ID_USUARIO = $id";
    $resultado = mysqli_query($conectar, $sql) or die ("No se ejecuto la consulta");
    //echo "<h3>Registro actualizado</h3>";
}

function VisualizarUsuario() {

    $conectar = conexion();
    $sql = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conectar, $sql) or die("No se ejecuto la consulta");
    echo "<table class='table table-bordered' align='center'>";
    echo "<thead class='thead-dark'>";
    echo "<tr>";
    echo "<th scope='col'>Id</th>";
    echo "<th scope='col'>Nombres</th>";
    echo "<th scope='col'>Apellidos</th>";
    echo "<th scope='col'>Correo Electrónico</th>";
    echo "<th scope='col'>Contraseña</th>";
    echo "<th scope='col'>Teléfono</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($filas = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<th scope='row'>" . $filas['ID_USUARIO'] . "</th>";
        echo "<td>" . $filas['NOMBRES_U'] . "</td>";
        echo "<td>" . $filas['APELLIDOS_U'] . "</td>";
        echo "<td>" . $filas['CORREO_U'] . "</td>";
        echo "<td>" . $filas['CONTRASENA'] . "</td>";
        echo "<td>" . $filas['TELEFONO_U'] . "</td>";
        //echo "<td><a class='btn btn-success' href='' role='button'>Modificar</a></td>";
        //echo "<td><a class='btn btn-success' href='' role='button'>Eliminar</a></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}
