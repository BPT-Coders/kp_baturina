<?php
//Запуск сессий;
session_start();
	$cart = $_SESSION['cart'];

	$id = $_POST['id'];
	$num = $_POST['num'];
	
	$newProduct["idProduct"] = $id;
	$newProduct["numProduct"] = $num;

	$cart[count($cart)] = $newProduct;
	
	$_SESSION['cart'] = $cart;
?>