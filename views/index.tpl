
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - logowanie</title>
	
</head>

<body>

	<header>

		<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
		
			<a class="navbar-brand" href="index.php"><img src="img/logo.png" width="30" height="30" class="d-inline-block mr-2 align-bottom" alt="">Ciekawostki.it</a>
		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Włącznik paska nawigacji">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="mainmenu">
			
				<ul class="navbar-nav mr-auto">
				
					<li class="nav-item active mr-2">
						<a class="nav-link" href="index.php"> Start </a>
					</li>
					
					<li class="nav-item mr-2">
						<a class="nav-link" href="rejestracja.php"> Rejestracja </a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="regulamin.php"> Regulamin </a>
					</li>
				
				</ul>
			
			</div>
		
		</nav>
	
	</header>

	<main class="oknoLogowania" >
	
		<form action="zaloguj.php" method="post">

			<div class="zaloguj">Zaloguj się!</div>
			<div class="zalogujOpis">Poznawaj ciekawostki z branży IT za darmo !</div>


			<input type="text" placeholder="Login" name="login" /> 
			<input type="password" placeholder ="Hasło" name="haslo"/> 

			<div class="bladLogowanie">
                {if isset($bladLogowanie)} {$bladLogowanie} {/if}
			</div>

			<input type="submit" value="Zaloguj się" />
		</form>

		<div class="rejestracjaLink">
			<a href="rejestracja.php" >Rejestracja - załóż darmowe konto!</a>
		</div>

	
	</main>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>