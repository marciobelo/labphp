<?php

  // obtem dados do formulário html
  $nomeCompleto = $_POST["nomeCompleto"];
  $senha = $_POST["senha"];

  if( isset($_POST["aceitaLista"]) )
  {
    $aceitaLista = true;
  } else {
    $aceitaLista = false;
  }

  $sexo = $_POST["sexo"];
  $tecnologias = $_POST["tecnologias"];
  $uf = $_POST["uf"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - confirmação</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container">

      <h2>Revise seus dados para análise</h2>

      <table class="table table-bordered" style="width: 50%">
        <tr>
          <td>Nome completo</td>
          <td><?= htmlentities($nomeCompleto); ?></td>
        </tr>
        <tr>
          <td>Aceita Lista de Notícias?</td>
          <td><?php if( $aceitaLista ) echo "Sim"; else echo "Não"; ?></td>
        </tr>
        <tr>
          <td>Sexo</td>
          <td><?php if( $sexo == "F" ) echo "Feminino"; else echo "Masculino"; ?></td>
        </tr>
        <tr>
          <td>Tecnologias</td>
          <td>
            <?php
              if( !empty( $tecnologias ) )
              {
                foreach($tecnologias as $valor) {
                  echo $valor . "<br/>";
                }
              }
              else echo "Nenhuma selecionada";
            ?>
          </td>
        </tr>
        <tr>
          <td>Estado (UF)</td>
          <td><?= $uf ?></td>
        </tr>
      </table>
    </div>
  </body>
</html>
