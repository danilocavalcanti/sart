<html>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<?PHP
	session_start();
	$_SESSION["tipo_transporte"] = $_REQUEST["tipo_transporte"];
	echo '
		<body>
			<div class="bg">
				<center>
					<div id="header"></div>
					<form method="post" action="inforota.php">
						<fieldset>
							<legend> Passo 4 - Rota
								<br/><a style="font-size: 12px" href="form_alterar.php">Alterar cadastro</a>
								<a style="color: red; font-size: 12px" href="../index.php" onclick="return confirm(\'Você realmente deseja efetuar o logout?\')">Logout</a>
							</legend>
							<label for="local_partida">Escolha a rota</label><br/>
							<label for="rota1">Rota 1</label><br/>
							<input type="radio" id="rota1" name="rota" required="true" value="Rota 1"/>
							<img src="img/rota1.jpg" alt="Rota 1" style="width:304px;height:228px;"><br/><br/>
							<label for="rota2">Rota 2</label><br/>
							<input type="radio" id="rota2" name="rota" value="Rota 2"/>
							<img src="img/rota2.jpg" alt="Rota 2" style="width:304px;height:228px;"><br/><br/>
							<input type="submit" value="Próximo" />
						</fieldset>	
					</form>
					<div id="footer"></div>
				</center>
			</div>
		</body>
		
		<script src="js/jquery.min.js"></script> 
		<script> 
			$(function(){
			  $("#header").load("templates/header.html"); 
			  $("#footer").load("templates/footer.html"); 
			});
		</script> 
	';
?>
</html>