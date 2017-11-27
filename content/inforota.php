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
	$_SESSION["rota"] = $_REQUEST["rota"];
	$inforota = '';
	if ($_SESSION["rota"] == 'Rota 1') {
		$inforota = 'Esta rota possui <b>boa</b> iluminação, <b>bastante</b> movimento de pedestres e carros e <b>baixo</b> índice de criminalidade.';
	} else {
		$inforota = 'Esta rota possui <b>péssima</b> iluminação, <b>pouco</b> movimento de pedestres e carros e <b>alto</b> índice de criminalidade.';
	}
	echo '
				<center>
					<div id="header"></div>
					<form method="post" action="questionario.php">
						<fieldset>
							<legend> Passo 5 - Informações 
								<br/><a style="font-size: 12px" href="form_alterar.php">Alterar cadastro</a>
								<a style="color: red; font-size: 12px" href="../index.php" onclick="return confirm(\'Você realmente deseja efetuar o logout?\')">Logout</a>
							</legend>
							A rota escolhida foi: <b>' . $_SESSION["rota"] .'</b> <br/> '
							. $inforota .' <br/><br/>
							
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