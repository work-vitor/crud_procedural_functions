<?php

$user = find('users', 'id', $_GET['id']);

?>

<form method="POST" action="/pages/forms/update_user.php" role="form">
	
	<div class="form-group">
		<?=get('message')?>
	</div>


	<div class="form-group">
		<label for="">Nome:</label>
		<input type="text" name="name" class="form-control" placeholder="Seu Nome:" value="<?=$user->name?>">
	</div>

	<input type="hidden" name="id" value="<?=$user->id?>">
	
	<div class="form-group">
		<label for="">Sobrenome:</label>
		<input type="text" name="sobrenome" class="form-control" placeholder="Seu Sobrenome:"
		value="<?=$user->sobrenome?>">
	</div>

	<div class="form-group">
		<label for="">E-mail:</label>
		<input type="email" name="email" class="form-control" placeholder="Seu E-mail:" value="<?=$user->email?>">
	</div>


	<button type="submit" class="btn btn-primary">Atualizar</button>
</form>