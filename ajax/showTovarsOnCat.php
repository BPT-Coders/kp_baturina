<?php
$mysqli = new mysqli('localhost', 'baturina', '0000', 'kp_baturina');
	
$query = "set names utf8";
$mysqli->query($query);

$idCat = $_POST["idCat"];

$query = "select * from Tovar where idkategorii = $idCat";
$results = $mysqli->query($query);
while($row = $results->fetch_assoc()){
echo '
<article>
							<a href="product.php?id='.$row["id"].'"><img src="'.$row["izobrazhenie"].'" alt=""></a>
							<h3><a href="product.php?id='.$row["id"].'">'.$row["nazvanie"].'</a></h3>
							<h4><a href="product.php?id='.$row["id"].'">'.$row["cena"].' руб.</a></h4>
							<input type="button" class="btn-add" onClick="addToCart('.$row["id"].')" value="Добавить в корзину">
						</article>
';
}
?>