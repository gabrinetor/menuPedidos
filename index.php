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
            <div class="newsletter middle"></div>
              <h1 class="boton">Conheça nosso Cardapio</h1><br>
            <!--<input class="newsletter-btn" onclick="document.location.href='menu/index.php'" type="button" value="Faça seu Pedido"></div>-->
            </div>
          </div>
          
          <div class="newsletter-col col">
            <div class="newsletter middle">
            <legend><h1>CodeFood</h1></legend>
              
            <h3>Faça seu login e realize seu pedido</h3>

            <form action="validar_acesso.php" method="POST" id="formLogin">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Senha">
                <input type="button" value="Vagas Disponíveis" class="btnn-entrar" data-link="menu/index.php" data-width="950" data-height="Tot" data-title="Vagas Disponíveis">
                <button type="submit" class="btnn botao-info" name="btnn-entrar" >Login</button>
                <br /><br />
            </form>

            <a href="portal-funcionarios/index.php">Sou Funcionario</a>
            <br><br>
            <a href="portal-clientes/cadastro_cliente.php">Cadastro</a>

            </div>

  
            </div>
          </div>

        </div>
	
	</body>
</html>