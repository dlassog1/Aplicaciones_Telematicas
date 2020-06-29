<?php
include "config.php";
include "utils.php";


$dbConn =  connect($db);

/*
  listar todos los tienda o solo uno
 */
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if (isset($_GET['ruc']))
    {
      //Mostrar un post
      $sql = $dbConn->prepare("SELECT * FROM tienda where ruc=:ruc");
      $sql->bindValue(':ruc', $_GET['ruc']);
      $sql->execute();
      header("HTTP/1.1 200 OK");
      echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
      exit();
	  }
    else {
      //Mostrar
      $sql = $dbConn->prepare("SELECT * FROM tienda");
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
    $sql = "INSERT INTO tienda
          (ruc, nombres_t, direccion_t, telefono_t)
          VALUES
          (:ruc, :nombres_t, :direccion_t, :telefono_t)";
    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);
    $statement->execute();
    $postId = $dbConn->lastInsertId();
    if($postId)
    {
      $input['ruc'] = $postId;
      header("HTTP/1.1 200 OK");
      echo json_encode($input);
      exit();
	 }
}

//Borrar
if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
	$ruc = $_GET['ruc'];
  $statement = $dbConn->prepare("DELETE FROM tienda where ruc=:ruc");
  $statement->bindValue(':ruc', $ruc);
  $statement->execute();
	header("HTTP/1.1 200 OK");
	exit();
}

//Actualizar
if ($_SERVER['REQUEST_METHOD'] == 'PUT')
{
    $input = $_GET;
    $postId = $input['ruc'];
    $fields = getParams($input);

    $sql = "
          UPDATE tienda
          SET $fields
          WHERE ruc='$postId'
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