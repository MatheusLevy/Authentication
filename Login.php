<?php
	if(!isset($_SESSION['authenticated'])){
		header('Location: index.php');
	}
	echo '<h2>Bem-vindo '.$_SESSION['authenticated'].'</h2>';
	echo '<a href="?logout">Fazer Logout!</a>';
?>