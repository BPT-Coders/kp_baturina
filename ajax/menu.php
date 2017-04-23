<?php
$mysqli = new mysqli('localhost', 'baturina', '0000', 'kp_baturina');
	
$query = "set names utf8";
$mysqli->query($query);

$query = 'select * from Kategorii';
$results = $mysqli->query($query);
while($row = $results->fetch_assoc()){
	echo '<li><a href="cat.php?id='.$row["id"].'">'.$row["nazvanie"].'</a></li>';
					
}
?>