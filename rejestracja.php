<?php
session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('rejestracja.tpl');

if(isset($_POST['email']))
{
	$wszystko_Ok=true;
	$login =$_POST['login'];

	//Sprawdzanie długości loginu
	if((strlen($login)<3)||(strlen($login)>20))
	{ 
		$wszystko_Ok=false;
		$smarty->assign('e_login',"Login musi posiadać od 3 do 20 znaków");
	}

	//Walidacja loginu
	if(ctype_alnum($login)==false)
	{ 
		$wszystko_Ok=false;
		$smarty->assign('e_login',"Login może składać się tylko z liter i cyfr (bez polskich znaków)");
	}


	//Sprawdznie maila
	$email =$_POST['email'];
	$emailB =filter_var($email,FILTER_SANITIZE_EMAIL);
	if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false)||($emailB !=$email))
	{ 
		$wszystko_Ok=false;
		$smarty->assign('e_email',"Podano niepoprawny adres email");
	}


	//Sprawdzanie hasla
	$haslo1=$_POST['haslo1'];
	$haslo2=$_POST['haslo2'];
	if((strlen($haslo1)<8)||(strlen($haslo1)>20))
	{ 
		$wszystko_Ok=false;
		$smarty->assign('e_haslo',"Hasło musi posiadać od 8 do 20 znaków");
	}

	if($haslo1!=$haslo2)
	{ 
		$wszystko_Ok=false;
		$smarty->assign('e_haslo',"Podane hasła różnią się");
	}
	
	$h_haslo = password_hash($haslo1, PASSWORD_DEFAULT);

	$imie =$_POST['imie'];

	//Sprawdzanie długości imienia
	if((strlen($imie)<2)||(strlen($imie)>20))
	{ 
		$wszystko_Ok=false;
		$smarty->assign('e_imie',"Imię musi posiadać od 2 do 20 znaków");
	}

	//Walidacja imienia
	if(ctype_alpha($imie)==false)
	{ 
		$wszystko_Ok=false;
		$smarty->assign('e_imie',"Imię może składać się tylko z liter (bez polskich znaków)");
	}

	$nazwisko =$_POST['nazwisko'];

	//Sprawdzanie długości nazwiska
	if((strlen($nazwisko)<2)||(strlen($nazwisko)>20))
	{ 
		$wszystko_Ok=false;
		$smarty->assign('e_nazwisko',"Nazwisko musi posiadać od 2 do 20 znaków");
	}

	//Walidacja nazwiska
	if(ctype_alpha($nazwisko)==false)
	{ 
		$wszystko_Ok=false;
		$smarty->assign('e_nazwisko',"Nazwisko może składać się tylko z liter (bez polskich znaków)");
	}

	$wiek = $_POST['wiek'];

	//Sprawdzanie długości wieku (1-3 znaki)
	if((strlen($wiek)<1)||(strlen($wiek)>3))
	{ 
		$wszystko_Ok=false;
		$smarty->assign('e_wiek',"Podaj swój wiek");
	}

	// Sprawdzanie akceptacji regulaminu
	if(isset($_POST['regulamin'])==false)
	{ 
		$wszystko_Ok=false;
		$smarty->assign('e_regulaminCheck',"Aby się zarejestrować konieczne jest zatwierdzenie regulaminu.");
	}

	// Zapamiętywanie wprowadzanych danych
	$smarty->assign('rejestracja_login',$login);
	$smarty->assign('rejestracja_email',"$email");
	$smarty->assign('rejestracja_haslo1',"$haslo1");
	$smarty->assign('rejestracja_haslo2',"$haslo2");
	$smarty->assign('rejestracja_imie',"$imie");
	$smarty->assign('rejestracja_nazwisko',"$nazwisko");
	$smarty->assign('rejestracja_wiek',"$wiek");
	$smarty->assign('rejestracja_regulamin',"true");
	if(isset($_POST['regulamin']))
	{
		$smarty->assign('rejestracja_regulamin',"checked");
	}
	
	

	if($wszystko_Ok)
	{
		//Sprawdzenie czy dany uzytkownik już nie istnieje w BD
		require_once "connectDB.php";
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

				if($rezultat=$polaczenie->query(sprintf("SELECT id FROM uzytkownicy WHERE login='%s'",mysqli_real_escape_string($polaczenie,$login))))
				{
					$ile_login = $rezultat->num_rows;
					if($ile_login>0)
					{
						$wszystko_Ok=false;
						$smarty->assign('e_login',"Istnieje już użytkownik o takim loginie.");
					}	

					$rezultat->free_result();
				}
				else
				{
					throw new Exception(mysqli_connect_errno());
				}

				//sprawdzanie maila - czy jest w bazie
				$email = htmlentities($email, ENT_QUOTES, "UTF-8");
				if($rezultat=$polaczenie->query(sprintf("SELECT id FROM uzytkownicy WHERE email='%s'",mysqli_real_escape_string($polaczenie,$email))))
				{
					$ile_email = $rezultat->num_rows;
					if($ile_email>0)
					{
						$wszystko_Ok=false;
						$smarty->assign('e_email',"Istnieje już użytkownik o takim emailu.");
					}	

					$rezultat->free_result();
				}
				else
				{
					throw new Exception(mysqli_connect_errno());
				}

				//Przesłanie danych do bazy
				if($wszystko_Ok==true)
				{	

					if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$login', '$h_haslo', '$email', '$imie', '$nazwisko', '$wiek', 1,0)"))
					{
						$_SESSION['udanarejestracja']=true;
						header('Location: rejestracjaPoprawna.php');
					}
					else
					{
						throw new Exception(mysqli_connect_errno());
					}
				}	
				$polaczenie->close();	
			}		
		}
		catch(Exception $e)
		{
			$_SESSION['errorDBDevelopment'] = "Error: ".$e."\n";
            $_SESSION['errorDBPath'] = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
            header('Location: errorDB.php');
            exit();	
			
		}		
	}		
}

$smarty->assign('activeNavItem',"rejestracja");
$smarty->display('rejestracja.tpl');

?>