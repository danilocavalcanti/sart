<!DOCTYPE html>
<?php
	  include_once "configuracao/conectabd.inc.php";
	  
	  session_start();
	  
	  $nome = "";
	  $idade = 0;
	  $email = "";
	  $alteracao = "";
	  $id_transeunte = 0;
	  
	  $senha = '';
	  $senha2 = '';
	  
	  $cadastro = '';
	  
	  if (isset($_POST["alteracao"])) {
		  $alteracao = $_POST["alteracao"];
	  }
	  
	  if (isset($_GET["cadastro"])) {
		  $cadastro = $_GET["cadastro"];
	  }
	  
	  if (isset($_POST["nome"])) {
		  $nome = $_POST["nome"];
	  }
	  
	  if (isset($_POST["idade"])) {
		  $idade = $_POST["idade"];
	  }
	  
	  if (isset($_POST["email"])) {
		  $email = $_POST["email"];
	  }
	  
	if (isset($_POST["senha"])) {
		  $senha = $_POST["senha"];
	  }
	  
	if (isset($_POST["senha2"])) {
		  $senha2 = $_POST["senha2"];
	  }
	  
	if ($senha != $senha2) {
		header("Location: cadastro.php?senha=true");;
	}

	$checarExistencia = "SELECT 1 FROM transeunte WHERE email = '$email'";
	$resultadoChecagem = mysqli_query($link, $checarExistencia);
	
	if (mysqli_num_rows($resultadoChecagem) > 0) {
		header("Location: cadastro.php?existente=true");;
	}	  
	if ($alteracao != "true" && $cadastro == "true") {	   
		$insertTranseunte = "INSERT INTO transeunte (email, nome, idade, senha) VALUES ('$email', '$nome', $idade, sha1($senha));";
		$resultadoInsertTranseunte = mysqli_query($link, $insertTranseunte);
		
		$_SESSION["nome"] = $nome;
		$_SESSION["idade"] = $idade;
		$_SESSION["email"] = $email;
		$_SESSION["id_transeunte"] = $id_transeunte;
		
		mysqli_close($link);	
	} else {
		$nome = $_SESSION["nome"];
		$idade = $_SESSION["idade"];
		$email = $_SESSION["email"];
		$id_transeunte = $_SESSION["id_transeunte"];
		$alteracao = "";
	}
?>
<html>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<body>
		<center>
			<div id="header"></div>
			<form method="post" action="destino.php">
				<fieldset>
					<legend> Passo 1 - Partida </legend>
					<label for="local_partida">Insira seu local de partida</label><br/>
					<input type="text" id="local_partida" name="local_partida" required="true" placeholder="Ex.: Senac 903 Sul"/><br/><br/>
					<input type="submit" value="Próximo" />
					<?php
						echo '<br/><br/><center><a href="form_alterar.php">Alterar cadastro</a></center> ';
					?>
				</fieldset>	
			</form>
			<div id="footer"></div>
		</center>
	</body>

	<script src="js/jquery.min.js" ></script>
	<script>	
		$(function(){
		  $("#header").load("templates/header.html"); 
		  $("#footer").load("templates/footer.html"); 
		});
	</script>	
	</script> 
</html>