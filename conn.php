<?php

$hostName = "localhost";
$user = "root";
$senha = null;
$dbName = "agenda";
$port = 3306;

//CONEXÃO COM BD
if ($pdo = new PDO("mysql:hostname={$hostName};dbname={$dbName};port={$port}", $user, $senha)) {
	//echo "Conectado";
	//echo "<hr>";
} else {
	echo "Erro";
};