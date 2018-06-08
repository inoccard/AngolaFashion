<!DOCTYPE html>
<html>
<head>
	<title>Compra Concluída</title>

		<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
	<?php include('headerFinalizado.php'); ?>
	<?php
		session_start(); // obrigatórito para uso de sessão
		include "banco.php";

		if (isset($_GET['nome']) && $_GET['nome']  != '') {
			$cliente = array();

			$cliente['nome'] = $_GET['nome'];
			
			if (isset($_GET['email'])) {
				$cliente['email'] = $_GET['email'];
			}
			else{
				$cliente['email'] = '';
			}
			if (isset($_GET['cpf'])) {
				$cliente['cpf'] = ($_GET['cpf']);
			} else {
				$cliente['cpf'] = '';
			}
			if (isset($_GET['senha'])) {
				$cliente['senha'] = ($_GET['senha']);
			} else {
				$cliente['senha'] = '';
			}
			
			gravar_cliente($conexao, $cliente);
		$cliente = array('idcliente' => 0, 'nome' => '', 'cpf' => '', 'email' => '', 'senha' => '');	
			echo '<div class="jumbotron" style="">
			<h1><?= $_GET[nome] ?>Sua Compra foi Finalizada</h1>
			<p>Obrigado por comprar na Angola Fashion! Enviamos um comprovante para o 
			<a href="https://gmail.com/" target="_blank">seu e-mail</a></p>
		</div>';
		}
		//$lista_cliente = buscar_cliente($conexao);
		
		
	?>
</body>
</html>