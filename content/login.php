<?php
	  include_once "configuracao/conectabd.inc.php";
	  
	  session_start();
	  
	  $nome = "";
	  $idade = 0;
	  $email = "";
	  $senha = "";
	  $id_transeunte = 0;
	  
	  if (isset($_POST["nome"])) {
		  $nome = $_POST["nome"];
	  }
	  
	  if (isset($_POST["idade"])) {
		  $idade = $_POST["idade"];
	  }
	  
	  if (isset($_POST["login"])) {
		  $email = $_POST["login"];
	  }
	  
	  if (isset($_POST["senha"])) {
		  $senha = $_POST["senha"];
	  }
	  
	  $efetuarLogin = "SELECT nome, idade, email, id_transeunte FROM transeunte WHERE email = '$email' AND senha = sha1($senha)";
	  $result = mysqli_query($link, $efetuarLogin);
	  if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {	
			$nome = $row["nome"];		
			$idade = $row["idade"];
			$email = $row["email"];
			$id_transeunte = $row["id_transeunte"];
			
			$_SESSION["nome"] = $nome;
			$_SESSION["idade"] = $idade;
			$_SESSION["email"] = $email;
			$_SESSION["id_transeunte"] = $id_transeunte;
			
			header("Location: inicio.php");
		} 
	  } else {
		header("Location: ../index.php?erro=true");;
	  }
?>