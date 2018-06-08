<?php session_start(); ?>
<head>
	<meta charset="utf-8">
	<title><?php print $cabecalho_title; ?></title>
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
	<link href="https://fonts.googleapis.com/css?family=Bad+Script|PT+Sans|Source+Code+Pro" rel="stylesheet">
</head>
<body>
	<header>
		<nav class="navbar navbar-fixed-top navbar-inverse">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>Angola Fashion</a>
				<button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">Menu</button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav nav">
					<li><a href="#novidades">Novidades</a></li>
					<li><a href="#maisVendidos">Mais Vendidos</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="#maisVendidos"><span class="glyphicon glyphicon-question-sign"></span>Ajuda</a></li>
				</ul>
				<form class="navbar-form navbar-right">
					<div class="form-group">
						<a href="perfil.php">	<?= $_GET['nome'] ?></a>&nbsp;&nbsp;&nbsp;
						<a href="sair.php">Sair</a>
						<input type="text" class="form-control" placeholder="Digite o que você procura">
					</div>	
					<input type="submit" value="Buscar" class="btn btn-primary dir">
				</form>
			</div>
		</nav>
	</header>
</body>
</html>