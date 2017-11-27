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
	$_SESSION["resposta"] = $_REQUEST["resposta"];
	$fatorDeRiscoRota = 0;
	$fatorDeRiscoResposta = 0;
	if ($_SESSION["rota"] == 'Rota 1') {
		$fatorDeRiscoRota = 1.5;
	} else {
		$fatorDeRiscoRota = 4.5;
	}
	
	if ($_SESSION["resposta"] == 'correto') {
		$fatorDeRiscoResposta = 10;
	} else {
		$fatorDeRiscoResposta = 20;
	}
	
	$resultado = $fatorDeRiscoResposta * $fatorDeRiscoRota;
	$cor = '';
	$comentario = '';
	if ($resultado < 31) {
		$cor = 'green';
		$comentario = 'Parabéns, você corre poucos riscos.';
	} else if ($resultado < 71) {
		$cor = 'yellow';
		$comentario = 'Você corre alguns riscos. Tente ser mais prudente e atento!';
	} else {
		$cor = 'red';
		$comentario = 'Atenção!!! Você corre muitos riscos! Tente mudar seus hábitos e/ou escolher outra rota!';
	}
	echo '
				<center>
					<div id="header"></div>
					<form method="post">
						<fieldset>
							<legend> Resultado de Risco 
								<br/><a style="color: red; font-size: 12px" href="../index.php" onclick="return confirm(\'Você realmente deseja efetuar o logout?\')">Logout</a>
							</legend>
							Nome cadastrado: <b>' . $_SESSION["nome"] .'</b><br/>
							Idade cadastrada: <b>' . $_SESSION["idade"] .'</b><br/>
							E-mail cadastrado: <b>' . $_SESSION["email"] .'</b><br/>
							O seu local de partida é: <b>' . $_SESSION["local_partida"] .'</b><br/>
							O seu local de destino é: <b>' . $_SESSION["local_chegada"] .'</b><br/>
							A rota escolhida foi: <b>' . $_SESSION["rota"] .'</b><br/>
							O tipo de transporte escolhido foi: <b>' . $_SESSION["tipo_transporte"] .'</b><br/>
							O seu resultado é: <br/><br/>
							<h1><span style="background-color:' . $cor . '; color: #ffffff;">' . $resultado . '%</span></h1><br/><br/>
							<h1><span style="background-color:' . $cor . '; color: #ffffff;">' . $comentario . '</span></h1>
							';
						
	echo 		'</fieldset>	
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