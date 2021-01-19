<?php
session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('index.tpl');

	// Creating SuperAdmin if no users in DB
	require_once"connectDB.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	// Sprawdzenie połączenia z BD
	try
	{
		$polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
	
		if($polaczenie->connect_errno!=0)
		{
			throw new Exception(mysqli_connect_errno());
		}
		else
		{
			if($rezultat = $polaczenie->query("SELECT * FROM uzytkownicy"))
			{
				$iluUserowDB = $rezultat->num_rows;
				if($iluUserowDB == 0)
					{
						header('Location: createSuperAdmin.php');
						exit();
					}
			}	
	
			$rezultat->free_result();
			$polaczenie->close();
		}		
	}
	catch(Exception $e)
	{
		$_SESSION['errorDBDevelopment'] = "Error: ".$e."\n";
		$_SESSION['errorDBPath'] = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
		header("Location: errorDB.php");
		exit();		
	}       
	

	
	// Auto login
	if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']=true))
	{
		header('Location: profil.php');
		exit();
	}	

	if(isset($_SESSION['blad']))
	{
		$smarty->assign('bladLogowanie',$_SESSION['blad']);
		unset($_SESSION['blad']);
	}
		
	$smarty->display('index.tpl');
?>