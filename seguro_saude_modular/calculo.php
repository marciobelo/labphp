<?php

  // obtem dados do formulário html
  $nome = $_POST["nome"];
  $codFaixaEtaria = $_POST["faixaEtaria"];

  if( isset($_POST["doencaPrevia"]) )
  {
    $doencaPrevia = true;
  } else {
    $doencaPrevia = false;
  }

  function calculaPremio( $codFaixaEtaria, $doencaPrevia)
  {
    $valorFaixaPuro = 200 * pow( 1.5, $codFaixaEtaria);

    if( $doencaPrevia )
    {
      $valorFinal = $valorFaixaPuro * 1.3;
    }
    else
    {
      $valorFinal = $valorFaixaPuro;
    }
    return $valorFinal;
  }

  $premio = calculaPremio( $codFaixaEtaria, $doencaPrevia);
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seguro Saúde - Cotação de Prêmio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>

    <?php require_once("cabec.inc"); ?>
    
    <div class="container">

      <h2>Confira a cotação do seu seguro</h2>

      <p>Sr(a).<?= htmlentities($nome); ?> seu seguro está cotado em <?= money_format('%=*^-14#8.2i',$premio) ?></p>

    </div>
  </body>
</html>
