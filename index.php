<!DOCTYPE html>
<html>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="content/css/bootstrap.css" />
	<body>
		<center>
			<div id="header"></div>
			<form method="post" action="content/login.php">
				<fieldset>
					<legend> <b>S.A.R.T.</b> <br/> Sistema de Avaliação de Riscos do Transeunte</legend>
					<?php
						session_start();
						if (isset($_GET['erro'])) {
							echo '<h5 style="color: red;">Login inválido! Tente novamente.</h5>';
						}
					?>
					<label for="login">Login</label><br/>
					<input type="text" id="login" name="login" required="true" placeholder="Insira o login (seu e-mail)"/><br/><br/>
					<label for="senha">Senha</label><br/>
					<input type="password" id="senha" name="senha" required="true" placeholder="Insira a senha"/><br/><br/>
					<input type="submit" value="Entrar" /><br/><br/>
					<a href="content/cadastro.php"> Efetuar cadastro</a>
				</fieldset>	
			</form>
			<div id="footer"></div>
		</center>
	</body>

	<script src="js/jquery.min.js" ></script>
	<script>	
		$(function(){
		  $("#header").load("content/templates/header.html"); 
		  $("#footer").load("content/templates/footer.html"); 
		});
	</script>	
	</script> 
</html>