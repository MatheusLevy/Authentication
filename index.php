<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Authentication</title>
</head>
<body>
	<?php

	if(!isset($_SESSION['login'])){
		//SESSION is not set

		//Authentication
		if(isset($_POST['action'])){
			$username = 'levy';
			$password = '123';

			$usernameForm = $_POST['username'] ;
			$passwordForm = $_POST['password'];

			if($username == $usernameForm && $password == $passwordForm){
				//Logado com sucesso
				$_SESSION['login'] = $username;
				header('Location: index.php');
			}else{
				echo "Dados invalidos";
			}
		}

		include('authentication.php');
	}else{
		//SESSION is set
		if(isset($_GET['logout'])){
			unset($_SESSION['login']);
			session_destroy();
			header('Location: index.php');
		}
		include('home.php');
	}


	?>
</body>
</html>