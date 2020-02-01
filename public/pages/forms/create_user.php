<?php  

require "../../../bootstrap.php";

if (isEmpty()) {
	
	flash('message','Prencha todos os campos!');

	return redireect("create_user");

}

$validate = validate([

	'name' => 's',
	'sobrenome' => 's',
	'email' => 'e',
	'password' => 's',

]);



$cadastrado = create('users', $validate);


if ($cadastrado) {
	flash('message', 'Cadastrado com sucesso!', 'success');

	return redireect('create_user');
}

flash('message', 'Erro ao cadastrar!');

redireect('create_user');

?>