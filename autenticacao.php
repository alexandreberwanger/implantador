<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title> Implantador </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Alexandre Berwanger">
		<meta name="description" content="Página Inicial">
		<!--LINK CSS-->
		<link rel="stylesheet" type="text/css" href="../css/style-css.css">
		<!--LINK CDN BOOTSTRAP-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-principal" style="margin-top: 5%;" align="center">
			<header>
				<h1 class="page-header" align="center"><img src="../assets/img/logo.png" width="350px;"></h1>
			</header>
			<main>
				<div class="form_acesso">
					<form action="cadastro.php" method="GET">
						<div class="form-group col-md-6">
							<label name="c_email"></label>
							<input class="form-control form-control-sm" type="number" name="cod_loja" placeholder="Digite o código da loja" required>
						</div>
						<div class="form-group col-md-6">
							<label name="c_senha"></label>
							<input class="form-control form-control-sm col-md-12" type="text" name="api_key" placeholder="Digite a API Publica da loja" required>
						</div>
						<input type="submit" name="btn_enviar" class="btn btn-primary btn-sm col-md-5" value="CONECTAR"/>
					</form>	
				</div>
				<div>
					<br>
					<img src="../assets/img/login-lnkdin.png" width="25px"/><img src="../assets/img/login-gplus.png" width="25px" style="margin-left: 15px;"/>
				</div>
			</main>
			<footer>PROJETO FEITO POR<br>
				<a href="https://br.linkedin.com/" target="_blank">Alexandre Berwanger</a><br/>
				<br /><br /><br />© 2022 Todos os direitos reservados.	
			</footer>
		</div>
		
		<?php
	
	function gravarCodLoja($texto){
		$arquivo = "codLoja.ini";
		$fp = fopen($arquivo, "a+");
		fwrite($fp, $texto);
		fclose($fp);
	}
	
	function gravarApiKey($texto){
		$arquivo = "apikey.ini";
		$fp = fopen($arquivo, "a+");
		fwrite($fp, $texto);
		fclose($fp);
	}
	
	$codLoja = $_GET['cod_loja'];
	$apiKey = $_GET['api_key'];

	gravarCodLoja($codLoja);
	gravarApiKey($apiKey);
?>
	</body>
