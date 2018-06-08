
<?php
	include "banco.php";
	$lista_produtosPorData = buscar_produtos_data($conexao);
	$lista_produtosPorVenda =buscar_produtos_vendas($conexao);
 ?>