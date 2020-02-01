<?php
	
	require "../bootstrap.php";

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Curso de PHP devclass</title>

	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="shortcut icon" href="assets/imagens/favicon.ico" />

</head>
<body>

	<div class="container">
		
		<?php

		try{
			require load();
		}catch(Exception $e){
			echo $e->getMessage();
		}
		?>

	</div>

</body>
</html>