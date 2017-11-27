<!DOCTYPE html>
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
<?php
	session_start();
	include_once "configuracao/conectabd.inc.php";
	
	$id_transeunte = '';
					
	if (isset($_SESSION["id_transeunte"])) {
		$id_transeunte = $_SESSION["id_transeunte"];
	}
	
	$query = "DELETE FROM transeunte WHERE id_transeunte =  $id_transeunte;";
		
	if ($result = mysqli_query($link, $query)) {
	  echo "<center><h1>Seu usuário foi deletado com sucesso!</h1></center>";
	  echo '<center><a href="../index.php"> Retornar para a Página Principal!</a>';
  } else {
	  header("Location: form_alterar.php?deletar=true");;
  }
	mysqli_close($link);	
?>
	</body>
</html>