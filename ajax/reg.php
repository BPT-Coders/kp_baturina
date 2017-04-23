<?php
// Подключаемся к БД
$mysqli = new mysqli('localhost', 'baturina', '0000', 'kp_baturina');
$query = "set names utf8";
$mysqli->query($query);
// Считываем данные из JS
$login = $_POST["login"];
$pass = $_POST["pass"];
$fio = $_POST["fio"];

// Выполняем запись в БД
$query = "insert into Polzovateli (login, parol, FIO) values ('".$login."', '".$pass."', '".$fio."')";
$results = $mysqli->query($query);
?>