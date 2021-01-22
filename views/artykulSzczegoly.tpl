<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleArtykulSzczegoly.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - artykuł</title>
</head>

<body>

	<header>
		{include file='navBarLogged.tpl'}
    </header>


    <main>
        <div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-10 col-sm-12 m-auto">
                    <div class="oknoArtykul">

						{if !isset($brakArtykuluId)}
							{if isset($funkcjaNumer)}
								{if $funkcjaNumer==4 || $funkcjaNumer==3}
									<div class="container-fluid">
										<div class="row no-gutters">
											{* Edit Btn *}
											<div class="col-sm-12 editBtnContainer">
												<form  action="edycjaArtykul.php" method="get">
													<Button class="editBtn" type="submit" value="{if isset({$artykulId})}{$artykulId}{/if}" name="artykulId">
														<img src="./media/edit.png" width="30" height="30">
													</Button>
												</form>
											</div>
										</div>
									</div>	
								{/if}
							{/if}
						{/if}

						<div class="statusError">{if isset($brakArtykuluId)}{$brakArtykuluId}{/if}</div>
						<div class="status">{if isset($poprawnieDodanoKomentarz)}{$poprawnieDodanoKomentarz}{/if}</div>
						<div class="status">{if isset($poprawnieUsunietoKomentarz)}{$poprawnieUsunietoKomentarz}{/if}</div>
						

						{if !isset($brakArtykuluId)}

							<div class="container">
								<div class="row">
									<div class="col-sm-7 col-lg-8">
										<div class="artykulInfo">{if isset($artykulTytul)}{$artykulTytul}{/if}</div>
									</div>
									<div class="col-sm-5 col-lg-4">
											<img src="{$image}">
									</div>
								</div>
							</div>

							<div class="divider"></div>
							
							<div class="text">{if isset($artykulText)}{$artykulText}{/if}<br><br>~{if isset($artykulAutor)}{$artykulAutor}{/if}<div>

							<div class="divider"></div>
							
						{/if}
						<form  action="artykuly.php" method="post">
								<!-- Back button  -->
								<input type="submit" value="Wróć" name="wrocArtykul"/>
						</form>

						{if !isset($brakArtykuluId)}
							<form  action="artykulSzczegoly.php?id={if isset({$artykulId})}{$artykulId}{/if}" method="post">
								<div class="container">
									<div class="row">
										<div class="col-sm-10 col-md-8 offset-sm-1 offset-md-2">

											<div class="artykulDodajKomentarz">Dodaj komentarz:</div>

											<!-- Add comment title input -->
											<input type="text" class="dodajKomentarzInput" placeholder="Tytuł komentarza" value="{if isset($dodajKomentarzTytulZap)}{$dodajKomentarzTytulZap}{/if}" name="dodajKomentarzTytul"/>
											<div class="error">
												{if isset($e_komentarzTytul)} {$e_komentarzTytul} {/if}
											</div>

											<!-- Add comment text input -->
											<textarea class="scrollabletextbox" placeholder="Komentarz" name="dodajKomentarzText">{if isset($dodajKomentarzTextZap)}{$dodajKomentarzTextZap}{/if}</textarea>
											<div class="error">
												{if isset($e_komentarzText)} {$e_komentarzText} {/if}
											</div>

											<!-- Add comment button  -->
											<input type="submit" class="dodajKomentarzBtn" value="Dodaj" name="dodajKomentarz"/>
										</div>
									</div>
								</div>
							</form>

							<div class="artykulKomentarze">Komentarze ({if isset($artykulKomentarzeLiczba)}{$artykulKomentarzeLiczba}{/if}):</div>
							
							{if isset($komentarzeFromDB)}
								{foreach $komentarzeFromDB as $komentarz}

								

								{if isset($funkcjaNumer)}
									{if $funkcjaNumer==4 || $funkcjaNumer==3 || $userId==$komentarz.createByUserId}
										<div class="container-fluid">
											<div class="row no-gutters">
												{* Delete Btn *}
												<div class="col-sm-12 editBtnContainer">
													<form  action="artykulSzczegolyUsunKomentarz.php" method="get">
														<Button class="deleteBtn" type="submit" value="{$komentarz.id}" name="komentarzId">
															X
														</Button>
													</form>
												</div>
											</div>
										</div>
									{/if}	
								{/if}

									<div class="komentarzTytul">{$komentarz.title}</div>
									<div class="komentarzText">{$komentarz.text} <br> ~{$komentarz.autor}</div>
									<div class="divider"></div>

								{/foreach}
							{/if}
						{/if}

						

						

                    </diV>
                </diV>
            </diV>
        </diV>    
    </main>
                            

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>