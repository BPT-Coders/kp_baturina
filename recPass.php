<?php
// Считываем логин
$login = $_POST["login"];
// Генерим новый пароль
$newPass = md5(date("YmdHis"));
$newPass = substr($newPass, 0, 8);
$tel;
$id;
// Находим пользователя по логину
$mysqli = new mysqli('localhost', 'baturina', '0000', 'kp_baturina');
$query = "set names utf8";
$mysqli->query($query);
$query = "select * from Polzovateli where login='".$login."'";
$results = $mysqli->query($query);
		
while($row = $results->fetch_assoc()){
	$tel = $row["tel"];
	$id = $row["id"];
}
// Обновляем пароль
$query = "UPDATE `kp_baturina`.`Polzovateli` SET `parol` = '".$newPass."' WHERE `Polzovateli`.`id` = $id";
$results = $mysqli->query($query);
echo 'Ваш пароль успешно изменен!';
// отправляем смс с паролом
//$body=file_get_contents("https://sms.ru/sms/send?api_id=24f8dacb-859a-8e04-3515-f1d7bd7c3ca8&to=7".$tel."&text=".$newPass."");
//echo $body;
?>