<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
	$erros = array();
	$email_cli = mysqli_escape_string($connect, $_POST['email_cli']);
	$senha_cli = mysqli_escape_string($connect, $_POST['senha_cli']);

	if(empty($email_cli) or empty($senha_cli)):
		$erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
	else:
		// 105 OR 1=1 
	    // 1; DROP TABLE teste

		$sql = "SELECT email_cli FROM cliente WHERE email_cli = '$email_cli'";
		$resultado = mysqli_query($connect, $sql);		

		if(mysqli_num_rows($resultado) > 0):
		$senha = md5($senha);       
		$sql = "SELECT * FROM cliente WHERE email_cli = '$email_cli' AND senha_cli = '$senha_cli'";



		$resultado = mysqli_query($connect, $sql);

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['logado'] = true;
				$_SESSION['id_cli'] = $dados['id_cli'];
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

<!DOCTYPE HTML>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

	<body>

		<!-- Fim Menu Fixo -->

		<div class="page">

    	  <div class="imagem-col col">
            <div class="papelparede middle">
            <div class="newsletter middle">
              <h1 class="boton">Conheça nosso Menu</h1><br>
            <input class="newsletter-btn" type="button" value="Faça seu Pedido"></div>
            </div>
          </div>
          
          <div class="newsletter-col col">
            <div class="newsletter middle">
            <legend><h1>CodeFood</h1></legend>
              
            <h3>Faça seu login e realize seu pedido</h3>

            <?php 
            if(!empty($erros)):
              foreach($erros as $erro):
                echo $erro;
              endforeach;
            endif;
            ?>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="formLogin">
                <input type="email" id="email_cli" placeholder="Email" value="<?php echo isset($_COOKIE['email_cli']) ? $_COOKIE['email_cli'] : '' ?>">
                <input type="password" id="senha_cli" placeholder="Senha" value="<?php echo isset($_COOKIE['senha_cli']) ? $_COOKIE['senha_cli'] : '' ?>">
                <button type="submit" class="btnn botao-info" name="btnn-entrar">Login</button>
                <br /><br />
            </form>


            </div>

  
            </div>
          </div>

        </div>
	
	</body>
</html>