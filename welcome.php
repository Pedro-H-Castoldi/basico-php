<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$nome = $_POST["user"];
		$senha = $_POST["pass"];
	}
	echo "Olá ".$_POST["user"]."<br>";
	echo "Seja bem-vindo ao nosso site!<br><br>";
	echo "DADOS DO USUÁRIO<br>";
	echo "NOME COMPLETO: ".$nome."<br>";
	echo "E-MAIL: ". $_POST["email"]."<br>";

	if($_POST["sexo"] == "M"){
		$s = "Masculino";
	}
	else if($_POST["sexo"] == "F"){
		$s = "Feminino";
	}
	else{
		$s = "Outro";
	}
	echo "SEXO: ". $s. "<br>";
?>