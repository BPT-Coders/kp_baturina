<?php
$mysqli = new mysqli('localhost', 'baturina', '0000', 'kp_baturina');
	
$query = "set names utf8";
$mysqli->query($query);

$idProduct = $_POST["idProduct"];

$query = "select * from Tovar where id= $idProduct";
$results = $mysqli->query($query);
while($row = $results->fetch_assoc()){
echo '
					<div class="image">
						<img src="'.$row["izobrazhenie"].'" alt="">
					</div>
					<div class="details">
						<h1>'.$row["nazvanie"].'</h1>
						<h4>'.$row["cena"].'</h4>
						
						<div class="entry">
							
							<div class="tabs">
								<h3>Описание</h3>
								<div class="tab-content active" id="desc">
									<p>'.$row["Opisanie"].'</p>
								</div>
								<div class="entry">
							
				        </div>
						</div>
						<div class="actions">
							<label>Количество</label>
							<input type="number" min="1" max="10" id="numToCart">
							
							<input type="button" class="btn-add" onClick="addToCart('.$row["id"].', 0)" value="Добавить в корзину">
						</div>
			
			<div id="comments">';
			
			// Вывод первых 3 ком
				$queryCom = "select Polzovateli.FIO, Otzuvu.text  from Otzuvu JOIN Polzovateli on Otzuvu.idpolzovatel = Polzovateli.id  where idtovara = $idProduct limit 3";
				$comments = $mysqli->query($queryCom);
				while($comment = $comments->fetch_assoc()){
					echo '<h3>'.$comment["FIO"].'</h3><p>'.$comment["text"].'</p>';
				}
			
				// Вывод остальных коме
				// Вывод первых 3 ком
				
				$queryCom = "select Polzovateli.FIO, Otzuvu.text  from Otzuvu JOIN Polzovateli on Otzuvu.idpolzovatel = Polzovateli.id  where idtovara = $idProduct limit 3, 1000";
				$comments = $mysqli->query($queryCom);
				if ($comments->num_rows > 0){
					echo '<h3 onClick="showCom()" style="cursor: pointer;" id="HhideCom">Показать остальные</h3>';
					echo '<div id="hideCom" hidden>';
					while($comment = $comments->fetch_assoc()){
						echo '<h3>'.$comment["FIO"].'</h3><p>'.$comment["text"].'</p>';
					}
					echo '</div>';
				}
			echo '</div>';
			
			session_start();
	if (isset($_SESSION['Name']))
	{
		// Брать из сессии авторизованного пользователя
		$idPolzovatel;
		$log = $_SESSION['Name'];
		$query = "select id from Polzovateli where login = '$log'";
		$res = $mysqli->query($query);
			while($row = $res->fetch_assoc()){
				$idPolzovatel = $row["id"];
			}
		
		echo '
			<form>
			  <p>
			    <label>Ваш отзыв:</label>
			    <br />
			    <textarea id="textComment" cols="40" rows="8"></textarea>
			  </p>
			  <p>
			    <input type="hidden" id="idProduct" value="'.$idProduct.'" />
				<input type="hidden" id="idPolzovatel" value="'.$idPolzovatel.'" />
			    <input type="button" value="Отправить" onClick="sendComment()"/>
						
			  </p>
			</form>
								</div>
			';
	}
	else{
		echo 'Зайдите под своим логином чтобы оставить отзыв';
	}
};
			



?>