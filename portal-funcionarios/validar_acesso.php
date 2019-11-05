<?php

    require_once('./db.class.php');

    $email_func = $_POST['email_func'];
    $senha_func = $_POST['senha_func'];
    $nome_cargo = $_POST['nome_cargo'];

    $sql = " SELECT * FROM funcionarios WHERE email_func = '$email_func' AND senha_func = '$senha_func' ";

    $objDB = new db();
    $link = $objDB->conecta_mysql();    

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        $dados_funcionario = mysqli_fetch_array($resultado_id);
 
        if(isset($dados_cliente['email_func'])){
            echo "Voce logou como ".$nome_cargo.". ";
        } else {
            header('Location: index.php?erro=1');   
        }

    }else{
        echo 'Erro na execução da consulta'; 
    }

?>
