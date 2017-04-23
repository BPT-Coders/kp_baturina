function toReg(){
	// Считываем значения из полей
	var login = $('#login').val();
	var pass = $('#pass').val();
	var confPass = $('#confPass').val();
	var fio = $('#fio').val();
	
	//Проверям подтверждение пароля
	if (pass == confPass){
		// Если пароли совпадают - пишем в БД
		alert('Ок');
		$.ajax({
			async: false,			
			type: "POST",
			url: "./ajax/reg.php",
			dataType:"text",
			data: 'login=' + login + '&pass=' + pass + '&fio=' + fio,
			error: function () {	
				alert( "Не смог" );
			},
			success: function (response) {
				// Если запись прошла успешно - сообщаем пользователю и очищаем форму
				alert('Зарегистрировался ' + login);
				$('#login').val('');
				$('#pass').val('');
				$('#confPass').val('');
			    $('#fio').val('');
			}
		});
	}
	else{
		// Если пароли не совпадают - выводим ошибку
		alert('Bad');
	}
}