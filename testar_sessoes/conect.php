<?php 
/*Carrega as definições da aplicação*/

//Inicia a sessão
session_start();

//Define as credenciais com banco de dados
define("DB_DSN", "mysql:host=localhost;dbname=codefood");
define("DB_USER", "root");
define("DB_PASS", "");

//Inclui os arquivos
require_once "database.php";
require_once "clientes.php";
require_once "funcionarios.php";