<!DOCTYPE html>
<html>
<head>
	<title>creation de pass</title>
	<style>
		body{
			background: url("77.gif") no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>
	
	<center> <form method="post" action="#">
		<h1>bienvenue remplissez svp</h1>
		login:<input type="text" name="login" placeholder="login"></br>
		profil  <select name="profil" value="profil" >
			<option value="user">user</option>
			<option value="admin">admin</option>
		</select></br>
		<input type="submit" name="creer" value="creer">
	</form></center>
	<?php
	if(isset($_POST['creer']) && isset($_POST['login']) && isset($_POST['profil']))
	{
		extract($_POST);
		$f=fopen("babacar5.txt","a+");
		function Genere_Password($size)
		{
			$characters = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
			$password='';
			for($i=0;$i<$size;$i++)
			{
				$password .= ($i%2) ? strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];
			}
				
			return $password;
		}
		
		$password = Genere_Password(5);
		$fin="\r\n";
		fputs($f, $login.'-'.$profil.'-'.$password.'-'.$fin);
		echo $login.'-'.$password.'-'.$profil;
	}
	






?>

   