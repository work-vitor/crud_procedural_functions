<?php

require "../../../bootstrap.php";

if (isEmpty()) {
	
	flash('message','Prencha todos os campos!');

	return redireect("contato");

}

$validate = validate([

	'name' => 's',
	'email' => 'e',
	'subject' => 's',
	'message' => 's',

]);

$data = [

	'quem' => $validate->email,

	'para' => 'joa.fggf3.27@gmail.com',

	'mensagem' => $validate->message,

	'assunto' => $validate->subject,

];

if (send($data)){
	flash('message', 'Email enviado com sucesso', 'sucess');

	return redireect("contato");
}