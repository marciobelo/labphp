<?php
$qtde = filter_input(INPUT_COOKIE, "vezes");
$qtde = isset( $qtde ) ? $qtde + 1 : 1;
setcookie("vezes", $qtde);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <p>Você já acessou essa página <?= $qtde; ?> vezesssss</p>
  </body>
</html>
