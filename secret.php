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
<body onLoad="onLoad(); showCart()">

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
 <div id="myCart"></div>
</body>
