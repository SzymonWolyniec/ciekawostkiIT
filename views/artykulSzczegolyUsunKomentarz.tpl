
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleArtykulSzczegolyUsunKomentarz.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - usuń komentarz</title>
	
</head>

<body>

	<header>
	{include file='navBarLogged.tpl'}
	</header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-6 col-md-8 col-sm-9 m-auto ">
					<div class="oknoUsunKomentarz">

						<div class="statusError">{if isset($brakKomentarzaId)}{$brakKomentarzaId}{/if}</div>

						{if !isset($brakKomentarzaId)}
							<form  method="post">

								

								<div class="usunKomentarz">Czy na pewno chcesz usunąć komentarz?</div>
								<div class="usunKomentarzOpis">Ta operacja jest <u>nieodwracalna</u>!</div>

								{if isset($moznaKasowac)}
								
									<input type="submit" value="Tak" name="usunKomentarz"/>
								{/if}
							</form>

							<form  action="artykulSzczegoly.php" method="get">
								<Button type="submit" value="{$artykulId}" name="id">
									Nie
								</Button>
							</form>

						{/if}
						{if isset($brakKomentarzaId)}
							<form  action="artykuly.php" method="post">
								<input type="submit" value="Wróc"/>
							</form>
						{/if}
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