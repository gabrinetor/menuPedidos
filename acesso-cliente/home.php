<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: index.php');
endif;

// Dados
$id = $_SESSION['id_cli'];
$sql = "SELECT * FROM cliente WHERE id_cli = '$id_cli'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<html>
<head>
	<title>Página restrita</title>
	<meta charset="utf-8">
</head>
<body>
<h1> Olá <?php echo $dados['nome_cli']; ?> </h1>
<a href="logout.php">Sair</a>
</body>
</html>