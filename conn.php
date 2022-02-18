<?php


$hostName = "localhost";
$user = "root";
$senha = 123456;
$dbName = "agenda";
$port = 3306;

//CONEXÃO COM BD
if ($pdo = new PDO("mysql:hostname={$hostName};dbname={$dbName};port={$port}", $user, $senha)) {
	//echo "Conectado";
	//echo "<hr>";
} else {
	echo "Erro";
};

//CADASTRAR

if (isset($_POST['nome'])) {
	$sql = $pdo->prepare("INSERT INTO agenda1 VALUES(default,?,?,?)");
	$sql->execute(array($_POST['nome'], $_POST['sobreNome'], $_POST['telefone']));
	echo "{$_POST['nome']} cadastrado com sucesso!";
	exit();
}
    