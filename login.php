<?php
//Запуск сессий;
session_start();

if (isset($_POST['login']) && isset($_POST['password']))
{
	// получаем данные из формы с авторизацией
	$login = $_POST['login'];
	$parolFromDB = '';
	$mysqli = new mysqli('localhost', 'baturina', '0000', 'kp_baturina');
		
	$query = "set names utf8";
	$mysqli->query($query);
	
	$query = "select * from Polzovateli where login='".$login."'";
	$results = $mysqli->query($query);
	$i =0;
	while($row = $results->fetch_assoc()){
		$parolFromDB = $row["parol"];	
		$i++;
	}
	
	
	if ($i == 0){
		echo 'Логин указан неверно';
		exit;
	}
	
	$password = $_POST['password'];
	
	
	if ($password == ''){
		echo 'Грязный хак не удался';
		exit;
	}
	
	//проверка пароля и логина
	if ($password == $parolFromDB){
		echo ("логин совпадает и пароль верны");
		$_SESSION['Name']=$login;
		// идем на страницу для авторизованного пользователя
		header("Location: secret.php");
	}
	else{
		die('Пароль указан неверно');
	}
}
?>