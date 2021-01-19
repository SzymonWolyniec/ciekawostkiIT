
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
	{include file='navBarStart.tpl'}
	</header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-6 col-md-8 col-sm-9 m-auto ">
					<div class="oknoLogowania">

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
					</div>	
				</div>
			</div>
		</div>
	</main>
	



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>