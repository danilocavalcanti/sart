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
	$_SESSION["local_partida"] = $_REQUEST["local_partida"];
	echo '
				<center>
					<div id="header"></div>
					<form method="post" action="meiotransporte.php">
						<fieldset>
							<legend> Passo 2 - Destino
								<br/><a style="font-size: 12px" href="form_alterar.php">Alterar cadastro</a>
								<a style="color: red; font-size: 12px" href="../index.php" onclick="return confirm(\'Você realmente deseja efetuar o logout?\')">Logout</a>
							</legend>
							<label for="local_chegada">Insira seu local de destino</label><br/>
							<input type="text" id="local_chegada" name="local_chegada" required="true" placeholder="Ex.: Rodoviária Plano"/><br/><br/>
							<input type="submit" value="Próximo" />
						</fieldset>	
					</form>
					<div id="footer"></div>
				</center>
		<script src="js/jquery.min.js"></script> 
		<script> 
			$(function(){
			  $("#header").load("templates/header.html"); 
			  $("#footer").load("templates/footer.html"); 
			});
		</script> 
	';
?>
		</body>
</html>