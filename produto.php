<!DOCTYPE html>
<html language="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="Description" content=""/>
	<meta name="Keywords" content="maisVendidos, conjunto,africana, camisa"/>
	<meta name="author" content="Inocencio">
	<meta name="viewport" content="width=device-width"/>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/produto.css">

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
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script type="text/javascript" >

	$(document).ready(function() {

		function limpa_formulário_cep() {
	        // Limpa valores do formulário de cep.
	        $("#rua").val("");
	        $("#bairro").val("");
	        $("#cidade").val("");
	        $("#uf").val("");
	        $("#ibge").val("");
	    }

	    //Quando o campo cep perde o foco.
	    $("#cep").blur(function() {
	        //Nova variável "cep" somente com dígitos.
	        var cep = $(this).val().replace(/\D/g, '');

	        //Verifica se campo cep possui valor informado.
	        if (cep != "") {
	            //Expressão regular para validar o CEP.
	            var validacep = /^[0-9]{8}$/;
                //Valida o formato do CEP.
                if(validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#rua").val("...");
                    $("#bairro").val("...");
                    $("#cidade").val("...");
                    $("#uf").val("...");
                    $("#ibge").val("...");
                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                    	if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#rua").val(dados.logradouro);
                            $("#bairro").val(dados.bairro);
                            $("#cidade").val(dados.localidade);
                            $("#uf").val(dados.uf);
                            //$("#ibge").val(dados.ibge);
                        } //end if.
                        else {
	                        //CEP pesquisado não foi encontrado.
	                        limpa_formulário_cep();
	                        alert("CEP não encontrado.");
	                    }
	                });
	            } //end if.
	            else {
	    	        //cep é inválido.
	    	        limpa_formulário_cep();
	    	        alert("Formato de CEP inválido.");
	    	    }
	            } //end if.
	            else {
	                //cep sem valor, limpa formulário.
	                limpa_formulário_cep();
	            }
	        });
	});
</script>
</head>
<body>
	<?php
	session_start();
	include 'banco.php';
	$produto = busca_produto($conexao,$_GET[codigo]);        
	?>

	<?php
	$cabecalho_title = $produto['nome'];
	include('header.php');
	?>
	<main>
		<div class="produto-back" style="background-color: white; margin-top:0;border-top: 0;">	
			<div class="container">
				<div class="produto" style=" display: inline-block; margin-left: -4em;">
					<h1><?= $produto['nome'] ?></h1>
					<p>por apenas <?= $produto['preco'] ?></p>		
					<form action="carrinho.php" method="GET">
						<fieldset class="cores">
							<legend>Escolaha a cor:</legend>

							<!--<input type="hidden" name="nome" value="<?= $produto['nome']?>">-->
							<!--<input type="hidden" name="preco" value="<?= $produto['preco']?>">-->
							<input type="hidden" name="codigo" value="<?= $produto['codigo'] ?>">

							<input type="radio" name="cor" value="verde" id="verde" checked>
							<label for="verde"><img src="img/produtos/foto<?= $produto['codigo'] ?>-verde.png" alt="verde"></label>

							<input type="radio" name="cor" value="rosa" id="rosa">
							<label for="rosa"><img src="img/produtos/foto<?= $produto['codigo'] ?>-rosa.png" alt="rosa"></label>

							<input type="radio" name="cor" value="azul" id="azul">
							<label for="azul"><img src="img/produtos/foto<?= $produto['codigo'] ?>-azul.png" alt="rosa"></label>
						</fieldset>
						<fieldset class="tamanhos">
							<legend>Escolha o tamanho:</legend>
							<input type="range" min="36" max="46" value="36" step="2" name="tamanho" id="tamanho">
							<output for="tamanho" name="valortamanho">36</output>
						</fieldset>
						<fieldset class="esq" style=" text-align: left; position: absolute; top: 17em; right: 0em; bottom: 0px; left: 46em; display: inline-block;">
							<label class="dirr">Cep: <input name="cep" type="text" id="cep" value="" class="cep" size="5" maxlength="9" />
							</label><br />
							<label>Rua: <br><input name="rua" type="text" id="rua" size="28" />
							</label><br />
							<label>Bairro: <br><input name="bairro" type="text" id="bairro" class="bairro" size="28" />
							</label><br />
							<label>Cidade: <br><input name="cidade" type="text" id="cidade" size="28" />
							</label><br />
							<label>Estado: <br><input name="uf" type="text" id="uf" size="1" />
							</label><br />
						</fieldset>
						<input type="submit" class="comprar" value="comprar" style="display: inline;">
					</form>
				</div>
				<div class="col-sm-8" style="margin: 1em -5em;">
					<div class="row">
						<ul class="nav nav-tabs">
							<li class="nav active">
								<a href="#descricao" data-toggle="tab">Descrição</a>
							</li>
							<li class="nav">
								<a href="#informacoes" data-toggle="tab">Informações Técnicas</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="descricao">
								<p>
									<?= $produto['descricao'] ?>
								</p>
							</div>
							<div class="tab-pane fade" id="informacoes">
								<table class="table table-responsive">
									<tbody>
										<tr>
											<td>Modelo</td>
											<td><?= $produto['modelo'] ?></td>
										</tr>
										<tr>
											<td>Material</td>
											<td><?= $produto['material'] ?></td>
										</tr>
										<tr>
											<td>Cores</td>
											<td><?= $produto['cores'] ?></td>
										</tr>
										<tr>
											<td>Pais de Origem</td>
											<td><?= $produto['paisorigem'] ?></td>
										</tr>
										<tr>
											<td>Lavagem</td>
											<td><?= $produto['lavagem'] ?></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-xs-12 col-sm-9">
								<div id="maisVendidos">
									<h3 class="text-center">...</h3>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</idv>
	</main>
	<?php include("rodape.php"); ?>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/produto.js"></script>
</body>
</html>