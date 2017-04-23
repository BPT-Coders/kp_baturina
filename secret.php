<?php

//Запуск сессий;
session_start();

//если пользователь не авторизован

if (!(isset($_SESSION['Name'])))
{
//идем на страницу авторизации
header("Location: lichcab.php");
exit;
};
//Выводим саму страницу для авторизованных пользователей
$nm =$_SESSION['Name'] ;
echo $nm;

?>
<head>
	<meta charset="utf-8">
	<title>Клеопатра</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/1.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body onLoad="onLoad()">

	<header id="header">
		<div class="container">
			<a href="./" id="logo" title="Клеопатра">Клеопатра</a>
			<div class="right-links">
				<ul>
					<li><a href="cart.php"><span class="ico-products"></span>Корзина</a></li>
		            <?php
					session_start();
					if (isset($_SESSION['Name']))
					{
					$q ='<li><a href="logout.php"><span class="ico-signout"></span>Выход</a></li>';
						echo $q;
					};
					?>
				</ul>
			</div>
		
		</div>
		<!-- / container -->
	</header>
	
	<h1><center>Добрый день!</h1></center>


<h2>Ваши заказы:</h2>
 
 <?php
if (!(isset($_SESSION['cart']))){
	echo ' У вас нет заказов';
	exit;
};
$cart = $_SESSION['cart'];
if (count($cart) == 0){
	echo 'У вас нет заказов';
	//exit;
}

$mysqli = new mysqli('localhost', 'baturina', '0000', 'kp_baturina');
$query = "set names utf8";
$mysqli->query($query);

$mysqli = new mysqli('localhost', 'baturina', '0000', 'kp_baturina');
$query = "set names utf8";
$mysqli->query($query);

echo '<div class="cart-table" id="myCart"><table>';
	echo'<tr>
							<th class="items">Элементы</th>
							<th class="price">Цена</th>
							<th class="qnt">Количество</th>
							<th class="total">Итого</th>
							
						</tr>';
$sum = 0;
for ($i = 0; $i < count($cart); $i++){
	$query = 'select * from Tovar where id = '.$cart[$i]["nameProduct"].'';
	$results = $mysqli->query($query);
	
	while($row = $results->fetch_assoc()){
	$sum = $sum + $row["cena"];
	echo'<tr>
	
	
							<td class="items">
								<div class="image">
									<img src="'.$row["izobrazhenie"].'" alt="">
								</div>
								<h3><a href="#">'.$row["nazvanie"].'</a></h3>
							</td>
							<td class="price">'.$row["cena"].' руб.</td>
							
						<td class="qnt"></td>
							<td class="total">'.$row["cena"].'</td>
						
						</tr>';
	}
	
	
}
echo '</table></div>';

echo '

<div class="total-count">
					<h4>Итого: '.$sum.' руб.</h4>
					<p>+Перессылка: бесплатно</p>
					<h3>К оплате: <strong>'.$sum.' руб.</strong></h3>
					<a href="zakaz.html" class="btn-grey">Оформить заказ</a>
				</div> 

				';
?>