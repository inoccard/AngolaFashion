<?php
$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'comercio';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (mysqli_connect_errno($conexao)) {
	echo "Problemas para conectar no banco. Verifique os dados!";
	die();
}

function buscar_cliente($conexao){
	$sqlBusca = 'SELECT * FROM cliente';
	$resultado = mysqli_query($conexao, $sqlBusca);
	$cliente = array();
	if ($cliente = mysqli_fetch_assoc($resultado)) {
		$cliente[] = $cliente;
	}
	return $cliente;
}
function gravar_cliente($conexao, $cliente){
	$slqGravar = "INSERT INTO cliente (nome, cpf, email, senha) 
	VALUES ('{$cliente['nome']}', 
	'{$cliente['cpf']}',
	'{$cliente['email']}',
	'{$cliente['senha']}')";
	mysqli_query($conexao, $slqGravar);
}
function busca_cliente($conexao,$cliente){
	$sqlBusca = "SELECT * FROM cliente WHERE 
		login = '{$cliente['login']}' AND password = '{$cliente['password']}'";
	$resultado = mysqli_query($conexao, $sqlBusca);
	return mysqli_fetch_assoc($resultado);
}
function buscar_produtos_data($conexao){
	$slqBuscarProd = "SELECT * FROM produto ORDER BY data DESC LIMIT 0, 9";
	$resultado = mysqli_query($conexao, $slqBuscarProd);
	while ($produto = mysqli_fetch_assoc($resultado)) {
		$produtos[] = $produto;
	}
	return $produtos;
}
function buscar_produtos_vendas($conexao){
	$slqBuscarProd = "SELECT * FROM produto ORDER BY vendas DESC LIMIT 0, 9";
	$resultado = mysqli_query($conexao, $slqBuscarProd);
	while ($produto = mysqli_fetch_assoc($resultado)) {
		$produtos[] = $produto;
	}
	return $produtos;
}
function busca_produto($conexao,$id){
	$slqBuscarProd = 'SELECT * FROM produto WHERE codigo = ' .$id;
	$resultado = mysqli_query($conexao, $slqBuscarProd);
	return mysqli_fetch_assoc($resultado);
}
?>