<?php 
/*Trabalhar com dados de clientes*/

include('conect.php');

// Função para Autenticar cliente
function autenticarCliente($email_cli, $senha_cli) {
	
	//faz o sql pra ver se o cliente existe
	$sql = "SELECT id_cli FROM cliente WHERE email_cli = :email_cli AND senha_cli = :senha_cli LIMIT 1 ";
	$db = getConnectionDB();
	$stmt = $db->prepare($sql);
	$stmt->bindValue(":email_cli", $email_cli);
	//Senha tem q ser encriptada
	$stmt->bindValue(":senha_cli", $senha_cli);
	
	if(!$stmt->execute()){
		return false;
	}
	
	$cliente = $pdo->fetch(PDO::FETCH_ASSOC);
	
	if(!$cliente){
		return false;
	}
	
	//Salva o ID do cliente numa sessão
	
	$_SESSION['id_cli'] = $cliente['id_cli'];
	
	return true;
}

//Verifica se cliente está logado
function verificaAcessoCliente(){
    return isset($_SESSION['id_cli']);
}

    echo "Voce logou como cliente. ";

//Desloga cliente 
/*function deslogaAcessoCliente(){
	return unset($_SESSION['id_cli']);
}*/

?>