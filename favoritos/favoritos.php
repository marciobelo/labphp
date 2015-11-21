<?php
  $pdo = new PDO("mysql:host=localhost;dbname=favoritos;charset=utf8mb4", "root", "vertrigo");
  $statement = $pdo->query("select * from usuarios ");
  $usuarios = $statement->fetchAll();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Meus favoritos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <style>
    .celula_nota
    {
      text-align: center;
      width: 30px;
      font-size: smaller;
    }
    </style>
  </head>
  <body>

    <table>
      <tbody>
          <?php foreach ($usuarios as $usuario) { ?>
            <tr>
              <td><a id="usuario_<?= $usuario["id"] ?>"><img src="imagens/<?= $usuario["id"] ?>.jpg" /></a></td>
              <td><?= $usuario["nome"] ?></td>
              <td>
                <table>
                  <tbody>
                    <tr>
                      <td class="celula_nota">N/A</td>
                      <td class="celula_nota">1</td>
                      <td class="celula_nota">2</td>
                      <td class="celula_nota">3</td>
                      <td class="celula_nota">4</td>
                      <td class="celula_nota">5</td>
                    </tr>
                    <tr id="selecao_nota">
                      <td class="celula_nota"><input type="radio" name="nota_<?= $usuario["id"] ?>" value="0" <?php if( $usuario["nota"] == null) echo "checked='checked'"; ?>></td>
                      <td class="celula_nota"><input type="radio" name="nota_<?= $usuario["id"] ?>" value="1" <?php if( $usuario["nota"] == 1) echo "checked='checked'"; ?>></td>
                      <td class="celula_nota"><input type="radio" name="nota_<?= $usuario["id"] ?>" value="2" <?php if( $usuario["nota"] == 2) echo "checked='checked'"; ?>></td>
                      <td class="celula_nota"><input type="radio" name="nota_<?= $usuario["id"] ?>" value="3" <?php if( $usuario["nota"] == 3) echo "checked='checked'"; ?>></td>
                      <td class="celula_nota"><input type="radio" name="nota_<?= $usuario["id"] ?>" value="4" <?php if( $usuario["nota"] == 4) echo "checked='checked'"; ?>></td>
                      <td class="celula_nota"><input type="radio" name="nota_<?= $usuario["id"] ?>" value="5" <?php if( $usuario["nota"] == 5) echo "checked='checked'"; ?>></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          <?php } ?>
      </tbody>
    </table>

    <form id="favoritar" action="favoritar.php" method="post">
      <input type="hidden" id="id_usuario" name="id_usuario">
      <input type="hidden" id="nota" name="nota">
    </form>

    <script>
    $(function() {
        $("#selecao_nota input[type=radio]").bind("click",
          function()
          {
            var str_id = /nota_(\d+)/.exec( this.name);
            $("#id_usuario").val( str_id[1]);
            $("#nota").val( this.value);
            $("#favoritar").submit();
          }
        );
    });
    </script>
  </body>
</html>
