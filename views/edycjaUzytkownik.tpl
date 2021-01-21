<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleEdycjaUzytkownik.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - edycja użytkownika</title>
</head>

<body>

	<header>
		{include file='navBarLogged.tpl'}
    </header>


    <main>
        <div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-9 col-sm-12 m-auto">
                    <div class="oknoProfilu">

                        <div class="profilUzytkownika">Edycja profilu <u>innego</u> użytkownika</div>
                        <div class="status">{if isset($noweDaneZapisane)}{$noweDaneZapisane}{/if}</div>
                        <div class="statusError">{if isset($noweDaneNieZapisane)}{$noweDaneNieZapisane}{/if}</div>
                        <div class="statusError">{if isset($brakUzytkownikaId)}{$brakUzytkownikaId}{/if}</div>
                        
                        {if !isset($brakUzytkownikaId)}
                            <form method="post">
                                <!-- ID -->
                                <div class="IDEdycja" name="id">{if isset($id)}ID: {$id}{/if}</div>
                                
                                <!-- Mail input -->
                                <input type="text" placeholder="Login" value="{if isset($edycjaDanych_login)}{$edycjaDanych_login}{elseif isset($login)}{$login}{/if}" name="login"/>
                                <div class="error">
                                {if isset($e_login)} {$e_login} {/if}
                                </div>

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
                                <input type="number" placeholder ="Wiek" value ="{if isset($edycjaDanych_wiek)}{$edycjaDanych_wiek}{elseif isset($wiek)}{$wiek}{/if}" name="wiek"/>
                                <div class="error">
                                {if isset($e_wiek)} {$e_wiek} {/if}
                                </div>

                                <div class="ostrzezenia">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-5 px-0 ostrzezeniaText">Ostrzeżenia ({if isset($ostrzezenia)}{$ostrzezenia}{/if}):</div>
                                            
                                            <div class="col-sm-4 col-lg-3 px-0 my-auto">
                                                <select name="ostrzezenia" class="ostrzezeniaDropDown" id="ostrzezenieWybor" onchange=" document.getElementById('ostrzezenieWybor').value=this.options[this.selectedIndex].value">
                                                    <option value="0" {if isset($edycjaDanych_ostrzezenia)}{if $edycjaDanych_ostrzezenia==0}selected{/if}{elseif isset($ostrzezenia)}{if $ostrzezenia==0}selected{/if}{/if}>0</option>
                                                    <option value="1" {if isset($edycjaDanych_ostrzezenia)}{if $edycjaDanych_ostrzezenia==1}selected{/if}{elseif isset($ostrzezenia)}{if $ostrzezenia==1}selected{/if}{/if}>1</option>
                                                    <option value="2" {if isset($edycjaDanych_ostrzezenia)}{if $edycjaDanych_ostrzezenia==2}selected{/if}{elseif isset($ostrzezenia)}{if $ostrzezenia==2}selected{/if}{/if}>2</option>
                                                    <option value="3" {if isset($edycjaDanych_ostrzezenia)}{if $edycjaDanych_ostrzezenia==3}selected{/if}{elseif isset($ostrzezenia)}{if $ostrzezenia==3}selected{/if}{/if}>3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="funkcja">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-5 px-0 funkcjaText">Funkcja ({if isset($funkcjaText)}{$funkcjaText}{/if}):</div>
                                            
                                            <div class="col-sm-4 col-lg-3 px-0 my-auto">
                                                <select name="funkcja" class="ostrzezeniaDropDown" id="funkcjaWybor" onchange=" document.getElementById('funkcjaWybor').value=this.options[this.selectedIndex].value">
                                                    <option value="1" {if isset($edycjaDanych_funkcja)}{if $edycjaDanych_funkcja==1}selected{/if}{elseif isset($funkcja)}{if $funkcja==1}selected{/if}{/if}>Użytkownik</option>
                                                    <option value="3" {if isset($edycjaDanych_funkcja)}{if $edycjaDanych_funkcja==3}selected{/if}{elseif isset($funkcja)}{if $funkcja==3}selected{/if}{/if}>Moderator</option>
                                                    <option value="4" {if isset($edycjaDanych_funkcja)}{if $edycjaDanych_funkcja==4}selected{/if}{elseif isset($funkcja)}{if $funkcja==4}selected{/if}{/if}>SuperAdmin</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="zmianaHaslaInfo">Zmiana hasła</div>

                                <!-- Password input -->
                                <input type="password" placeholder="Nowe hasło" value="{if isset($edycjaDanych_haslo1)}{$edycjaDanych_haslo1}{/if}" name="haslo1"/>
                                <div class="error">
                                {if isset($e_haslo)} {$e_haslo} {/if}
                                </div>
                                
                                <!-- Password repeat input -->
                                <input type="password" placeholder ="Powtórz nowe hasło" value ="{if isset($edycjaDanych_haslo2)}{$edycjaDanych_haslo2}{/if}" name="haslo2"/>
                                <div class="error">
                                {if isset($e_haslo2)} {$e_haslo2} {/if}
                                </div>

                                <div class="potwierdzInfo">Potwierdź</div>

                                <!-- Admin password input -->
                                <input type="password" placeholder ="Twoje hasło (SuperAdmin lub moderator)" name="hasloAdmin"/>
                                <div class="error">
                                {if isset($e_hasloAdmin)} {$e_hasloAdmin} {/if}
                                </div>

                                <!-- Save button  -->
                                <input type="submit" value="Zapisz" name="zapiszDane"/>
                            </form> 
                        {/if}
                        <form  action="uzytkownicy.php" method="post">
                            <!-- Cancel button  -->
                            <input type="submit" value="Wróc" name="anulujZapiszDane"/>
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