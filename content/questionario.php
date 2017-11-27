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
	$pergunta = '';
	$resposta1 = '';
	$resposta2 = '';
	$respostaCorreta = '';	
	echo '
				<center>
					<div id="header"></div>
					<form method="post" action="resultado.php">
						<fieldset>
							<legend> Passo 6 - Questionário 
								<br/><a style="font-size: 12px" href="form_alterar.php">Alterar cadastro</a>
								<a style="color: red; font-size: 12px" href="../index.php" onclick="return confirm(\'Você realmente deseja efetuar o logout?\')">Logout</a>
							</legend>
							O tipo de transporte escolhido foi: <b>' . $_SESSION["tipo_transporte"] .'</b> <br/> ';
	
	if ($_SESSION["tipo_transporte"] == 'Carro') {
		echo '
		<label>Você tomou uma fechada no trânsito, e agora?</label><br/>
		<input type="radio" id="resposta1" name="resposta" value="errado" required="true"/>
		<label for="resposta1">Fico irritado na hora e tento dar uma fechada de volta.</label><br/>
		<input type="radio" id="resposta2" name="resposta" value="errado"/>
		<label for="resposta2">Paro o carro na hora e saio, tentando começar uma briga.</label><br/>
		<input type="radio" id="resposta3" name="resposta" value="correto"/>
		<label for="resposta3">Ignoro e continuo meu percurso.</label><br/>
		';		
	} else if ($_SESSION["tipo_transporte"] == 'Ônibus') {
		echo '
		<label>Ao entrar no ônibus, como você tenta garantir sua segurança?</label><br/>
		<input type="radio" id="resposta1" name="resposta" value="errado" required="true"/>
		<label for="resposta1">Entro e não me seguro nas barras nem tento me sentar.</label><br/>
		<input type="radio" id="resposta2" name="resposta" value="errado"/>
		<label for="resposta2">Simplesmente apoio o corpo mas fico com as mãos ocupadas.</label><br/>
		<input type="radio" id="resposta3" name="resposta" value="correto"/>
		<label for="resposta3">Tento sentar ou me segurar em uma das barras.</label><br/>
		';	
	} else if ($_SESSION["tipo_transporte"] == 'Bicileta') {
		echo '
		<label>Andar na ciclovia é correto?</label><br/>
		<input type="radio" id="resposta1" name="resposta" value="correto" required="true"/>
		<label for="resposta1">Sim, é o lugar ideal para se andar de bicileta.</label><br/>
		<input type="radio" id="resposta2" name="resposta" value="errado"/>
		<label for="resposta2">Não, prefiro pedalar junto aos carros.</label><br/>
		<input type="radio" id="resposta3" name="resposta" value="errado"/>
		<label for="resposta3">Depende, prefiro pedalar onde posso gastar menos tempo.</label><br/>
		';
	} else {
		echo '
		<label>Você procura atravessar a rua utilizando a faixa de pedestres?</label><br/>
		<input type="radio" id="resposta1" name="resposta" value="errado" required="true"/>
		<label for="resposta1">Não, demora muito para os carros pararem.</label><br/>
		<input type="radio" id="resposta2" name="resposta" value="correto"/>
		<label for="resposta2">Sim, é a forma mais segura para se atravessar uma rua.</label><br/>
		<input type="radio" id="resposta3" name="resposta" value="errado"/>
		<label for="resposta3">Depende, atravesso de qualquer forma que seja mais rápido.</label><br/>
		';
	}
	
	echo 			'<input type="submit" value="Próximo" />
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