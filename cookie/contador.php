<?php
$qtde = isset( $_COOKIE["vezes"] ) ? $_COOKIE["vezes"] + 1 : 1;
setcookie("vezes", $qtde);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <p>Você já acessou essa página <?= $qtde; ?> vezes</p>
  </body>
</html>
