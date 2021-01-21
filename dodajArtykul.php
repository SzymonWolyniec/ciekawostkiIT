<?php

session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('dodajArtykul.tpl');

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

if(isset($_SESSION['login'])){
    $smarty->assign('login', $_SESSION['login']);
} 

if(isset($_POST['zapiszDodajArtykul']))
{
    $artykulTytul = $_POST['artykulTytul'];
    $artykulText = $_POST['artykulText'];
    $smarty->assign('artykulTytulZap', $_POST['artykulTytul']);
    $smarty->assign('artykulTextZap', $_POST['artykulText']);
    $autorId = $_SESSION['id'];
    $wszystko_Ok = true;

    if((strlen($artykulTytul)<2))
    { 
        $wszystko_Ok=false;
        $smarty->assign('e_tytul',"Tytuł musi składać się z przynajmniej 2 znaków");
    }

    if((strlen($artykulText)<10))
    { 
        $wszystko_Ok=false;
        $smarty->assign('e_text',"Tekst musi składać się z przynajmniej 10 znaków");
    }

    if($wszystko_Ok)
    {
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
                    //Przesłanie danych do bazy
                    if ($polaczenie->query("INSERT INTO artykuly VALUES (NULL, '$artykulTytul', '$artykulText', '$autorId', now(), '$autorId', now(), 0)"))
                    {
                        $_SESSION['poprawnieDodanoArtykul']="Artykuł został dodany poprawnie";
                        header('Location: dodajArtykul.php');
                        exit();
                    }
                    else
                    {
                        throw new Exception(mysqli_connect_errno());
                    }
                        
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

}

if(isset($_SESSION['poprawnieDodanoArtykul']))
{
    $smarty->assign('artykulDodanoPoprawnie', $_SESSION['poprawnieDodanoArtykul']);
    unset($_SESSION['poprawnieDodanoArtykul']);
}


if(isset($_SESSION['funkcja']))
{
    $smarty->assign('funkcjaNumer', $_SESSION['funkcja']);
}
$smarty->assign('activeNavItem',"panelAdministratora");
$smarty->display('dodajArtykul.tpl');
?>