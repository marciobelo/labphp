<?php
	session_start();
	if( !isset( $_SESSION["usuario"] ) )
	{
		Header("location: inicio.php");
	}


	$pdo = new PDO('mysql:host=localhost;dbname=bazar;charset=utf8mb4', 'root', 'vertrigo');

	$statement = $pdo->query("SELECT id_categoria,descricao FROM categoria");

	$categorias = $statement->fetchAll();

?>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Bazar Tem Tudo</title>
</head>
<body>

	<?php require_once("cabecalho.inc"); ?>

	<div id="corpo">
		<table border="1">
			<thead>
				<tr>
					<th>Código</th>
					<th>Descrição</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach( $categorias as $categoria) {
				?>
				<tr>
					<td><?= $categoria["id_categoria"] ?></td>
					<td><?= $categoria["descricao"] ?></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>

	<?php require_once("rodape.inc"); ?>

</body>
</html>
