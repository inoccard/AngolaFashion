<!DOCTYPE html>
<html language="pt-br">
<head>
	<meta charset="utf-8"/>
	
	<title>Cadastro de Produto</title>
	
	<meta name="Description" content=""/>
	<meta name="Keywords" content="maisVendidos, conjunto,africana, camisa"/>
	<meta name="author" content="Inocencio">
	<meta name="viewport" content="width=device-width"/>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/animate.css">

	<style>
	.navbar-header button{
		color: #fff;
	}
	.fullscreen {
		width: 100%;
	}
	main{
		padding-top: 70px;
		padding-right: 50px; 
	}
	footer{
		background: #333;
		color: #fff;
		text-align: center;
		padding: 20px 0;
	}
	.thumbnail,.col-md-4{
		margin-top: 3px;
		width:91%
	}
</style>
</head>

<body>
	<?php include('header.php'); ?>
	<main style="margin-left: 4em;">
		<div class="col-xs-12 col-md-4 thumbnail wow fadeInUp" data-wow-delay="0.5s">
			<!-- Wrapper -->
			<div id="wrapper">
				<!-- One -->
				<section id="one" class="wrapper spotlights">
					<h1>Cadastro de Produto</h1>
					<form action="autenticaprod.php" method="post" enctype="multipart/form-data" name="cadastro" >
						<table class="table table-striped table-dark">
							<tr>
								<th scope="col">Nome</th>
								<th scope="col">Preço</th>
								<th scope="col">Data Cadastro</th>
								<th scope="col">Imagem</th>
								<th scope="col">Modelo</th>
							</tr>
							<tr>
								<td><input type="text" name="nome0" autofocus="true" /></td>
								<td><input type="text" name="preco" id="preco"></td>
								<td><input type="data" name="datas" /></td>
								<td><input type="file" name="foto0" /></td>
								<td><input type="text" name="modelo"></td>
							</tr>
							<tr>
								<th scope="col">Material</th>
								<th scope="col">Cores</th>
								<th scope="col">País de Origem</th>
								<th scope="col">Tipo de Lavagem</th>
								<th scope="col">Descrição</th>
							</tr>
							<tr>
								<td><input type="text" name="material"></td>
								<td><input type="text" name="cores"></td>
								<td><input type="text" name="origem"></td>
								<td><input type="text" name="tipolavagem"></td>
								<td><input type="text" name="descricao"></td>
								<tr><br>
									<td><input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar" /></td>
								</tr>
							</table>
						</form>
					</section>
				</div>
			</div>
		</main>
		<div style="position: fixed; bottom: 0; left: 0; right: 0;">
			<?php include('rodape.php') ?>			
		</div><script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/wow.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
		<script>
			$(function () {
				new WOW().init();
			});
		</script>
	</body>
	</html>