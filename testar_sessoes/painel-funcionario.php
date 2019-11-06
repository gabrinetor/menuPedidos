<?php 
require_once "conect.php";

//Verifica se ele tem permissão de acesso
if(!verificaAcessoFuncionario()) {
  header("location: login.php");
  //Acesso negado
  exit;
}