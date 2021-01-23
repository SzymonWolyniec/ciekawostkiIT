<?php

session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('errorDB.tpl');

// UNCOMMENT FOR DEVELOP
// if(isset($_SESSION['errorDBDevelopment']))
// {
// 	$smarty->assign('errorDBDevelopment',$_SESSION['errorDBDevelopment']);
// 	unset($_SESSION['errorDBDevelopment']);
// }

if(isset($_SESSION['errorDBPath']))
{
	$smarty->assign('errorDBPath',$_SESSION['errorDBPath']);
	unset($_SESSION['errorDBPath']);
}
else
{
	header('Location: index.php');
}

$smarty->display('errorDB.tpl');
	
?>