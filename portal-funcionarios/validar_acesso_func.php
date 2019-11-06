<?php
    // se usuario foi registrado com sucesso, devido à conexão e inserção ao BD, então vem pra cá
    // ou seja, para poder preencher o form em 'index.php', terá que ter registro no banco.

    // verifica se arquivo já foi incluido e chama 'db.class.php' para poder instancia-lo
    require_once('db.class.php');

    // estando registrado, cliente poderá fazer login com esses dados
    $email_func = $_POST['email_func'];
    $senha_func = $_POST['senha_func'];

    // query
    $sql = " SELECT * FROM funcionarios WHERE email_func = '$email_func' AND senha_func = '$senha_func' ";

    //instancia BD para estabelecer conexão
    $objDB = new db();
    $link = $objDB->conecta_mysql();    

    $resultado_id = mysqli_query($link, $sql);


    /*if($resultado_id){

        $dados_func = mysqli_fetch_array($resultado_id);

        if(isset($dados_func['email_func'])){
            echo "Olá, ".$email_func.". ";
        } else {
            header('Location: index.php?erro=1');   
        }

    }else{
        echo 'Erro na execução da consulta'; 
    }*/

    // Botão enviar
if(isset($_POST['btn-entrar'])):
	$erros = array();
	$email_func = mysqli_escape_string($connect, $_POST['email_func']);
	$senha_func = mysqli_escape_string($connect, $_POST['senha_func']);

	if(empty($email_func) OR empty($senha_func)):
		$erros[] = "<li> O campo email/senha precisa ser preenchido </li>";
	else:
		// 105 OR 1=1 
	    // 1; DROP TABLE teste

		$sql = "SELECT email_func FROM funcionarios WHERE email_func = '$email_func'";
		$resultado = mysqli_query($connect, $sql);		

		if(mysqli_num_rows($resultado) > 0):
		$senha_func = ($senha_func);       
		$sql = "SELECT * FROM funcionarios WHERE email_func = '$email_func' AND senha_func = '$senha_func'";


		$resultado = mysqli_query($connect, $sql);

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['logado'] = true;
				$_SESSION['id_cargo'] = $dados['id_cargo'];
				header('Location: home.php');
			else:
				$erros[] = "<li> Usuário e senha não conferem </li>";
			endif;

		else:
			$erros[] = "<li> Usuário inexistente </li>";
		endif;

	endif;

endif;
?>