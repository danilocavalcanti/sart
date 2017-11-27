<!DOCTYPE html>
<html>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<body>
		<div class="bg">
			<center>
				<div id="header"></div>
				<form method="post" action="inicio.php?cadastro=true">
					<fieldset>
						<legend> Cadastro </legend>
						<?php
							session_start();
							if (isset($_GET['senha'])) {
								echo '<h5 style="color: red;">A repetição da senha não confere. Tente novamente.</h5>';
							}
							
							if (isset($_GET['existente'])) {
								echo '<h5 style="color: red;">Este e-mail já está em uso.</h5>';
							}
						?>
						<div class="cadastro">
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
							<input type="submit" value="Cadastrar" /><br/><br/>
							<a href="../index.php"> Voltar </a>
						</div>
					</fieldset>	
				</form>
				<div id="footer"></div>
			</center>
		</div>	
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