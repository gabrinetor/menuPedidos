<?php
//Retorna a conexão do banco de dados
function getConnectionDB(){
	static $conn = null;
	
	if(!$conn){
		$conn = new PDO(DB_DSN, DB_USER, DB_PASS);
	}
	
	return $conn;	
}
