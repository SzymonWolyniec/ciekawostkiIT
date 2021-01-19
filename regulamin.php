<?php
session_start();
    

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('regulamin.tpl');


if(isset($_SESSION['zalogowany']))
{
    $smarty->assign('zalogowany',$_SESSION['zalogowany']);
}

$smarty->assign('activeNavItem',"regulamin");
$smarty->display('regulamin.tpl');
?>
