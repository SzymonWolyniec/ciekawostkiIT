<?php

session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('artykulSzczegoly.tpl');

if(!isset($_SESSION['zalogowany']) || $_SESSION['ostrzezenia'] > 2)
{ 
    header('Location: index.php');
    exit();
}


if(isset($_GET['id']))
{
    $smarty->assign('artykulId', $_GET['id']);
    $articleId = $_GET['id'];

    // Select article with id = $_GET

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
            if($rezultat = $polaczenie->query("SELECT * FROM artykuly WHERE id=$articleId"))
            {
                $wiersz = $rezultat->fetch_assoc();

                $ilu = $rezultat->num_rows;
                if($ilu > 0)
                {	
                    $smarty->assign('artykulId', $wiersz['id']);
                    $smarty->assign('artykulTytul', $wiersz['title']);
                    $smarty->assign('artykulText', $wiersz['text']);
                    $smarty->assign('artykulData', $wiersz['createDate']);
                    $smarty->assign('artykulKomentarzeLiczba', $wiersz['comments']);
                    $autorId = $wiersz['createByUserId'];

                    $fileName = $wiersz['id'];

                    if (file_exists('media/article/'.$fileName.".png")) 
                    {
                        $image="./media/article/".$fileName.".png";
                    }
                    else
                    {
                        $image="./media/article/default.png";
                    }

                    $smarty->assign('image',$image);

                    if($rezultatAutor = $polaczenie->query("SELECT login FROM uzytkownicy WHERE id=$autorId"))
                    {
                        $wierszAutor = $rezultatAutor->fetch_assoc();
                        
                        $smarty->assign('artykulAutor', $wierszAutor['login']);
                    }
                    else
                    {
                        throw new Exception(mysqli_connect_errno());
                    }
                    
                    // Pobieranie komentarzy
                    require_once "artykulSzczegolyPobierzKomentarze.php";
                    
                }
                else
                {
                    $smarty->assign('brakArtykuluId', "Brak artykułu o podanym numerze ID");
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
else
{
    $smarty->assign('brakArtykuluId', "Nie podano ID artykułu");
}

// Dodawanie komentarza
require_once "artykulSzczegolyDodajKomentarz.php";


if(isset($_SESSION['poprawnieUsunietoKomentarz']))
{
    $smarty->assign('poprawnieUsunietoKomentarz', $_SESSION['poprawnieUsunietoKomentarz']);
    unset($_SESSION['poprawnieUsunietoKomentarz']);
}

if(isset($_SESSION['id']))
{
    $smarty->assign('userId', $_SESSION['id']);
}

if(isset($_SESSION['funkcja']))
{
    $smarty->assign('funkcjaNumer', $_SESSION['funkcja']);
}
$smarty->assign('activeNavItem',"artykuly");
$smarty->display('artykulSzczegoly.tpl');
?>