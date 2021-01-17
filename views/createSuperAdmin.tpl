<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="stylesheet" href="style_CSS/styleCreateSuperAdmin.css">
	<title>Ciekawostki IT - rejestracja SuperAdmina</title>

</head>

<body>
	
	<div class="oknoRejestracji">
					
		<form  method="post">
		
			<div class="rejestracja">Zarejestruj SuperAdmina</div>
            <div class="rejestracjaOpis">Stwórz pierwsze konto będące SuperAdminem</div>
            
            <!-- Login input -->
			<input type="text" placeholder="Login" value="{if isset($rejestracja_login)}{$rejestracja_login}{/if}" name="login"/>

            <div class="error">
			{if isset($e_login)} {$e_login} {/if}
            </div>

            <!-- Mail input -->
			<input type="text" placeholder="E-mail" value="{if isset($rejestracja_email)}{$rejestracja_email}{/if}" name="email"/>

			<div class="error">
			{if isset($e_email)} {$e_email} {/if}
            </div>
            
            <!-- Password input -->
			<input type="password" placeholder="Hasło" value="{if isset($rejestracja_haslo1)}{$rejestracja_haslo1}{/if}" name="haslo1"/>
			
            <div class="error">
			{if isset($e_haslo)} {$e_haslo} {/if}
            </div>
            
            <!-- Password repeat input -->
            <input type="password" placeholder ="Powtórz hasło" value ="{if isset($rejestracja_haslo2)}{$rejestracja_haslo2}{/if}" name="haslo2"/>
            
            <!-- Name input -->
			<input type="text" placeholder ="Imię" value ="{if isset($rejestracja_imie)}{$rejestracja_imie}{/if}" name="imie"/>
			
            <div class="error">
			{if isset($e_imie)} {$e_imie} {/if}
            </div>
                
            <!-- Surname input -->
			<input type="text" placeholder ="Nazwisko" value ="{if isset($rejestracja_nazwisko)}{$rejestracja_nazwisko}{/if}" name="nazwisko"/>
			
            <div class="error">
			{if isset($e_nazwisko)} {$e_nazwisko} {/if}
            </div>

            <!-- Age input -->
            <input type="number" placeholder ="Wiek" min="1" max="120" value ="{if isset($rejestracja_wiek)}{$rejestracja_wiek}{/if}" name="wiek"/>
			<div class="error">
			{if isset($e_wiek)} {$e_wiek} {/if}
            </div>



            <!-- Regulamin -->
			<label class="regulamin">
			<input type="checkbox" name="regulamin" {if isset($rejestracja_regulamin)}{$rejestracja_regulamin}{/if}/>Akceptuje <a href='regulamin.php' target="blank">regulamin.</a>
			</label>
			<div class="error">
			{if isset($e_regulaminCheck)} {$e_regulaminCheck} {/if}
            </div>
                
            <!-- Submit button  -->
			<input type="submit" value="Zarejestruj"/>
		</form>
	</div>
			
	

	
</body>
</html>