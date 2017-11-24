<html>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<?PHP
	session_start();
	$_SESSION["local_chegada"] = $_REQUEST["local_chegada"];
	echo '
		<body>
			<center>
				<div id="header"></div>
				<form method="post" action="rotas.php">
					<fieldset>
						<legend> Passo 3  - Transporte</legend>
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
						<br/><br/><center><a href="form_alterar.php">Alterar cadastro</a></center>
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