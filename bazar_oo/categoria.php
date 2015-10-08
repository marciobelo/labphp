<?php
	require_once( "./comum.php");
	require_once( BASE_DIR . "/classes/Categoria.php");

	session_start();
	if( !isset( $_SESSION["usuario"] ) )
	{
		Header("location: inicio.php");
	}

	$categorias = Categoria::findAll();
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
					<th>Taxa</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach( $categorias as $categoria) {
				?>
				<tr>
					<td><?= $categoria->getIdCategoria() ?></td>
					<td><?= $categoria->getDescricao() ?></td>
					<td><?= $categoria->getTaxa() ?></td>
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
