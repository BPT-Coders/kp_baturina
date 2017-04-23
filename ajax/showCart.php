<?php
session_start();
if (!(isset($_SESSION['cart']))){
	echo 'Корзина пуста';
	exit;
};
$cart = $_SESSION['cart'];
if (count($cart) == 0){
	echo 'Корзина пуста';
	exit;
}

$mysqli = new mysqli('localhost', 'baturina', '0000', 'kp_baturina');
$query = "set names utf8";
$mysqli->query($query);

echo '<table>';
	echo'<tr>
							<th class="items">Элементы</th>
							<th class="price">Цена</th>
							<th class="qnt">Количество</th>
							<th class="total">Итого</th>
							
						</tr>';

for ($i = 0; $i < count($cart); $i++){
	$query = 'select * from Tovar where id = '.$cart[$i]["nameProduct"].'';
	$results = $mysqli->query($query);
	
	while($row = $results->fetch_assoc()){
	echo'<tr>
	
	
							<td class="items">
								<div class="image">
									<img src="'.$row["izobrazhenie"].'" alt="">
								</div>
								<h3><a href="#">'.$row["nazvanie"].'</a></h3>
							</td>
							<td class="price">'.$row["cena"].' руб.</td>
							
						<td class="qnt"><label>1</label></td>
							<td class="total">'.$row["cena"].'</td>
						
						</tr>';
	}
	
	
}
echo '</table>';




