<?php
// ������������ � ��
$mysqli = new mysqli('localhost', 'baturina', '0000', 'kp_baturina');
$query = "set names utf8";
$mysqli->query($query);
// ��������� ������ �� JS
$textComment = $_POST["textComment"];
$idProduct = $_POST["idProduct"];
$idPolzovatel = $_POST["idPolzovatel"];

// ��������� ������ � ��
$query = "insert into Otzuvu (text, idtovara, idpolzovatel) values ('".$textComment."', ".$idProduct.", ".$idPolzovatel.")";
$results = $mysqli->query($query);
echo $query;
?>