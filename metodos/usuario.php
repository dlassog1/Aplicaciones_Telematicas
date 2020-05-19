<?php
	require_once'./conexion/conexion.php';

	function insertarUsuario($nombres_u,$,$apellido_u,$correo_u,$contraseña,$telefono_u){
        $db= new Conexion();
        $db->conexion();
        
        $sql1="select count(*) from usuarios where CORREO_U='$correo_u'";
        $cmb=$db->mostrar($sql1);
        if(cmb[0]>=1){
        	$mensaje= "<script> alert(\"El correo que ingreso ya está asociado a una cuenta\"); </script>";
        	echo $mensaje;
        }else{
        	$sql2="INSERT INTO usuarios(NOMBRES_U,APELLIDOS_U,CORREO_U,"
                . "CONTRASENA,TELEFONO_U)"
                . "VALUES ('$nombres_u','$apellido_u','$correo_u','$contraseña','$telefono_u');";
        
        	$insertar=$db->insertar($sql2);
        	echo $insertar;	
        }

        $db->null;
    }

    function comprobarUsuario($correo_u,$,$contraseña){
        $db= new Conexion();
        $db->conexion();
        $sql="select count(*) from usuarios where CORREO_U='$correo_u' and CONTRASENA='$contraseña'";
        $cmb=$db->mostrar($sql);
        $acu="";
       	if($cmb[0]>1){
       		echo "Usuario loggeado"
       	}else{
       		echo "Error no se pudo comprobar sus credenciales"
       	} 
       
        $db->null;
    }
?>