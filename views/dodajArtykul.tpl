<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleDodajArtykul.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - dodaj artykuł</title>
</head>

<body>

	<header>
		{include file='navBarLogged.tpl'}
    </header>


    <main>
        <div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-9 col-sm-12 m-auto">
                    <div class="oknoDodajArtykul">
                        <div class="dodajArtykul">Dodawanie artykułu</div>

                        <div class="status">{if isset($artykulDodanoPoprawnie)}{$artykulDodanoPoprawnie}{/if}</div>
                        
    
                            <form method="post">
                            
                            <div class="artykulTytulInfo">Tytuł</div>
                            <!-- Title input -->
                            <input type="text" placeholder="Tytuł artykułu" value="{if isset($artykulTytulZap)}{$artykulTytulZap}{/if}" name="artykulTytul"/>
                            
                            <div class="error">
                                {if isset($e_tytul)} {$e_tytul} {/if}
                            </div>

                            <div class="artykulTextInfo">Tekst</div>
                            <!-- Text input -->
                            <textarea class="scrollabletextbox" placeholder="Tekst artykułu" name="artykulText">{if isset($artykulTextZap)}{$artykulTextZap}{/if}</textarea>

                            <div class="error">
                                {if isset($e_text)} {$e_text} {/if}
                            </div>
                        
                            <div class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        {* Added by text *}
                                        <div class="col-sm-5 col-md-4 col-lg-3 px-0">
                                            <div class="autorInfo">Autor: </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="autorDane">{if isset($login)}{$login}{/if}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Save button  -->
                            <input type="submit" value="Zapisz" name="zapiszDodajArtykul"/>
                            </form> 
                        
                            <form  action="index.php" method="post">
                            <!-- Cancel button  -->
                            <input type="submit" value="Anuluj" name="anulujDodajArtykul"/>
                        </form>
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