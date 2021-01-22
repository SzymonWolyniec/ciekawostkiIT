<?php

session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('artykuly.tpl');

if(!isset($_SESSION['zalogowany']))
{ 
    header('Location: index.php');
    exit();
}

// Select all article

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
		if($rezultat = $polaczenie->query("SELECT * FROM artykuly ORDER BY id"))
        {
            
            while ($wiersz = $rezultat->fetch_assoc())
            {
                $artykulyFromDB[] = $wiersz;
                
                $fileName = $wiersz['id'];

                if (file_exists('media/article/'.$fileName.".png")) 
                {
                    $imagesTab[]="./media/article/".$fileName.".png";
                }
                else
                {
                    $imagesTab[]="./media/article/default.png";
                }
            }
            
            $smarty->assign('imagesTab',$imagesTab);
            $smarty->assign('artykulyFromDB',$artykulyFromDB);
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


if(isset($_SESSION['funkcja']))
{
    $smarty->assign('funkcjaNumer', $_SESSION['funkcja']);
}
$smarty->assign('activeNavItem',"artykuly");
$smarty->display('artykuly.tpl');
?>