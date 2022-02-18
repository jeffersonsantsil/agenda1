
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
	echo '<script>alert("Cadastro de >'. strtoupper($_POST['nome']) . '< realizado com Sucesso!")</script>';
	return 'index.php';
	exit();
	
}

//LISTAR

$list = $pdo->prepare("SELECT * From agenda1");
$list->execute();

$lista = $list->fetchAll(10);