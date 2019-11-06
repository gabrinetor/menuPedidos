<?php 

require_once "conect.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $email_func = filter_input(INPUT_POST, 'email_func', FILTER_SANITIZE_EMAIL); 
   $senha_func = filter_input(INPUT_POST, '$senha_func');

   //Verifica as credenciais do funcionario
  if(!autenticarFuncionario($email_func, $senha_func)){
    //dados incorretos, e redireciona para nenhuma pagina
    header("location: login.php");
    exit;
  }

  header("location: painel-funcionario.php");
}