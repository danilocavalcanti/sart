<html>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
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
		<body>
			<center>
				<div id="header"></div>
				<form method="post" action="questionario.php">
					<fieldset>
						<legend> Passo 5 - Informações </legend>
						A rota escolhida foi: <b>' . $_SESSION["rota"] .'</b> <br/> '
						. $inforota .' <br/><br/>
						
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