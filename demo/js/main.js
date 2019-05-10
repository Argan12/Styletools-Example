/*!
 * Styletools Demo JS
 * Styletools 1.4
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

function formValidation() {
	var firstname = $('#firstname').val();
	var lastname = $('#lastname').val();
	var mail = $('#mail').val();
	var object = $('#object').val();
	var msg = $('#message').val();
	
	if ((firstname == "") || (lastname == "") || (mail == "") || (object == "") || (msg == ""))
	{
		$('#firstname').css("border", "1px solid red");
		$('#lastname').css("border", "1px solid red");
		$('#mail').css("border", "1px solid red");
		$('#object').css("border", "1px solid red");
		$('#message').css("border", "1px solid red");
		
		return false;
	}
}