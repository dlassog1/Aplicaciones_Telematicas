<?php
	class Usuario{

		function insertarUsuario($nombres_u,$apellido_u,$correo_u,$contraseña,$telefono_u){
			require_once'./conexion/conexion.php';
	        $db= new Conexion();
	        $db->conexion();
	        
	        $sql1="select count(*) from usuarios where CORREO_U='$correo_u'";
	        $cmb=$db->mostrar($sql1);
	        if($cmb->fetchColumn() >= 1){
	        	$mensaje= "<script> alert(\"El correo que ingreso ya está asociado a una cuenta\"); </script>";
	        	echo $mensaje;
	        }else{
	        	$sql2="INSERT INTO usuarios(NOMBRES_U,APELLIDOS_U,CORREO_U,"
	                . "CONTRASENA,TELEFONO_U)"
	                . "VALUES ('$nombres_u','$apellido_u','$correo_u','$contraseña','$telefono_u');";
	        
	        	$insertar=$db->insertar($sql2);
	        	echo $insertar;	
	        }

	        $db=null;
	    }

	    public function comprobarUsuario($correo_u,$contraseña){
	        require_once'./conexion/conexion.php';
	        $db= new Conexion();
	        $db->conexion();
	        $sql="select count(*) from usuarios where CORREO_U='$correo_u' and CONTRASENA='$contraseña'";
	        $cmb=$db->mostrar($sql);
	        $acu="";
	       	if($cmb->fetchColumn() >= 1){
	       		echo "<script> alert(\"Usuario Logeado\"); </script>";
	       	}else{
	       		echo "<script> alert(\"Error el correo o la contraseña son incorrectos\"); </script>";
	       	} 
	       
	        $db=null;
	    }
    }
?>