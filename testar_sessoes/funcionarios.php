<?php 
/*Trabalhar com dados dos funcionarios*/

// Autenticar Funcionario
function autenticarFuncionario($email_func, $senha_func) {
	
	//faz o sql
	$sql = "SELECT id_func FROM funcionarios WHERE email_func = :email_func AND senha_func = :senha_func LIMIT 1";
	$db = getConnectionDB();
	$stmt = $db->prepare($sql);
	$stmt->bindValue(":email_func", $email_func);
	//Senha tem q ser encriptografada
	$stmt->bindValue(":senha_func", $senha_func);
	
	if(!$stmt->execute()){
		return false;
	}
	
	$funcionario = $pdo->fetch(PDO::FETCH_ASSOC);
	
	if(!$funcionario){
		return false;
	}
	
	
	//Salva o ID do funcionario numa sessão
	
	$_SESSION['id_func'] = $funcionario['id_func'];
	
	return true;
}
//Verifica se funcionario está logado
function verificaAcessoFuncionario(){
	return isset($_SESSION['id_func']);
}

echo "voce logou como funcionario";

//Desloga Funcionario 
/*function deslogaAcessoFuncionario(){
	return unset($_SESSION['id_func']);
}*/