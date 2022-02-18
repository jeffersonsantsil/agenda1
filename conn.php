
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

//CADASTRAR

if (isset($_POST['nome'])) {
	$sql = $pdo->prepare("INSERT INTO agenda1 VALUES(default,?,?,?)");
	$sql->execute(array($_POST['nome'], $_POST['sobreNome'], $_POST['telefone']));
	echo '<script>alert("Cadastro de >' . strtoupper($_POST['nome']) . '< realizado com Sucesso!")</script>';
	
}

//LISTAR

$list = $pdo->prepare("SELECT * From agenda1");
$list->execute();

$lista = $list->fetchAll();


//EXCLUIR

if (isset($_GET['delete'])) {
	$id = (int) $_GET['delete'];
	// $queryBuscaNome = "SELECT nome from agenda1 where id=$id";
	// $nome = $pdo->prepare($queryBuscaNome);
	// $nome = $pdo->exec($nome);

	// //var_dump($nome);
	// echo $nome;
	// die();
	$pdo->exec("DELETE FROM agenda1 where id=$id");

	//echo alert$nome;
	
	echo '<script>alert("Usuario de id '. $id . ' ecluído com sucesso!")</script>';
	//echo '<script>alert("Cadastro de >' . strtoupper($_POST['nome']) . '< realizado com Sucesso!")</script>';
	
}
