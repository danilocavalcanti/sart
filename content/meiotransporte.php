<html>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<body style='
		    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			line-height: 1.42857143;
			color: #333;
			background-color: rgba(226, 226, 226, 0);

		'>
<?PHP
	session_start();
	$_SESSION["local_chegada"] = $_REQUEST["local_chegada"];
	echo '
				<center>
					<div id="header"></div>
					<form method="post" action="rotas.php">
						<fieldset>
							<legend> Passo 3  - Transporte
								<br/><a style="font-size: 12px" href="form_alterar.php">Alterar cadastro</a>
								<a style="color: red; font-size: 12px" href="../index.php" onclick="return confirm(\'Você realmente deseja efetuar o logout?\')">Logout</a>
							</legend>
							<label>Escolha o tipo de transporte</label><br/>
							<input type="radio" id="carro" name="tipo_transporte" required="true" value="Carro"/>
							<label for="carro">Carro</label><br/>
							<input type="radio" id="onibus" name="tipo_transporte" value="Ônibus"/>
							<label for="onibus">Ônibus</label><br/>
							<input type="radio" id="bicicleta" name="tipo_transporte" value="Bicicleta"/>
							<label for="bicicleta">Bicicleta</label><br/>
							<input type="radio" id="pedestre" name="tipo_transporte" value="A Pé"/>
							<label for="pedestre">A Pé</label><br/>
							<input type="submit" value="Próximo" />
						</fieldset>	
					</form>
					<div id="footer"></div>
				</center>
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