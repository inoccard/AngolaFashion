<!DOCTYPE html>
<html language="pt-br">
<head>
	<meta charset="utf-8">

	<title>Loja Virtual</title>

	<meta name="Description" content="">
	<meta name="Keywords" content="maisVendidos, conjunto,africana, camisa"/>
	<meta name="author" content="Inocencio"/>
	<meta name="viewport" content="width=device-width"/>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<style>
	.navbar-header button{
		color: #fff;
	}
	.fullsreen{
		width: 100%;
	}
	main{
		padding-top: 50px;
	}
	footer{
		background: #333;
		color: #fff;
		text-align: center;
		padding: 20px 0;
	}
	.tab-pane{
		padding: 10px 0;
	}
</style>

</head>

<body><br>
	<?php
		include('header.php');
	?>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default" style="width: 21em;">
						<div class="panel-heading">
							<h3 class="panel-tittle">Propagandas Aqui!</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
							</div>
						</div>
						<div class="form-group">
						</div>
					</div>
					<div class="panel panel-default" style="width: 21em;">
						<div class="panel-heading">
							<h3 class="panel-tittle">Propagandas Aqui!</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
							</div>
						</div>
						<div class="form-group">
						</div>	
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3>Login</h3>
						</div>
						<div class="panel-body">
							<label for="email">Login</label>
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<input type="text" id="email" name="" value="" placeholder="Digite seu login ou e-mail" class="form-control">
							</div>
							<label>Senha</label>
							<input type="password" name="" value="" placeholder="Digite sua senha" class="form-control"><br>
							<button type="submit" class="btn btn-primary">Entrar</button>
						</div>
					</div>
				</div>
			</div>
		</main><br>
		<div style="position: fixed; bottom: 0; left: 0; right: 0;">
		<?php include('rodape.php') ?>			
		</div>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
	</html>