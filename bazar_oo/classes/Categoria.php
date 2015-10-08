<?php
require_once( BASE_DIR . "/classes/CategoriaDao.php");

class Categoria
{
  use CategoriaDao;

  private $idCategoria;
  private $descricao;
  private $taxa;

  public function __construct( $idCategoria, $descricao, $taxa)
  {
    echo "antes:<br/>";
    echo "id: " . var_dump( $this->idCategoria ) . "<br/>";
    echo "descricao: " . var_dump( $this->descricao ) . "<br/>";
    echo "taxa: " . var_dump( $this->taxa ) . "<br/>";
    echo "<br/>";
    $this->idCategoria = $idCategoria;
    $this->descricao = $descricao;
    $this->taxa = $taxa;
    echo "depois:<br/>";
    echo "id: " . var_dump( $this->idCategoria ) . "<br/>";
    echo "descricao: " . var_dump( $this->descricao ) . "<br/>";
    echo "taxa: " . var_dump( $this->taxa ) . "<br/>";
    echo "<br/>";
  }

  public function getIdCategoria()
  {
    return $this->idCategoria;
  }

  public function getDescricao()
  {
    return $this->descricao;
  }

  public function getTaxa()
  {
    return $this->taxa;
  }
}
