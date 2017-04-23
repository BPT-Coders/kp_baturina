function onLoad(){
	showMenu();
	showRecTovars();
}

function showCom(){
	$('#hideCom').attr("hidden", false);
	$('#HhideCom').attr("hidden", true);
}

function sendComment(){
	var textComment = $('#textComment').val();
	var idProduct = $('#idProduct').val();
	var idPolzovatel = $('#idPolzovatel').val();
	$.ajax({
			async: false,
			type: "POST",
			url: "ajax/addComment.php",
			dataType:"text",
			data: 'textComment=' + textComment + '&idProduct=' + idProduct + '&idPolzovatel=' + idPolzovatel,
			error: function () {	
				alert( "Произошла ошибка при добавлении отзыва" );
			},
			success: function (response) {
				showTovar(idProduct);
			}
		});
}

function showTovar(idProduct){
	$.ajax({
			async: false,
			type: "POST",
			url: "ajax/showTovar.php",
			dataType:"text",
			data: 'idProduct=' + idProduct,
			error: function () {	
				alert( "Произошла ошибка при добавлении товара" );
			},
			success: function (response) {
				$('#productInfo').html(response);
			}
		});	
}

function showTovarsOnCat(idCat){
	$.ajax({
			async: false,
			type: "POST",
			url: "ajax/showTovarsOnCat.php",
			dataType:"text",
			data: 'idCat=' + idCat,
			error: function () {	
				alert( "Произошла ошибка при добавлении товара" );
			},
			success: function (response) {
				$('#products').html(response);
			}
		});	
}

function showMenu(){
	$.ajax({
			async: false,
			type: "POST",
			url: "ajax/menu.php",
			dataType:"text",
			error: function () {	
				alert( "Произошла ошибка при добавлении товара" );
			},
			success: function (response) {
				$('#myMenu').html(response);
			}
		});	
}

function showRecTovars(){
	$.ajax({
			async: false,
			type: "POST",
			url: "ajax/showTovars.php",
			dataType:"text",
			error: function () {	
				alert( "Произошла ошибка при добавлении товара" );
			},
			success: function (response) {
				$('#lastProducts').html(response);
			}
		});	
}
function showCart(){
	$.ajax({
			async: false,
			type: "POST",
			url: "ajax/showCart.php",
			dataType:"text",
			error: function () {	
				alert( "Произошла ошибка при добавлении товара" );
			},
			success: function (response) {
				$('#myCart').html(response);
			}
		});	
}

function addToCart(id){
	$.ajax({
			async: false,			
			type: "POST",
			url: "./ajax/addToCart.php",
			dataType:"text",
			data: 'id=' + id,
			error: function () {	
				alert( "Не смог" );
			},
			success: function (response) {
				alert('Добавили ' + id);
				//showMenu();
			}
	});
}