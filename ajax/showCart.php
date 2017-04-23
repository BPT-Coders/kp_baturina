 <?php
 session_start();
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
	$query = 'select * from Tovar where id = '.$cart[$i]["idProduct"].'';
	$results = $mysqli->query($query);
	$numProduct = $cart[$i]["numProduct"];
	while($row = $results->fetch_assoc()){
		$total = $row["cena"] * $cart[$i]["numProduct"];
		$sum = $sum + $total;
		echo'<tr>
	
	
							<td class="items">
								<div class="image">
									<img src="'.$row["izobrazhenie"].'" alt="">
								</div>
								<h3><a href="#">'.$row["nazvanie"].'</a></h3>
							</td>
							<td class="price">'.$row["cena"].' руб.</td>
							<td class="qnt">'.$cart[$i]["numProduct"].'</td>
							<td class="total">'.$total.'</td>
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