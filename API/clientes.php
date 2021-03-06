<?php
include "config.php";
include "utils.php";


$dbConn =  connect($db);

/*
  listar todos los clientes o solo uno
 */
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if (isset($_GET['cedula_cli']))
    {
      //Mostrar un post
      $sql = $dbConn->prepare("SELECT * FROM clientes where cedula_cli=:cedula_cli");
      $sql->bindValue(':cedula_cli', $_GET['cedula_cli']);
      $sql->execute();
      header("HTTP/1.1 200 OK");
      echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
      exit();
	  }
    else {
      //Mostrar
      $sql = $dbConn->prepare("SELECT * FROM clientes");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll()  );
      exit();
	}
}

// Agregar
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = $_POST;
    $sql = "INSERT INTO clientes
          (cedula_cli, nombres_cli, apellidos_cli, telefono_cli, direccion_cli, correo_cli)
          VALUES
          (:cedula_cli, :nombres_cli, :apellidos_cli, :telefono_cli, :direccion_cli, :correo_cli)";
    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);
    $statement->execute();
    $postId = $dbConn->lastInsertId();
    if($postId)
    {
      $input['cedula_cli'] = $postId;
      header("HTTP/1.1 200 OK");
      echo json_encode($input);
      exit();
	 }
}

//Borrar
if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
	$cedula_cli = $_GET['cedula_cli'];
  $statement = $dbConn->prepare("DELETE FROM clientes where cedula_cli=:cedula_cli");
  $statement->bindValue(':cedula_cli', $cedula_cli);
  $statement->execute();
	header("HTTP/1.1 200 OK");
	exit();
}

//Actualizar
if ($_SERVER['REQUEST_METHOD'] == 'PUT')
{
    $input = $_GET;
    $postId = $input['cedula_cli'];
    $fields = getParams($input);

    $sql = "
          UPDATE clientes
          SET $fields
          WHERE cedula_cli='$postId'
           ";

    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);

    $statement->execute();
    header("HTTP/1.1 200 OK");
    exit();
}


//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");

?>