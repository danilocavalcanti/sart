<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<title> Alteração de Cadastro </title>
	</head>
	
	<body>
		<form action="alterar.php" method="POST">
			<center>
				<h1> Alteração de Cadastro </h1>
				<?php
					session_start();
					if (isset($_GET['erro'])) {
						echo '<h1 style="color: red;">Erro na alteração! Tente novamente.</h1>';
					}
					
					include_once "configuracao/conectabd.inc.php";	
					$email = '';
					$idade = 0;
					$nome = '';
					$id_transeunte = '';
					
					if (isset($_SESSION["id_transeunte"])) {
						$id_transeunte = $_SESSION["id_transeunte"];
					}
					
					if (isset($_SESSION["email"])) {
						$email = $_SESSION["email"];
					}
					
					if (isset($_SESSION["nome"])) {
						$nome = $_SESSION["nome"];
					}
					
					if (isset($_SESSION["idade"])) {
						$idade = $_SESSION["idade"];
					}
					
				?>
				
				<label for="nome"> Nome: </label>
				<br/>
				<input type="text" id="nome" name="nome" value="<?php echo $nome ?>" required="true"/>
				<br/>
				<br/>
				
				<label for="idade"> Idade: </label>
				<br/>
				<input type="text" id="idade" name="idade" value="<?php echo $idade ?>" required="true"/>
				<br/>
				<br/>
				
				<label for="email"> E-mail: </label>
				<br/>
				<input type="text" id="email" name="email" value="<?php echo $email ?>" required="true" disabled="true"/>
				<br/>
				<br/>
				
				<input type="submit" value="Alterar" /> 
				<br/>
			</center>
		</form>
	</body>
</html>