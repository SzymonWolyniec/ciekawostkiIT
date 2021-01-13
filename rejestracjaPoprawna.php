<?php

session_start();
	if((!isset($_SESSION['udanarejestracja'])))
	{
		header('Location: index.php');
		exit();
	}	
	else
	{
		unset($_SESSION['udanarejestracja']);
    }
    
// Usuwanie zapamiętanych zmiennych z okna rejestracji
if(isset($_SESSION['rejestracja_login'])) unset($_SESSION['rejestracja_login']);
if(isset($_SESSION['rejestracja_email'])) unset($_SESSION['rejestracja_email']);
if(isset($_SESSION['rejestracja_haslo1'])) unset($_SESSION['rejestracja_haslo1']);
if(isset($_SESSION['rejestracja_haslo2'])) unset($_SESSION['rejestracja_haslo2']);
if(isset($_SESSION['rejestracja_imie'])) unset($_SESSION['rejestracja_imie']);
if(isset($_SESSION['rejestracja_nazwisko'])) unset($_SESSION['rejestracja_nazwisko']);
if(isset($_SESSION['rejestracja_wiek'])) unset($_SESSION['rejestracja_wiek']);
if(isset($_SESSION['rejestracja_regulamin'])) unset($_SESSION['rejestracja_regulamin']);


// Usuwanie błędów z okna rejestracji

if(isset($_SESSION['e_login'])) unset($_SESSION['e_login']);
if(isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
if(isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
if(isset($_SESSION['e_imie'])) unset($_SESSION['e_imie']);
if(isset($_SESSION['e_nazwisko'])) unset($_SESSION['e_nazwisko']);
if(isset($_SESSION['e_check'])) unset($_SESSION['e_check']);
?>

<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style_CSS/styleRejestracjaPoprawna.css" type="text/css">
	<title>Ciekawostki IT - rejestracja poprawna</title>
</head>

<body>

	<div class="oknoRejestracji">

		<div class="rejestracjaDziekuje">Dziękujemy za rejestrację.</div>
		<a href="index.php">Zaloguj sie na swoje konto!

	</div>

</body>
</html>