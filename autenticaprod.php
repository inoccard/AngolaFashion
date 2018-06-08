<?php 
session_start();
	$conn = mysqli_connect("localhost", "root", "","comercio") or die ("Problemas na conexão.");
	// Se o usuário clicou no botão cadastrar efetua as ações
	if (isset($_POST['cadastrar'])) {

		// Recupera os dados dos campos
		$nome = $_POST['nome0'];
		$preco = $_POST['preco'];
		$datas = $_POST['datas'];
		$foto = $_FILES["foto0"];
		$modelo = $_POST['modelo'];
		$material = $_POST['material'];
		$cores = $_POST['cores'];
		$origem = $_POST['origem'];
		$tipolavagem = $_POST['tipolavagem'];
		$descricao = $_POST['descricao'];
		
		// Se a foto estiver sido selecionada
		if (!empty($foto["name"])) {

			$error = array();

    	// Verifica se o arquivo é uma imagem
			if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
				$error[1] = "Isso não é uma imagem.";
			} 

		// Pega as dimensões da imagem
			$dimensoes = getimagesize($foto["tmp_name"]);


		// Se não houver nenhum erro
			if (count($error) == 0) {

			// Pega extensão da imagem
				preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

        	// Gera um nome único para a imagem
				$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
				$caminho_imagem = "img/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
				move_uploaded_file($foto["tmp_name"], $caminho_imagem);

			// Insere os dados no banco
				$sql = mysqli_query($conn,"INSERT INTO 
					produto (nome,preco,data,imagem,modelo,material,cores,paisorigem,lavagem,descricao) 
					VALUES ('".$nome."', '".$preco."','".$datas."','".$nome_imagem."','".$modelo."','".$material."','".$cores."','".$origem."','".$tipolavagem."','".$descricao."')");

			// Se os dados forem inseridos com sucesso
				if ($sql){
					echo "Você foi cadastrado com sucesso.";
				}
			}

		// Se houver mensagens de erro, exibe-as
			if (count($error) != 0) {
				foreach ($error as $erro) {
					echo $erro . "<br />";
				}
			}
		}
	}
	header("location: cadastro_produto.php");
	?>