<?php
	session_start();
	if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']=true))
	{
		header('Location: profil.php');
		exit();
	}	
	
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="stylesheet" href="style_CSS/style.css">
	<title>Ciekawostki IT - logowanie</title>
	
</head>

<body>
	<div class="oknoLogowania">
		<form action="zaloguj.php" method="post">
					
			<div class="zaloguj">Zaloguj się!</div>
			<div class="zalogujOpis">Poznawaj ciekawostki z branży IT za darmo !</div>
					
				
			<input type="text" placeholder="Login" name="login" /> 
			<input type="password" placeholder ="Hasło" name="haslo"/> 
			

			<input type="submit" value="Zaloguj się" />
		</form>
		
		<div class="rejestracjaLink">
			<a href="rejestracja.php" >Rejestracja - załóż darmowe konto!</a>
		</div>
		<?php
		if(isset($_SESSION['blad']))
			echo $_SESSION['blad'];
		?>
	</div>

</body>
</html>