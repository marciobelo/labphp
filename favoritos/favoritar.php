<?php
  $id_usuario = $_POST["id_usuario"];
  $nota = $_POST["nota"];

  $pdo = new PDO("mysql:host=localhost;dbname=favoritos;charset=utf8mb4", "root", "vertrigo");
  $stmt = $pdo->prepare("update usuarios set nota=:nota where id=:id");
  $stmt->bindParam( ":nota", $nota, PDO::PARAM_INT);
  $stmt->bindParam( ":id", $id_usuario, PDO::PARAM_INT);
  $result = $stmt->execute();
  if( $result)
  {
      header("Location: favoritos.php#usuario_" . $id_usuario);
  }
  else {
  }
