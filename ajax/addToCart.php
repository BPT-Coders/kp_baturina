<?php
//Запуск сессий;
session_start();
	$cart = $_SESSION['cart'];
	$id = $_POST['id'];
	$cart[count($cart)]["nameProduct"] = $id;
	$_SESSION['cart'] = $cart;
?>