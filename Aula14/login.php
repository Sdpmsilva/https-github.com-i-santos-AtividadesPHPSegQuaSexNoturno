<?php
include("banco_de_dados.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$usuario_login = array();
$usuario_login["email"] = $email;
$usuario_login["senha"] = $senha;

$sucesso = false;
foreach ($lista_usuarios as $u) {
	
	if ($u["email"] == $usuario_login["email"] 
	and $u["senha"] == $usuario_login["senha"]) {
		// Usuário fez o login com sucesso
		$sucesso = true;
		break;
	}
	
}

if ($sucesso == true) {
	header("Location: home.php");
} else {
	session_start();
	$_SESSION["login"] = false;

	header("Location: usuarios.php");
}




