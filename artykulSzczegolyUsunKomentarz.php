<?php
session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('artykulSzczegolyUsunKomentarz.tpl');

if(!isset($_SESSION['zalogowany']))
{ 
    header('Location: index.php');
    exit();
}

if(isset($_GET['komentarzId']))
{
    $smarty->assign('komentarzId', $_GET['komentarzId']);
    $komentarzid = $_GET['komentarzId'];

    // Select comment with id = $_GET

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
            if($rezultat = $polaczenie->query("SELECT articleId, createByUserId FROM komentarze WHERE id=$komentarzid"))
            {
                $wiersz = $rezultat->fetch_assoc();

                $ilu = $rezultat->num_rows;
                if($ilu > 0)
                {	
                    if($wiersz['createByUserId'] == $_SESSION['id'])
                    {
                        $smarty->assign('moznaKasowac', true);
                    }

                    $smarty->assign('artykulId', $wiersz['articleId']);
                    $artykulId = $wiersz['articleId'];

                    if(isset($_POST['usunKomentarz']))
                    {
                        if($rezultat = $polaczenie->query("DELETE FROM komentarze WHERE id=$komentarzid"))
                        {   
                            if ($polaczenie->query("UPDATE artykuly SET comments = comments - 1 WHERE id=$artykulId"))
                            {
                                $_SESSION['poprawnieUsunietoKomentarz']="Komentarz został usunięty";
                                header("Location: artykulSzczegoly.php?id=$artykulId");
                                exit();
                            }
                            else
                            {
                                throw new Exception(mysqli_connect_errno());
                            }
                            
                        }
                        else
                        {
                            throw new Exception(mysqli_connect_errno());
                        }
                    }
                    
                }
                else
                {
                    $smarty->assign('brakKomentarzaId', "Brak komentarza o podanym numerze ID");
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



        
if(isset($_SESSION['funkcja']))
{
    $smarty->assign('funkcjaNumer', $_SESSION['funkcja']);
    if($_SESSION['funkcja'] == 4 || $_SESSION['funkcja'] == 3)
    {
        $smarty->assign('moznaKasowac', true);
    }
}
$smarty->assign('activeNavItem',"artykuly");
$smarty->display('artykulSzczegolyUsunKomentarz.tpl');
?>