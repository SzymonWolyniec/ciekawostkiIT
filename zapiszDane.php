<?php

$wszystko_Ok=true;

if(isset($_POST['zapiszDane']))
{

	//Sprawdznie maila
	$email =$_POST['email'];
	$emailB =filter_var($email,FILTER_SANITIZE_EMAIL);
	if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false)||($emailB !=$email))
	{ 
		$wszystko_Ok=false;
		$smarty->assign('e_email',"Podano niepoprawny adres email");
	}

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
		$smarty->assign('e_regulaminCheck',"Aby zmienić swoje dane konieczne jest zatwierdzenie regulaminu.");
    }
    
    //Sprawdzanie nowego hasla
	$haslo1=$_POST['haslo1'];
    $haslo2=$_POST['haslo2'];
    
    $changePassword = false;
    if((strlen($haslo1)>0))
    {
        $changePassword = true;

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
    }
	

	// Zapamiętywanie wprowadzanych danych
	$smarty->assign('edycjaDanych_email',"$email");
	$smarty->assign('edycjaDanych_haslo1',"$haslo1");
	$smarty->assign('edycjaDanych_haslo2',"$haslo2");
	$smarty->assign('edycjaDanych_imie',"$imie");
	$smarty->assign('edycjaDanych_nazwisko',"$nazwisko");
	$smarty->assign('edycjaDanych_wiek',"$wiek");
	$smarty->assign('edycjaDanych_regulamin',"true");
	if(isset($_POST['regulamin']))
	{
		$smarty->assign('edycjaDanych_regulamin',"checked");
    }
    $login = $_SESSION['login'];
	
	

	if($wszystko_Ok)
	{
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
				//sprawdzanie maila - czy jest w bazie
                $email = htmlentities($email, ENT_QUOTES, "UTF-8");
                $login = htmlentities($login, ENT_QUOTES, "UTF-8");
				
                if($rezultat=$polaczenie->query(sprintf("SELECT id FROM uzytkownicy WHERE email='%s' AND login<>'%s'",mysqli_real_escape_string($polaczenie,$email),mysqli_real_escape_string($polaczenie,$login))))
                {
                    $wiersz = $rezultat->fetch_assoc();
                    
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
                
                //sprawdzanie poprawności obecnego hasła

                $hasloOld=$_POST['hasloOld'];
                $login = htmlentities($login, ENT_QUOTES, "UTF-8");

                if($rezultat = $polaczenie->query(sprintf("SELECT * FROM uzytkownicy WHERE login='%s'",
                mysqli_real_escape_string($polaczenie,$login))))
                {
                    $wiersz = $rezultat->fetch_assoc();
                        
                    if (password_verify($hasloOld, $wiersz['password']))
                    {		
                        $rezultat->free_result();
                    }
                    else
                    {
                        $smarty->assign('e_hasloOld',"Niepoprawne hasło !");
                        $wszystko_Ok = false;
                    }
                }	
                else
                {
                    throw new Exception(mysqli_connect_errno());
                }

				//Przesłanie danych do bazy
				if($wszystko_Ok==true)
				{	
                    $id = $_SESSION['id'];

                    if($changePassword)
                    {
                        $query = sprintf("UPDATE uzytkownicy SET login='%s', password='%s', email='%s',name='%s',surname='%s',age='%s' WHERE id='$id'",
                        mysqli_real_escape_string($polaczenie,$login),
                        mysqli_real_escape_string($polaczenie,$h_haslo),
                        mysqli_real_escape_string($polaczenie,$email),
                        mysqli_real_escape_string($polaczenie,$imie),
                        mysqli_real_escape_string($polaczenie,$nazwisko),
                        mysqli_real_escape_string($polaczenie,$wiek));
                    }
                    else
                    {
                        $query = sprintf("UPDATE uzytkownicy SET login='%s', email='%s',name='%s',surname='%s',age='%s' WHERE id='$id'",
                        mysqli_real_escape_string($polaczenie,$login),
                        mysqli_real_escape_string($polaczenie,$email),
                        mysqli_real_escape_string($polaczenie,$imie),
                        mysqli_real_escape_string($polaczenie,$nazwisko),
                        mysqli_real_escape_string($polaczenie,$wiek));
                    }

					if ($polaczenie->query($query))
					{        
                        $_SESSION['email'] = $email;
                        $_SESSION['imie'] = $imie;
                        $_SESSION['nazwisko'] = $nazwisko;
                        $_SESSION['wiek'] = $wiek;

						$_SESSION['noweDaneZapisane'] = 'Zapisano nowe dane';
						
						header('Location: profil.php');
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
    

    
?>