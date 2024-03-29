<?php 
	session_start();
	require_once "functions/pedidos.php";
	require_once "functions/cart.php";

	$pdoConexao = require_once "conexao.php";

	if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {
		
		if($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			addCart($_GET['id'], 1);			
		}

		if($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			deleteCart($_GET['id']);
		}

		if($_GET['acao'] == 'up'){ 
			if(isset($_POST['prod']) && is_array($_POST['prod'])){ 
				foreach($_POST['prod'] as $id => $qtd){
						updateCart($id, $qtd);
				}
			}
		} 
		header('location: carrinho.php');
	}

	$resultsCarts = getContentCart($pdoConexao);
	$totalCarts  = getTotalCart($pdoConexao);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carrinho de Pedidos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />

</head>
<body>
	<div class="container">
		<div class="card mt-5">
			 <div class="card-body">
	    		<h4 class="card-title">Carrinho</h4>
	    		<a href="index.php"> <<< Voltar ao Menu de Pedidos</a>
	    	</div>
		</div>

		<?php if($resultsCarts) : ?>
			<!--<form action="carrinho.php?acao=up" method="post">-->
			<form method="post" action="gerar_qrcode/validar_totalcarts.php">
			<table class="table table-strip">
				<thead>
					<tr>
						<th>Pedido</th>
						<th>Quantidade</th>
						<th>Preço</th>
						<th>Total</th>
						<th center>Ação</th>

					</tr>				
				</thead>
				<tbody>
				  <?php foreach($resultsCarts as $result) : ?>
					<tr>
						
						<td><?php echo $result['name']?></td>
						<td>
							<input type="number" name="prod[<?php echo $result['id']?>]" value="<?php echo $result['quantity']?>" size="1" />
														
							</td>
						<td>R$<?php echo number_format($result['price'], 2, ',', '.')?></td>
						<td>R$<?php echo number_format($result['subtotal'], 2, ',', '.')?></td>
						
						<td><a href="#" class="btn btn-primary">Atualizar</a> <a href="carrinho.php?acao=del&id=<?php echo $result['id']?>" class="btn btn-danger">Remover</a></td>
						
					</tr>
				<?php endforeach;?>
				 <tr>
				 	<td colspan="3" class="text-right"><b>Total a Pagar: </b></td>
				 	
					<td>R$<?php echo number_format($totalCarts, 2, ',', '.')?></td>
				 	
					<td></td>
				 </tr>
				</tbody>
				
			</table>

			<a class="btn btn-info" href="index.php">Pedir Mais !</a>
			<a class="btn btn-danger" href="../portal-clientes/gerar_qrcode/index.php">Pagar</a>


			</form>
	<?php endif?>
		
	</div>

</body>
</html>