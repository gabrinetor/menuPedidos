<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Portal de Acesso do Cliente - Sistema 1</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>

		<!-- Menu Fixo -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="portal-clientes/cadastro_cliente.php">Cadastre-se</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
		<!-- Fim Menu Fixo -->


		<!-- Alinhar componentes na tela -->
	    <div class="container"><br />

			<!-- Coluna 1 - GRID -->
			<div class="col-md-5">
				<legend><h2> Veja nosso menu de pedidos! </h2></legend>
				<br>

				<!-- Botão baixar o .csv de clientes listados -->
				<button onclick="document.location.href='menu/index.php'" class="btn btn-primary form-control">Menu de Pedidos</button>
				
				<br /><br />
			</div>

			<!-- Coluna 2 - GRID -->
			<div class="col-md-1"></div>

			<!-- Coluna 3 - GRID -->
			<div class="col-md-6">
			
				<!-- Fazer Login -->
				<form method="POST" action="validar_acesso.php" id="formLogin">
					<legend>LOGIN DE CLIENTE</legend><br />
					<label>EMAIL: </label>
					<div class="form-group">
						<input type="text" class="form-control" id="campo_email_cli" name="email_cli" placeholder="E-mail" />
					</div>

					<label>SENHA: </label>
					<div class="form-group">
						<input type="password" class="form-control red" id="campo_senha_cli" name="senha_cli" placeholder="Senha" />
					</div>
								
					<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>
					<br /><br />
								
				</form>
			</div>
			
	      </div>

	      <div class="clearfix"></div>

	    </div>
	

		<div class="page">
    	  <div class="countdown-col col">
		  </div>
      <div class="newsletter-col col">
        <div class="newsletter middle">
          <h2>We Will Coming Soon</h2>
          <h4>Subscribe to get notification when we start</h4>
          <form action="">
            <input type="text" placeholder="Enter Your Email">
            <input class="newsletter-btn" type="button" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
		<!-- Bootstrap CDN -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>