

<form method="POST" action="/pages/forms/create_user.php" role="form">
	
	<div class="form-group">
		<?=get('message')?>
	</div>


	<div class="form-group">
		<label for="">Nome:</label>
		<input type="text" name="name" class="form-control" placeholder="Seu Nome:">
	</div>
	
	<div class="form-group">
		<label for="">Sobrenome:</label>
		<input type="text" name="sobrenome" class="form-control" placeholder="Seu Sobrenome:">
	</div>

	<div class="form-group">
		<label for="">E-mail:</label>
		<input type="email" name="email" class="form-control" placeholder="Seu E-mail:">
	</div>

	<div class="form-group">
		<label for="">Senha:</label>
		<input type="password" name="password" class="form-control" placeholder="Sua Senha:">
	</div>


	<button type="submit" class="btn btn-primary">Enviar</button>
</form>