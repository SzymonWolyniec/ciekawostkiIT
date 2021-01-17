<?php
/* Smarty version 3.1.36, created on 2021-01-17 20:23:49
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\errorDB.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60048ec5219d90_74926644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e45cfcddbfa5c8d9e7118722bd91e01e4f29ef76' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\errorDB.tpl',
      1 => 1610911414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60048ec5219d90_74926644 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style_CSS/styleErrorDB.css" type="text/css">
	<title>Ciekawostki IT - Error Database</title>
</head>

<body>

	<div class="oknoErrorDB">

				<div class="errorInfo">Błąd połączenia z bazą danych. Przepraszamy.</div>
        <div class="errorPath"><?php if ((isset($_smarty_tpl->tpl_vars['errorDBPath']->value))) {?>Ścieżka błędu: <?php echo $_smarty_tpl->tpl_vars['errorDBPath']->value;
}?></div>
		<a href="<?php if ((isset($_smarty_tpl->tpl_vars['errorDBPath']->value))) {?>//<?php echo $_smarty_tpl->tpl_vars['errorDBPath']->value;
}?>">Spróbuj odświeżyć stronę

	</div>

</body>
</html><?php }
}
