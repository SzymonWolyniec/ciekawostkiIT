<?php
session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$smarty->clearCache('test.tpl');



$smarty->display('test.tpl');
?>
