<?php 

if(!isset($_SESSION['carrinho'])) {
	$_SESSION['carrinho'] = array();
}

function addCart($id, $quantity) {
	if(!isset($_SESSION['carrinho'][$id])){ 
		$_SESSION['carrinho'][$id] = $quantity; 
	}
}

function deleteCart($id) {
	if(isset($_SESSION['carrinho'][$id])){ 
		unset($_SESSION['carrinho'][$id]); 
	} 
}

function updateCart($id, $quantity) {
	if(isset($_SESSION['carrinho'][$id])){ 
		if($quantity > 0) {
			$_SESSION['carrinho'][$id] = $quantity;
		} else {
		 	deleteCart($id);
		}
	}
}

function getContentCart($pdo) {
	
	$results = array();
	
	if($_SESSION['carrinho']) {
		
		$cart = $_SESSION['carrinho'];
		$pedidos =  getPedidosByIds($pdo, implode(',', array_keys($cart)));

		foreach($pedidos as $pedido) {

			$results[] = array(
							  'id' => $pedido['id'],
							  'name' => $pedido['nome'],
							  'price' => $pedido['preco'],
							  'quantity' => $cart[$pedido['id']],
							  'subtotal' => $cart[$pedido['id']] * $pedido['preco'],
							  'imagem' => $cart[$pedido['id']],
						);
		}
	}
	
	return $results;
}

function getTotalCart($pdo) {
	
	$total = 0;

	foreach(getContentCart($pdo) as $pedido) {
		$total += $pedido['subtotal'];
	} 
	return $total;
}	