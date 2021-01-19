<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleProfil.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<title>Ciekawostki IT - profil użytkownika</title>

</head>

<body>
    
    <header>
        {include file='navBarLogged.tpl'}
    </header>
	
    
    
	<main>
        {if !isset($edytujDane)}    

		<div class="container">
			<div class="row">
				<div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 m-auto">
                    <div class="oknoProfilu">
                        <div class="profilUzytkownika">Profil użytkownika</div>
                            
                        <div class="container">

                            <div class="row">
                                {* Login *}
                                <div class="col-sm-4 col-md-3 col-lg-2 offset-md-2 offset-lg-3">
                                <div class="profilInfo">Login:</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profilDane">{if isset($login)}{$login}{/if}</div>
                                </div>
                            </div>


                            <div class="row">
                                {* Email *}
                                <div class="col-sm-4 col-md-3 col-lg-2 offset-md-2 offset-lg-3">
                                <div class="profilInfo">Email:</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profilDane">{if isset($email)}{$email}{/if}</div>
                                </div>
                            </div>


                            <div class="row">
                                {* Imię *}
                                <div class="col-sm-4 col-md-3 col-lg-2 offset-md-2 offset-lg-3">
                                <div class="profilInfo">Imię:</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profilDane">{if isset($imie)}{$imie}{/if}</div>
                                </div>
                            </div>


                            <div class="row">
                                {* Nazwisko *}
                                <div class="col-sm-4 col-md-3 col-lg-2 offset-md-2 offset-lg-3">
                                <div class="profilInfo">Nazwisko:</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profilDane">{if isset($nazwisko)}{$nazwisko}{/if}</div>
                                </div>


                            </div>
                            <div class="row">
                                {* Wiek *}
                                <div class="col-sm-4 col-md-3 col-lg-2 offset-md-2 offset-lg-3">
                                <div class="profilInfo">Wiek:</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profilDane">{if isset($wiek)}{$wiek}{/if}</div>
                                </div>
                            </div>

                            <div class="row">
                                {* Wiek *}
                                <div class="col-sm-4 col-md-3 col-lg-2 offset-md-2 offset-lg-3">
                                <div class="profilInfo">Funkcja:</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profilDane">{if isset($funkcja)}{$funkcja}{/if}</div>
                                </div>
                            </div>
                        </div>

                        <div class="status">{if isset($noweDaneZapisane)}{$noweDaneZapisane}{/if}</div>


                        <form  method="get">
                            <!-- Edit button  -->
                            <input type="submit" value="Edytuj dane" name="edytujDane"/>
                            <!-- Logout button  -->
                            <input type="submit" value="Wyloguj" name="wyloguj"/>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        {else}

        <div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-9 col-sm-12 m-auto">
                    <div class="oknoProfilu">

                            <div class="profilUzytkownika">Edycja profilu użytkownika</div>
                            <form method="post">
                                <!-- Login input -->
                                <div class="loginEdycja">{if isset($login)}{$login}{/if}</div>
                                

                                <!-- Mail input -->
                                <input type="text" placeholder="E-mail" value="{if isset($edycjaDanych_email)}{$edycjaDanych_email}{elseif isset($email)}{$email}{/if}" name="email"/>

                                <div class="error">
                                {if isset($e_email)} {$e_email} {/if}
                                </div>
                                
                                <!-- Name input -->
                                <input type="text" placeholder ="Imię" value ="{if isset($edycjaDanych_imie)}{$edycjaDanych_imie}{elseif isset($imie)}{$imie}{/if}" name="imie"/>
                                
                                <div class="error">
                                {if isset($e_imie)} {$e_imie} {/if}
                                </div>
                                    
                                <!-- Surname input -->
                                <input type="text" placeholder ="Nazwisko" value ="{if isset($edycjaDanych_nazwisko)}{$edycjaDanych_nazwisko}{elseif isset($nazwisko)}{$nazwisko}{/if}" name="nazwisko"/>
                                
                                <div class="error">
                                {if isset($e_nazwisko)} {$e_nazwisko} {/if}
                                </div>

                                <!-- Age input -->
                                <input type="number" placeholder ="Wiek" min="1" max="120" value ="{if isset($edycjaDanych_wiek)}{$edycjaDanych_wiek}{elseif isset($wiek)}{$wiek}{/if}" name="wiek"/>
                                <div class="error">
                                {if isset($e_wiek)} {$e_wiek} {/if}
                                </div>

                                <div class="zmianaHaslaInfo">Zmiana hasła</div>

                                <!-- Password input -->
                                <input type="password" placeholder="Nowe hasło" value="{if isset($edycjaDanych_haslo1)}{$edycjaDanych_haslo1}{/if}" name="haslo1"/>
                                
                                <div class="error">
                                {if isset($e_haslo)} {$e_haslo} {/if}
                                </div>
                                
                                <!-- Password repeat input -->
                                <input type="password" placeholder ="Powtórz nowe hasło" value ="{if isset($edycjaDanych_haslo2)}{$edycjaDanych_haslo2}{/if}" name="haslo2"/>
                                

                                <!-- Regulamin -->
                                <label class="regulamin">
                                <input type="checkbox" name="regulamin" {if isset($edycjaDanych_regulamin)}{$edycjaDanych_regulamin}{/if}/> Akceptuje <a href='regulamin.php' target="blank">regulamin.</a>
                                </label>
                                <div class="error">
                                {if isset($e_regulaminCheck)} {$e_regulaminCheck} {/if}
                                </div>

                                <!-- Curren password input -->
                                <input type="password" placeholder ="Obecne hasło" name="hasloOld"/>
                                <div class="error">
                                {if isset($e_hasloOld)} {$e_hasloOld} {/if}
                                </div>

                                <!-- Save button  -->
                                <input type="submit" value="Zapisz" name="zapiszDane"/>
                            </form> 

                            <form  action="profil.php" method="post">
                                <!-- Cancel button  -->
                                <input type="submit" value="Anuluj" name="anulujZapiszDane"/>
                            </form>
                        </diV>
                    </diV>
                </diV>
            </diV>

        {/if}       
	</main>
	
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>