<?php
require_once( BASE_DIR . "/classes/Banco.php");

trait CategoriaDao
{
  public static function rowMapper($idCategoria, $descricao, $taxa)
  {
    return new Categoria( $idCategoria, $descricao, $taxa);
  }

  public static function findAll()
  {
      $pdo = Banco::obterConexao();
      $statement = $pdo->prepare("SELECT idCategoria,descricao,taxa FROM Categoria");
      $statement->execute();
      /*
      return $statement->fetchAll( PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
      "Categoria", array( 'xxxx', 'xxx', 'xxx') );
      */

      return $statement->fetchAll( PDO::FETCH_FUNC, "CategoriaDao::rowMapper" );
  }
}
