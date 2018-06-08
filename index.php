<!DOCTYPE html>
<html language="pt-br">
<head>
	<meta charset="utf-8"/>
	
	<title>Angola Fashion</title>

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
		padding-top: 50px; 
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
	<main>
		<div class="container-fluid" id="home">
			<div class="row">
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="imagens/banner1.png" alt="Moda" class="fullscreen" id="fullscreen">
						</div>
						<div class="item">
							<img src="imagens/banner0.png" alt="Moda Infantil" class="fullscreen" id="fullscreen">
						</div>
						<div class="item">
							<img src="imagens/Angola.png" alt="Moda Infantil" class="fullscreen" id="fullscreen">
						</div>
					</div>

					<a href="#carousel" data-slide="prev" class="left carousel-control">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a href="#carousel" data-slide="next" class="right carousel-control">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-3">
					<div class="text-center">
						<h3>Categorias</h3>
					</div>
					<ul class="list-group">
						<li class="list-group-item"><a href="#">Camisetas Masculinas</a></li>
						<li class="list-group-item"><a href="#">Camisetas Femininas</a></li>
						<li class="list-group-item"><a href="#">Roupas de Verão</a></li>
						<li class="list-group-item"><a href="#">Roupas de Inverno</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-9">
					<div class="col-xs-12 col-md-4 thumbnail text-center wow fadeInUp" data-wow-delay="0.5s">
						<!-- Wrapper -->
						<div id="wrapper">
							<!-- One -->
							<section id="one" class="wrapper style2 spotlights">
								<section>
									<a href="#" class="image"><img src="../images/pic01.jpg" alt="" data-position="center center" /></a>
									<div class="content">
										<div class="inner">
											<h2>Sed ipsum dolor</h2>
											<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
											<ul class="actions">
												<li><a href="#" class="button">Learn more</a></li>
											</ul>
										</div>
									</div>
								</section>
								<section>
									<a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center" /></a>
									<div class="content">
										<div class="inner">
											<h2>Feugiat consequat</h2>
											<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
											<ul class="actions">
												<li><a href="#" class="button">Learn more</a></li>
											</ul>
										</div>
									</div>
								</section>
								<section>
									<a href="#" class="image"><img src="images/pic03.jpg" alt="" data-position="25% 25%" /></a>
									<div class="content">
										<div class="inner">
											<h2>Ultricies aliquam</h2>
											<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
											<ul class="actions">
												<li><a href="#" class="button">Learn more</a></li>
											</ul>
										</div>
									</div>
								</section>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container paineis">
			<section class="painel novidades">
				<h2>Novidades</h2>
				<ol>
					<?php include "select.php";
					foreach ($lista_produtosPorData as $produto): ?>
						<li>
							<a href="produto.php?codigo=<?= $produto['codigo'] ?>">
								<figure>
									<img src="img/produtos/miniatura<?= $produto['codigo'] ?>.png" alt="<?= $produto['nome'] ?>">
									<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
								</figure>   
							</a>
						</li>
					<?php endforeach; ?>
				</ol>
				<button type="button">Mostrar mais</button>
			</section>
			<section class="painel mais-vendidos">
				<h2>Mais Vendidos</h2>
				<ol>
					<?php foreach ($lista_produtosPorVenda as $produto): ?>
						<li>
							<a href="produto.php?codigo=<?= $produto['codigo'] ?>">
								<figure>
									<img src="img/produtos/miniatura<?= $produto['codigo'] ?>.png" alt="<?= $produto['nome'] ?>">
									<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
								</figure>   
							</a>
						</li>
					<?php endforeach; ?>
				</ol>
				<button type="button">Mostrar Mais</button>
			</section>
		</div>
	</main>
	<!--Inicio Footer-->
	<?php include("rodape.php"); ?>
	<!--Fim Footer-->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
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