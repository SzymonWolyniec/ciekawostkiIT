<?php

session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('edycjaArtykul.tpl');

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

if(isset($_GET['artykulId']))
{
    $smarty->assign('artykulId', $_GET['artykulId']);
    $articleId = $_GET['artykulId'];

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
                    $autorId = $wiersz['createByUserId'];

                    if($rezultatAutor = $polaczenie->query("SELECT login FROM uzytkownicy WHERE id=$autorId"))
                    {
                        $wierszAutor = $rezultatAutor->fetch_assoc();
                        
                        $smarty->assign('artykulAutor', $wierszAutor['login']);
                    }
                    else
                    {
                        throw new Exception(mysqli_connect_errno());
                    }

                    // Edycja artykułu
                    require_once "edycjaArtykulZapisz.php";
                    
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





if(isset($_SESSION['poprawnieEdytowanoArtykul']))
{
    $smarty->assign('poprawnieEdytowanoArtykul', $_SESSION['poprawnieEdytowanoArtykul']);
    unset($_SESSION['poprawnieEdytowanoArtykul']);
}


if(isset($_SESSION['login']))
{
    $smarty->assign('login', $_SESSION['login']);
}

if(isset($_SESSION['funkcja']))
{
    $smarty->assign('funkcjaNumer', $_SESSION['funkcja']);
}
$smarty->assign('activeNavItem',"artykuly");
$smarty->display('edycjaArtykul.tpl');
?>