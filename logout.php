<?php
session_start();
unset($_SESSION['Name']); // разрегистрировали переменную
unset($_SESSION['cart']); // разрегистрировали переменную
session_destroy(); 
header("Location: lichcab.php");
?>