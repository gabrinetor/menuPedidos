<?php 	
	require_once "functions/pedidos.php";
	$pdoConexao = require_once "conexao.php";
	$pedidos = getPedidos($pdoConexao);
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">

		<link rel="icon" href="imagens/icon.png">

		<title>CodeFood - Menu</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/carousel.css" rel="stylesheet">
	</head>

	<body role="document">
		
		<!--CAROUSEL-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="first-slide" src="imagens/slide1.jpg" alt="First slide">
					<div class="container">
					</div>
				</div>
				<div class="item">
					<img class="second-slide" src="imagens/slide2.jpg" alt="Second slide">
					<div class="container">
					</div>
				</div>
				<div class="item">
					 <img class="third-slide" src="imagens/slide3.jpg" alt="Third slide">
					<div class="container">
						<!--<div class="carousel-caption">
							<p><a class="btn btn-lg btn-primary" href="URL" role="button">Ver mais</a></p>
						</div>-->
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>		
		<!--CAROUSEL-->

        <!--MENU-->
		<legend><h1 align="center"><b>Cardápio</b></h1></legend>
         <div class="container">
        <br><br>
           <div class="row">
                <?php foreach($pedidos as $pedido) : ?>
					<div class="col-4">
					<div class="card" style="width: 36rem;">
  						<img src="<?php echo $pedido['imagem']?>" class="card-img-top"  style="height: 18rem;" alt="Card image cap">
  						<div class="card-body" align="center">
							<h3 class="card-title"><?php echo $pedido['nome']?></h3><br />
    						<h4 class="card-subtitle md-2">	
								R$<?php echo number_format($pedido['preco'], 2, ',', '.')?>
							</h4><br />
						<a class="btn btn-danger" href="carrinho.php?acao=add&id=<?php echo $pedido['id']?>" class="card-link">Pedir</a>
  					</div>
					</div><br>
                </div>

                <?php endforeach;?>
            </div>
        </div>

	    </div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="js/jquery.min.js"></script>		
		<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>