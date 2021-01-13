<?php
	session_start();
	
	if(isset($_POST['email']))
	{
		
		$wszystko_Ok=true;
		$login =$_POST['login'];

		//Sprawdzanie długości loginu
		if((strlen($login)<3)||(strlen($login)>20))
		{ 
			$wszystko_Ok=false;
			$_SESSION['e_login']="Login musi posiadać od 3 do 20 znaków";
		}

		//Walidacja loginu
		if(ctype_alnum($login)==false)
		{ 
			$wszystko_Ok=false;
			$_SESSION['e_login']="Login może składać się tylko z liter i cyfr (bez polskich znaków)";
		}


		//Sprawdznie maila
		$email =$_POST['email'];
		$emailB =filter_var($email,FILTER_SANITIZE_EMAIL);
		if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false)||($emailB !=$email))
		{ 
			$wszystko_Ok=false;
			$_SESSION['e_email']="Podano niepoprawny adres email";
		}


		//Sprawdzanie hasla
		$haslo1=$_POST['haslo1'];
		$haslo2=$_POST['haslo2'];
		if((strlen($haslo1)<8)||(strlen($haslo1)>20))
		{ 
			$wszystko_Ok=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków";
		}

		if($haslo1!=$haslo2)
		{ 
			$wszystko_Ok=false;
			$_SESSION['e_haslo']="Podane hasła różnią się";
		}
		
		$h_haslo = password_hash($haslo1, PASSWORD_DEFAULT);
	
		$imie =$_POST['imie'];

		//Sprawdzanie długości imienia
		if((strlen($imie)<2)||(strlen($imie)>20))
		{ 
			$wszystko_Ok=false;
			$_SESSION['e_imie']="Imię musi posiadać od 2 do 20 znaków";
		}

		//Walidacja imienia
		if(ctype_alpha($imie)==false)
		{ 
			$wszystko_Ok=false;
			$_SESSION['e_imie']="Imię może składać się tylko z liter (bez polskich znaków)";
		}

		$nazwisko =$_POST['nazwisko'];

		//Sprawdzanie długości nazwiska
		if((strlen($nazwisko)<2)||(strlen($nazwisko)>20))
		{ 
			$wszystko_Ok=false;
			$_SESSION['e_nazwisko']="Nazwisko musi posiadać od 2 do 20 znaków";
		}

		//Walidacja nazwiska
		if(ctype_alpha($nazwisko)==false)
		{ 
			$wszystko_Ok=false;
			$_SESSION['e_nazwisko']="Nazwisko może składać się tylko z liter (bez polskich znaków)";
		}

		$wiek = $_POST['wiek'];

		//Sprawdzanie długości wieku (1-3 znaki)
		if((strlen($wiek)<1)||(strlen($wiek)>3))
		{ 
			$wszystko_Ok=false;
			$_SESSION['e_wiek']= "Podaj swój wiek";
		}

		// Sprawdzanie akceptacji regulaminu
		if(isset($_POST['regulamin'])==false)
		{ 
			$wszystko_Ok=false;
			$_SESSION['e_check']="Aby się zarejestrować konieczne jest zatwierdzenie regulaminu.";
		}

		

		// Zapamiętywanie wprowadzanych danych
		$_SESSION['rejestracja_login'] = $login;
		$_SESSION['rejestracja_email'] = $email;
		$_SESSION['rejestracja_haslo1'] = $haslo1;
		$_SESSION['rejestracja_haslo2'] = $haslo2;
		$_SESSION['rejestracja_imie'] = $imie;
		$_SESSION['rejestracja_nazwisko'] = $nazwisko;
		$_SESSION['rejestracja_wiek'] = $wiek;
		if(isset($_POST['regulamin'])) $_SESSION['rejestracja_regulamin'] = true;
		

		if($wszystko_Ok)
		{
			//Sprawdzenie czy dany uzytkownik już nie istnieje w BD
			require_once"connectBD.php";
			mysqli_report(MYSQLI_REPORT_STRICT);
			try
			{
				$polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
				
				if($polaczenie->connect_errno!=0)
				{
					throw new Exception(mysqli_connect_errno());
				}
				else
				{
					//sprawdzanie loginu - czy jest w bazie
					$login = htmlentities($login, ENT_QUOTES, "UTF-8");
					$rezultat=$polaczenie->query(sprintf("SELECT id FROM uzytkownik WHERE login='%s'",mysqli_real_escape_string($polaczenie,$login)));	
					if(!$rezultat) throw new Exception($polaczenie->error);
					$ile_login = $rezultat->num_rows;
					if($ile_login>0)
					{
						$wszystko_Ok=false;
						$_SESSION['e_login']="Istnieje już użytkownik o takim loginie.";
					}	
					

					//sprawdzanie maila - czy jest w bazie
					$email = htmlentities($email, ENT_QUOTES, "UTF-8");
					$rezultat=$polaczenie->query(sprintf("SELECT id FROM uzytkownik WHERE email='%s'",mysqli_real_escape_string($polaczenie,$email)));	
					if(!$rezultat) throw new Exception($polaczenie->error);
					$ile_email = $rezultat->num_rows;
					if($ile_email>0)
					{
						$wszystko_Ok=false;
						$_SESSION['e_email']="Istnieje już użytkownik o takim emailu.";
					}	

					//Przesłanie danych do bazy
					if($wszystko_Ok==true)
					{	

						if ($polaczenie->query("INSERT INTO uzytkownik VALUES (NULL, '$login', '$h_haslo', '$email', '$imie', '$nazwisko', '$wiek')"))
						{
							$_SESSION['udanarejestracja']=true;
							header('Location: rejestracjaPoprawna.php');
						}
						else
						{
							throw new Exception($polaczenie->error);
						}
					}	
					$polaczenie->close();	
				}		
			}
			catch(Exception $e)
			{
				echo "$e";
				echo'<span style="color:red;">Błąd! Spróbuj zarejstrować się później</span>.<br/>';
				
			}		
		}
		
		
				
	}
	
?>

<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="stylesheet" href="style_CSS/styleRejestracja.css">
	<title>Ciekawostki IT - rejestracja</title>

	<style>
		.error
		{
			color:red;
			margin: 10px 30px;
			
		}
	</style>	

</head>

<body>
	
	<div class="oknoRejestracji">
					
		<form  method="post">
		
		    <div class="rejestracja">Zarejestruj się</div>
            <div class="rejestracjaOpis">Zarejestruj się i poznawaj ciekawostki z branży IT !</div>
            
            <!-- Login input -->
			<input type="text" placeholder ="Login" value ="<?php
			if(isset($_SESSION['rejestracja_login']))
				{
					echo $_SESSION['rejestracja_login'];
					unset($_SESSION['rejestracja_login']);
				}
			?>"name="login"/>
			<?php
				if(isset($_SESSION['e_login']))
				{
                    echo'<div class="error">'.$_SESSION['e_login'].'</div>';
                    unset($_SESSION['e_login']);
				}
			?>

            <!-- Mail input -->
			<input type="text" placeholder ="E-mail" value ="<?php
			if(isset($_SESSION['rejestracja_email']))
				{
					echo $_SESSION['rejestracja_email'];
					unset($_SESSION['rejestracja_email']);
				}
			?>"name="email"/>
			<?php
				if(isset($_SESSION['e_email']))
				{
					echo'<div class="error">'.$_SESSION['e_email'].'</div>';
					unset($_SESSION['e_email']);
				}
            ?>
            
            <!-- Password input -->
			<input type="password" placeholder ="Hasło" value ="<?php
			if(isset($_SESSION['rejestracja_haslo1']))
				{
					echo $_SESSION['rejestracja_haslo1'];
					unset($_SESSION['rejestracja_haslo1']);
				}
			?>"name="haslo1"/>
			<?php
				if(isset($_SESSION['e_haslo']))
				{
					echo'<div class="error">'.$_SESSION['e_haslo'].'</div>';
					unset($_SESSION['e_haslo']);
				}
            ?>
            
            <!-- Password repeat input -->
            <input type="password" placeholder ="Powtórz hasło" value ="<?php
			if(isset($_SESSION['rejestracja_haslo2']))
				{
					echo $_SESSION['rejestracja_haslo2'];
					unset($_SESSION['rejestracja_haslo2']);
				}
			?>"name="haslo2"/>
            
            <!-- Name input -->
			<input type="text" placeholder ="Imię" value ="<?php
			if(isset($_SESSION['rejestracja_imie']))
				{
					echo $_SESSION['rejestracja_imie'];
					unset($_SESSION['rejestracja_imie']);
				}
			?>"name="imie"/>
			<?php
				if(isset($_SESSION['e_imie']))
				{
                    echo'<div class="error">'.$_SESSION['e_imie'].'</div>';
                    unset($_SESSION['e_imie']);
				}
			?>
                
            <!-- Surname input -->
			<input type="text" placeholder ="Nazwisko" value ="<?php
			if(isset($_SESSION['rejestracja_nazwisko']))
				{
					echo $_SESSION['rejestracja_nazwisko'];
					unset($_SESSION['rejestracja_nazwisko']);
				}
			?>"name="nazwisko"/>
			<?php
				if(isset($_SESSION['e_nazwisko']))
				{
                    echo'<div class="error">'.$_SESSION['e_nazwisko'].'</div>';
                    unset($_SESSION['e_nazwisko']);
				}
			?>

            <!-- Wiek input -->
            <input type="number" placeholder ="Wiek" min="1" max="120" value ="<?php
			if(isset($_SESSION['rejestracja_wiek']))
				{
					echo $_SESSION['rejestracja_wiek'];
					unset($_SESSION['rejestracja_wiek']);
				}
			?>"name="wiek"/>
			<?php
				if(isset($_SESSION['e_wiek']))
				{
                    echo'<div class="error">'.$_SESSION['e_wiek'].'</div>';
                    unset($_SESSION['e_wiek']);
				}
			?>



            <!-- Regulamin -->
			<label class="regulamin">
			<input type="checkbox" name="regulamin" <?php
			if(isset($_SESSION['rejestracja_regulamin']))
			{
				echo "checked";
				unset($_SESSION['rejestracja_regulamin']);
			}
			?>/>Akceptuje <a href='regulamin.php' target="blank">regulamin.</a>
			</label>
			<?php
				if(isset($_SESSION['e_check']))
				{
					echo'<div class="error">'.$_SESSION['e_check'].'</div>';
					unset($_SESSION['e_check']);
				}
			?>
                
            <!-- Submit button  -->
			<input type="submit" value="Zarejestruj"/>
		</form>
	</div>
			
	

	
</body>
</html>