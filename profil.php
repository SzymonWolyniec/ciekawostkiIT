<?php
session_start();
    

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('profil.tpl');

if(!isset($_SESSION['zalogowany']))
{ 
    header('Location: index.php');
    exit();
}

if(isset($_POST['wyloguj']) || isset($_GET['wyloguj']))
{ 
    header('Location: wyloguj.php');
    exit();
}

if(isset($_GET['edytujDane']))
{ 
    $smarty->assign('edytujDane',"true");
    $smarty->assign('activeNavItem',"edycjaDanych");
}
else
{
    $smarty->assign('activeNavItem',"profil");
}




if(isset($_SESSION['login'])) $smarty->assign('login',$_SESSION['login']);
if(isset($_SESSION['email'])) $smarty->assign('email',$_SESSION['email']);
if(isset($_SESSION['imie'])) $smarty->assign('imie',$_SESSION['imie']);
if(isset($_SESSION['nazwisko'])) $smarty->assign('nazwisko',$_SESSION['nazwisko']);
if(isset($_SESSION['wiek'])) $smarty->assign('wiek',$_SESSION['wiek']);
if(isset($_SESSION['ostrzezenia']))
{
    if($_SESSION['ostrzezenia'] > 2)
    {
        $smarty->assign('ostrzezenia','<div style ="color:red;">Blokada</div>');
        $smarty->assign('blokada',$_SESSION['ostrzezenia']);
    }
    else
    {
        $smarty->assign('ostrzezenia',$_SESSION['ostrzezenia']);
    }
} 

if(isset($_SESSION['funkcja']))
{
    
    if($_SESSION['funkcja'] == 1) $smarty->assign('funkcja',"Użytkownik");
    if($_SESSION['funkcja'] == 3) $smarty->assign('funkcja',"Moderator");
    if($_SESSION['funkcja'] == 4) $smarty->assign('funkcja',"SuperAdmin");
}

if(isset($_SESSION['noweDaneZapisane']))
{
    $smarty->assign('noweDaneZapisane', $_SESSION['noweDaneZapisane']);
    unset($_SESSION['noweDaneZapisane']);
   
}

// Zapis edycji danych
require_once "zapiszDane.php";
// Jeśli wystąpiły błędy nie wychodź automatycznie z formularza edycji danych (tylko przycisk Anuluj)
if($wszystko_Ok == false)
{ 
    $smarty->assign('edytujDane',true);
}

if(isset($_SESSION['funkcja']))
{
    $smarty->assign('funkcjaNumer', $_SESSION['funkcja']);

}
$smarty->display('profil.tpl');
?>