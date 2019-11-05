<?php
    // Do formulario em 'cadastrese.php' vem direto pra cá
    // ou seja, essa é a etapa para inserir dados preenchidos.
    
    // verifica se arquivo já foi incluido e chama 'db.class.php' para poder instancia-lo
    require_once('../db.class.php'); 
    
    // Metodo Post que é uma Array que guarda dados de cada elemento do formulario
    $id_cli = $_POST['id_cli'];
    $nome_cli = $_POST['nome_cli'];    
    $cpf_cli = $_POST['cpf_cli']; 
    $data_nasc_cli = $_POST['data_nasc_cli']; 
    $email_cli = $_POST['email_cli'];
    $senha_cli = $_POST['senha_cli']; 
	$telefone_cli = $_POST['telefone_cli'];
    $endereco_cli = $_POST['endereco_cli'];
    $agencia_cli = $_POST['agencia_cli']; 
    $tipo_de_conta_cli = $_POST['tipo_de_conta_cli']; 
    $conta_cli = $_POST['conta_cli'];

    // instancia para poder conectar ao bd do phpmyadmin
    $objDB = new db();
    $link = $objDB->conecta_mysql();    //conexão
    

    // inserir registros diretamente para a tabela 
    $sql = " INSERT INTO cliente(nome_cli, cpf_cli, data_nasc_cli, email_cli, senha_cli, telefone_cli, endereco_cli, agencia_cli, tipo_de_conta_cli, conta_cli) VALUES ('$nome_cli', '$cpf_cli', '$data_nasc_cli', '$email_cli', '$senha_cli', '$telefone_cli', '$endereco_cli', '$agencia_cli', '$tipo_de_conta_cli', '$conta_cli') ";

    //executar a query
    mysqli_query($link, $sql);

    //valida se usuario foi registrado no bd 
    if(mysqli_query($link, $sql)){
        echo 'Cliente registrado com sucesso!';
        header('Location: ../validar_acesso.php');

    }else{
        echo 'Erro ao registrar Cliente.';
    }

?>