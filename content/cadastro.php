<!DOCTYPE html>
<html>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<body>
		<center>
			<div id="header"></div>
			<form method="post" action="inicio.php?cadastro=true">
				<fieldset>
					<legend> Cadastro </legend>
					<?php
						session_start();
						if (isset($_GET['senha'])) {
							echo '<h5 style="color: red;">A repetição da senha deve ser igual. Tente novamente!</h5>';
						}
						
						if (isset($_GET['existente'])) {
							echo '<h5 style="color: red;">Já existe um usuário com esse e-mail cadastrado. Tente com outro e-mail!</h5>';
						}
					?>
					<label for="email">Digite seu e-mail (este será seu login)</label><br/>
					<input type="text" id="email" name="email" required="true" placeholder="E-mail"/><br/><br/>
					<label for="nome">Digite seu nome completo</label><br/>
					<input type="text" id="nome" name="nome" required="true" placeholder="Nome completo"/><br/><br/>
					<label for="idade">Digite sua idade</label><br/>
					<input type="number" id="idade" name="idade" required="true" placeholder="Idade"/><br/><br/>
					<label for="senha">Digite sua senha</label><br/>
					<input type="password" id="senha" name="senha" required="true" placeholder="Senha"/><br/><br/>
					<label for="senha2">Digite novamente sua senha</label><br/>
					<input type="password" id="senha2" name="senha2" required="true" placeholder="Senha"/><br/><br/>
					<input type="submit" value="Cadastrar" />
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