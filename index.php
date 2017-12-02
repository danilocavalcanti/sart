<!DOCTYPE html>
<html>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="content/css/bootstrap.css" />
	<body>
		<div class="bg">
			<center>
				<div id="header">
					<img src="content/img/logo.png"/>
				</div>
				<form method="post" action="content/login.php">
					<fieldset>
					<legend>Sistema de Avaliação de Riscos do Transeunte</legend>
						<?php
							session_start();
							
							if (isset($_GET['erro'])) {
								echo '<h5 style="color: red;">Login inválido! Tente novamente.</h5>';
							}
						?>
						<div class="login">
							<div class="inputLogin">
								<label for="login">Login</label><br/>
								<input type="text" id="login" name="login" required="true" placeholder="Insira o login (seu e-mail)"/><br/><br/>
								<label for="senha">Senha</label><br/>
								<input type="password" id="senha" name="senha" required="true" placeholder="Insira a senha"/><br/><br/>
							</div>
							<div class="botaoEntrar">
								<input type="submit" value="Entrar" /><br/><br/>
							</div>	
							<a href="content/cadastro.php"> Efetuar cadastro</a>
						</div>
					</fieldset>	
				</form>
				<div id="footer">
				   <br/> Sistema de Avaliação de Riscos do Transeunte	
				</div>
			</center>
		</div>
	</body>
</html>