<?php
    
    require_once('../db.class.php'); 
    
    // Metodo Post que é uma Array que guarda dados de cada elemento do formulario
    $id_cargo = $_POST['id_cargo'];
    $nome_cargo = $_POST['nome_cargo'];
    $desc_cargo = $_POST['desc_cargo'];
    $nome_func = $_POST['nome_func'];
    $email_func = $_POST['email_func'];
    $senha_func = $_POST['senha_func'];

    // instancia para poder conectar ao bd do phpmyadmin
    $objDB = new db();
    $link = $objDB->conecta_mysql();    //conexão
    
    // inserir registros diretamente para a tabela 
    $sql = " INSERT INTO funcionarios (nome_cargo, desc_cargo, nome_func, email_func, senha_func) VALUES ('$nome_cargo', '$desc_cargo', '$nome_func', '$email_func', '$senha_func') ";

    //executar a query
    mysqli_query($link, $sql);

    //valida se usuario foi registrado no bd 
    if(mysqli_query($link, $sql)){
        echo 'Funcionario registrado com sucesso!';
        header('Location: validar_acesso.php');

    }else{
        echo 'Erro ao registrar Funcionario.';
    }

?>