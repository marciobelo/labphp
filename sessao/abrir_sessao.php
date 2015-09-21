<?php
 session_start();
 $_SESSION["nome"]=$_REQUEST["nome"];
?>
<html>
<body>
<p>Sessão iniciada.</p>
<a href="mostra_valor_sessao.php">Mostra o valor de sessao</a>
</body>
</html>
