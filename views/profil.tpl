<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="stylesheet" href="style_CSS/styleProfil.css">
	<title>Ciekawostki IT - profil użytkownika</title>

</head>

<body>
	
    {if isset($test)}{$test}{/if}
    
    
    
	<div class="oknoProfilu">
    {if !isset($edytujDane)}    
		<div class="profilUzytkownika">Profil użytkownika</div>
            
        <table>
            <tr>
                <th>Login:</th>
                <td>{if isset($login)}{$login}{/if}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{if isset($email)}{$email}{/if}</td>
            </tr>
            <tr>
                <th>Imię:</th>
                <td>{if isset($imie)}{$imie}{/if}</td>
            </tr>
            <tr>
                <th>Nazwisko:</th>
                <td>{if isset($nazwisko)}{$nazwisko}{/if}</td>
            </tr>
            <tr>
                <th>Wiek:</th>
                <td>{if isset($wiek)}{$wiek}{/if}</td>
            </tr>
        </table>

        <div class="status">{if isset($noweDaneZapisane)}{$noweDaneZapisane}{/if}</div>


        <form  method="post">
            <!-- Edit button  -->
            <input type="submit" value="Edytuj dane" name="edytujDane"/>
            <!-- Logout button  -->
            <input type="submit" value="Wyloguj" name="wyloguj"/>
		</form>

    {else}

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
			<input type="checkbox" name="regulamin" {if isset($edycjaDanych_regulamin)}{$edycjaDanych_regulamin}{/if}/>Akceptuje <a href='regulamin.php' target="blank">regulamin.</a>
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

        <form  method="post">
            <!-- Cancel button  -->
            <input type="submit" value="Anuluj" name="anulujZapiszDane"/>
		</form>
    
    {/if}
	</div>
			
</body>
</html>