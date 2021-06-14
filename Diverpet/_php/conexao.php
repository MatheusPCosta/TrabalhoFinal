<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$db = "crud1";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $db);
if (!$conn) {
die("Falha ao conectar com o servidor: " . mysqli_connect_error());
}
else {
echo "Conexão efetuada com sucesso!";
}
?>