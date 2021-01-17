<?php
session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('rejestracjaPoprawna.tpl');

if((!isset($_SESSION['udanarejestracja'])))
{
	header('Location: index.php');
	exit();
}	
else
{
	unset($_SESSION['udanarejestracja']);
}

$smarty->display('rejestracjaPoprawna.tpl');
?>
