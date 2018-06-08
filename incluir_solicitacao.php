<?php

session_start();

// Recebe variáveis do formulário

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$instituicao = trim($_POST["instituicao"]);
$assunto = trim($_POST["assunto"]);
$descricao = trim($_POST["descricao"]);
$captcha = trim($_POST["captcha"]);

// Consiste campos
if (!$nome || !$telefone || !$email || !$instituicao || !$assunto || !$descricao)
{ 
	$_SESSION["nome"] = $nome;
	$_SESSION["telefone"] = $telefone;
	$_SESSION["email"] = $email;
	$_SESSION["instituicao"] = $instituicao;
	$_SESSION["assunto"] = $assunto;
	$_SESSION["descricao"] = $descricao;
	$_SESSION["erro"] = 1;
	header("location: solicitacao_servicos.php");
}
elseif ($captcha != $_SESSION["captcha"])
{
	$_SESSION["nome"] = $nome;
	$_SESSION["telefone"] = $telefone;
	$_SESSION["email"] = $email;
	$_SESSION["instituicao"] = $instituicao;
	$_SESSION["assunto"] = $assunto;
	$_SESSION["descricao"] = $descricao;
	$_SESSION["erro_captcha"] = 1;
	header("location: solicitacao_servicos.php");
}
else 
{
	$assunto2 = "[formweb] CCUEC - RedeComep Campinas";
	$destinatario = "rt-redecomep@ccuec.unicamp.br";
	$remetente = $email;
	$mensagem = "Nome: ".$nome."\r\n";
	$mensagem .= "Telefone: ".$telefone."\r\n";
	$mensagem .= "E-mail: ".$email."\r\n";
	$mensagem .= "Instituição: ".$instituicao."\r\n";
	$mensagem .= "Assunto: ".$assunto."\r\n";
	$mensagem .= "Descrição: ".$descricao."\r\n";
	$headers = "To: ".$destinatario."\r\n";
	$headers .= "From: ".$remetente."\r\n";
	mail($destinatario,$assunto2,$mensagem,$headers);

/*
	mail("arroyo@ccuec.unicamp.br", "Solicitacao de Servicos - RedeComep Campinas", "Nome: $nome
Telefone: $telefone
E-mail: $email
Instituição: $instituicao
Assunto: $assunto
Descrição: $descricao");
*/
header("Location: exibe_mensagem.php");
}

?>
