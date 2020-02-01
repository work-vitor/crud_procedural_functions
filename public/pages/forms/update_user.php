<?php  

require "../../../bootstrap.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isEmpty()) {
	
	flash('message','Prencha todos os campos!');

	return redireect("edit_user&id=".$id);

}

$validate = validate([

	'name' => 's',
	'sobrenome' => 's',
	'email' => 'e',
	//'password' => 's',

]);



$atualizado = update('users', $validate, ['id', $id]);


if ($atualizado) {
	flash('message', 'Atualizado com sucesso!', 'success');

	return redireect('edit_user&id='.$id);
}

flash('message', 'Erro ao atualizar!');

redireect('edit_user&id='.$id);

?>