<?php

  // obtem dados do formulário html
  $nomeCompleto = filter_input(INPUT_POST, "nomeCompleto", FILTER_SANITIZE_STRING);
  $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);

  
  if( filter_input(INPUT_POST, "aceitaLista"))
  {
    $aceitaLista = true;
  } else {
    $aceitaLista = false;
  }

  $sexo = filter_input(INPUT_POST, "sexo", FILTER_SANITIZE_STRING);
  $tecnologias = filter_input(INPUT_POST, "tecnologias", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
  $uf = filter_input(INPUT_POST, "uf", FILTER_SANITIZE_STRING);
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
          <td><?= $nomeCompleto; ?></td>
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
