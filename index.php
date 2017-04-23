<!DOCTYPE html> 
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Клеопатра</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/1.js"></script>
</head>
<body onLoad="onLoad()">
	<header id="header">
		<div class="container">
			<a href="./" id="logo" title="Клеопатра">Клеопатра</a>
			<div class="right-links">
				<ul>
					<li><a href="cart.php"><span class="ico-products"></span>Корзина</a></li>
					<li><a href="secret.php"><span class="ico-account"></span>Личный кабинет</a></li>
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
	<!-- / header -->

	<nav id="menu">
		<div class="container">
			<div class="trigger"></div>
			<ul id="myMenu">
				<!-- Сюда выведется из ЮД меню-->
			</ul>
		</div>
		<!-- / container -->
	</nav>
	<!-- / navigation -->

	<div id="slider">
		<ul>
			<li style="background-image: url(images/0.jpg)">
				<h3>Сделать вашу жизнь лучше</h3>
				<h2>Изысканные бриллианты</h2>
		
			</li>
			<li class="purple" style="background-image: url(images/01.jpg)">
				<h3>Она скажет “да”</h3>
				<h2>обручальное кольцо</h2>
				
			</li>
			<li class="yellow" style="background-image: url(images/02.jpg)">
				<h3>Вы достойны красоты</h3>
				<h2>золотые браслеты</h2>
				
			</li>
		</ul>
	</div>
	<!-- / body -->

	<div id="body">
		<div class="container">
			<div class="last-products">
				
				<section class="products" id="lastProducts" >
		
					<!-- Сюда выведутся товары из ЮД-->
				</section>
			
		</div>
			
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<footer id="footer">
		<div class="container">
			<div class="cols">
				<div class="col">
					<h3>Часто задаваемые вопросы</h3>
					<ul>
						<li><a href="#">Как определить размер кольца? </a></li>
						<li><a href="#">Возврат, обмен </a></li>
						<li><a href="#">Доставка и оплата </a></li>
						<li><a href="#">Гарантийное обслуживание </a></li>
						<li><a href="#">Украшение на заказ </a></li>
					</ul>
				</div>
				<div class="col media">
					<h3>Социальные сети</h3>
					<ul class="social">
						<li><a href="#"><span class="ico ico-fb"></span>Facebook</a></li>
						<li><a href="#"><span class="ico ico-tw"></span>Twitter</a></li>
						<li><a href="#"><span class="ico ico-gp"></span>Google+</a></li>
						<li><a href="#"><span class="ico ico-pi"></span>Pinterest</a></li>
					</ul>
				</div>
				<div class="col contact">
					<h3>Связаться с нами</h3>
					<p>Клеопатра INC.<br>54233 Avenue Street<br>New York</p>
					<p><span class="ico ico-em"></span><a href="#">contact@kleopatra.com</a></p>
					<p><span class="ico ico-ph"></span>(590) 423 446 924</p>
				</div>
				<div class="col newsletter">
					<h3>Подпишись на нашу рассылку</h3>
				
					<form action="#">
						<input type="text" placeholder="Ваш адрес электронной почты...">
						<button type="submit"></button>
					</form>
				</div>
			</div>
			<p class="copy">Авторские Ювелирные Украшения 2017. Все права защищены.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->


	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
