<?php

session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('panelKontaktowy.tpl');

if(!isset($_SESSION['zalogowany']))
{ 
    header('Location: index.php');
    exit();
}

if(isset($_SESSION['login'])){
    $smarty->assign('login', $_SESSION['login']);
} 



if(isset($_POST['wyslijWiadomoscKontaktowa']))
{
    $wiadomoscTytul = $_POST['wiadomoscTytul'];
    $wiadomoscText = $_POST['wiadomoscText'];
    $emailKontakt = $_POST['emailKontakt'];
    $userId = $_SESSION['id'];
    
    $smarty->assign('wiadomoscTytulZap', $_POST['wiadomoscTytul']);
    $smarty->assign('wiadomoscTextZap', $_POST['wiadomoscText']);
    $smarty->assign('emailKontaktZap', $_POST['emailKontakt']);

    $autorId = $_SESSION['id'];
    $wszystko_Ok = true;

    // Walidacja tytułu
    if((strlen($wiadomoscTytul)<10) || (strlen($wiadomoscTytul)>50))
    { 
        $wszystko_Ok=false;
        $smarty->assign('e_tytul',"Tytuł musi składać się z 10-50 znaków");
    }
    else
    {
        if(ctype_alnum(str_replace(' ','',$wiadomoscTytul))==false)  
        { 
            $wszystko_Ok=false;
            $smarty->assign('e_tytul',"Tytul może składać się tylko z liter i cyfr");
        }
    }

    

    // Walidacja wiadomości
    if((strlen($wiadomoscText)<20) || (strlen($wiadomoscText)>1000))
    { 
        $wszystko_Ok=false;
        $smarty->assign('e_text',"Wiadomość musi składać się z 20-1000 znaków");
    }
    else
    {
        if(ctype_alnum(str_replace(' ','',$wiadomoscText))==false) 
        { 
            $wszystko_Ok=false;
            $smarty->assign('e_text',"Wiadomosc może składać się tylko z liter i cyfr");
        }
    }

    
	$emailB =filter_var($emailKontakt,FILTER_SANITIZE_EMAIL);
	if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false)||($emailB !=$emailKontakt))
	{ 
		$wszystko_Ok=false;
		$smarty->assign('e_emailKontakt',"Podano niepoprawny adres email");
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
                    
                    if ($polaczenie->query("INSERT INTO panelkontaktowy VALUES (NULL, '$userId', '$wiadomoscTytul', '$wiadomoscText', '$emailKontakt', now())"))
                    {
                        $_SESSION['wiadomoscWyslana']="Wiadomość wysłana. Skontaktujemy się jak najszybciej.";
                        header('Location: panelKontaktowy.php');
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

if(isset($_SESSION['wiadomoscWyslana']))
{
    $smarty->assign('wiadomoscWyslana', $_SESSION['wiadomoscWyslana']);
    unset($_SESSION['wiadomoscWyslana']);
}




if(isset($_SESSION['funkcja']))
{
    $smarty->assign('funkcjaNumer', $_SESSION['funkcja']);
}
$smarty->assign('activeNavItem',"panelKontaktowy");
$smarty->display('panelKontaktowy.tpl');
?>