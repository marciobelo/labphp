<?php
class MinhaClasse
{
  private $instancia;
  protected $protegido;
  public $publico;
  public static $varDeClasse = "Sou um variavel de classe pública!";

  public function __construct( $instancia )
  {
    $this->instancia = $instancia;
  }

  public function mostrar( $vezes )
  {
    for( $i=0; $i < $vezes; $i++)
    {
      echo 'Ola ' . $this->instancia . "\n";
    }
  }

  public static function metodoDeClasse()
  {
    echo "Hei! não preciso de instância!\n";
  }
}

// bloco de teste
$obj1 = new MinhaClasse( "Márcio Belo");
$obj1->mostrar( 5 );
MinhaClasse::metodoDeClasse();
echo $obj1->instancia; // Erro: não posso acessar um membro private!
echo MinhaClasse::$varDeClasse . "\n";
