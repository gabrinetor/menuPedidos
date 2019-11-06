<?php 

require_once "conect.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $email_cli = filter_input(INPUT_POST, 'email_cli', FILTER_SANITIZE_EMAIL); 
   $senha_cli = filter_input(INPUT_POST, '$senha_cli');
  //Verifica as credenciais do cliente
  if(!autenticarCliente($email_cli, $senha_cli)){
    //dados incorretos, e redireciona para nenhuma pagina
    header("location: login.php");
    exit;
  }
  
  //Se passar quer dizer o cliente logou, aí redireciona para area dele
  header("location: painel-cliente.php");
}