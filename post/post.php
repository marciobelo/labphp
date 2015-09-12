<?php

	$nome = $_POST["nome"];

	echo "Ola " . $nome;
?>
<br/>
<?php
	$senha = $_POST["senha"];

	echo "Sua senha eh : " . $senha;
?>
<br/>
<?php

	if( isset( $_POST["receber_newsletter"] ) )
	{
		$receber_newsletter = true;
	}
	else
	{
		$receber_newsletter = false;
	}

	if( $receber_newsletter ) 
	{
		echo "registrado seu desejo de receber nossa newsletter";
	}
	else
	{
		echo "Uma pena você não querer receber nossa newsletter";
	}
?>
