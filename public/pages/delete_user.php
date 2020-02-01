<?php 

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$deletado = delete('users', 'id', $id);

if ($deletado) {
	return redireectToHome();
}

flash('message','Erro ao deletar');

redireectToHome();