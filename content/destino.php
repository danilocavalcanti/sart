<html>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<?PHP
	session_start();
	$_SESSION["local_partida"] = $_REQUEST["local_partida"];
	echo '
		<body>
			<center>
				<div id="header"></div>
				<form method="post" action="meiotransporte.php">
					<fieldset>
						<legend> Passo 2 - Destino</legend>
						<label for="local_chegada">Insira seu local de destino</label><br/>
						<input type="text" id="local_chegada" name="local_chegada" required="true" placeholder="Ex.: Rodoviária Plano"/><br/><br/>
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