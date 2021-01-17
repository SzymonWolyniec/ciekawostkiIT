<?php
	session_start();
	
	// If no login or password
	if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
    }		

	require_once "connectDB.php";
	
	$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
	
	if($polaczenie->connect_errno!=0)
	{
        echo "Error: ".$polaczenie->connect_errno."\n";
		// echo "Error FOR DEVELOP ONLY: ".$polaczenie->connect_error;
	}
	else
	{
        
		$login=$_POST['login'];
		$haslo=$_POST['haslo'];
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
        
        if($rezultat = @$polaczenie->query(sprintf("SELECT * FROM uzytkownicy WHERE login='%s'",
		mysqli_real_escape_string($polaczenie,$login))))
		{
            $ilu = $rezultat->num_rows;
            if($ilu >0)
			{		
                $wiersz = $rezultat->fetch_assoc();
					
				if (password_verify($haslo, $wiersz['password']))
				{		
					$_SESSION['zalogowany']=true;					
					$_SESSION['id'] = $wiersz['id'];
					$_SESSION['login'] = $wiersz['login'];
                    $_SESSION['email'] = $wiersz['email'];
                    $_SESSION['imie'] = $wiersz['name'];
                    $_SESSION['nazwisko'] = $wiersz['surname'];
                    $_SESSION['wiek'] = $wiersz['age'];
					
					unset($_SESSION['blad']);
					$rezultat->free_result();
					header('Location: profil.php');	
				}
				else
				{
					$_SESSION['blad'] = 'Nieprawidłowy login lub hasło!';
					header('Location: index.php');
				}
			}
			else
			{
				$_SESSION['blad']='Nieprawidłowy login lub hasło!';
				header('Location: index.php');
			}	
					
		}	
			
		$polaczenie->close();
	}	
	

?>