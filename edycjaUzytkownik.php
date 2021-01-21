<?php

session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('edycjaUzytkownik.tpl');

if(!isset($_SESSION['zalogowany']))
{ 
    header('Location: index.php');
    exit();
}
elseif ($_SESSION['funkcja'] == 1)
{
    header('Location: index.php');
    exit();
}

$brakUzytkownikaId = false;

if(isset($_GET['uzytkownikId']))
{
    $smarty->assign('uzytkownikId', $_GET['uzytkownikId']);
    $userId = $_GET['uzytkownikId'];

    // Select user with id = $_GET

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
            if($rezultat = $polaczenie->query("SELECT * FROM uzytkownicy WHERE id=$userId"))
            {
                $wiersz = $rezultat->fetch_assoc();

                $ilu = $rezultat->num_rows;
                if($ilu >0)
                {	
                    $smarty->assign('id', $wiersz['id']);
                    $smarty->assign('login', $wiersz['login']);
                    $userLoginOld = $wiersz['login'];
                    $smarty->assign('email', $wiersz['email']);
                    $userEmailOld = $wiersz['email'];
                    $smarty->assign('imie', $wiersz['name']);
                    $smarty->assign('nazwisko', $wiersz['surname']);
                    $smarty->assign('wiek', $wiersz['age']);
                    $smarty->assign('funkcja', $wiersz['permissionsLevel']);
                    $oldFunkcja = $wiersz['permissionsLevel'];
                    $smarty->assign('ostrzezenia', $wiersz['warning']);

                    if($wiersz['permissionsLevel'] == 1) $smarty->assign('funkcjaText', "Użytkownik");
                    elseif($wiersz['permissionsLevel'] == 3) $smarty->assign('funkcjaText', "Moderator");
                    elseif($wiersz['permissionsLevel'] == 4) $smarty->assign('funkcjaText', "SuperAdmin");
                    
                }
                else
                {
                    $smarty->assign('brakUzytkownikaId', "Brak użytkownika o podanym numerze ID");
                    $brakUzytkownikaId = true;
                }
            }	
            else
            {
                throw new Exception(mysqli_connect_errno());
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

}




// Zapis edycji danych
require_once "zapiszDaneAdmin.php";

if(isset($_SESSION['noweDaneZapisane']))
{
    $smarty->assign('noweDaneZapisane', $_SESSION['noweDaneZapisane']);
    unset($_SESSION['noweDaneZapisane']);
}

if(isset($_SESSION['noweDaneNieZapisane']))
{
    $smarty->assign('noweDaneNieZapisane', $_SESSION['noweDaneNieZapisane']);
    unset($_SESSION['noweDaneNieZapisane']);
   
}



if(isset($_SESSION['funkcja']))
{
    $smarty->assign('funkcjaNumer', $_SESSION['funkcja']);
}
$smarty->assign('activeNavItem',"panelAdministratora");
$smarty->display('edycjaUzytkownik.tpl');
?>