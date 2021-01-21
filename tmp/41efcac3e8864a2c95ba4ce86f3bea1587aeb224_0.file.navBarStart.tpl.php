<?php
/* Smarty version 3.1.36, created on 2021-01-20 14:47:47
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\navBarStart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60083483983780_65756584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41efcac3e8864a2c95ba4ce86f3bea1587aeb224' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\navBarStart.tpl',
      1 => 1611150466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60083483983780_65756584 (Smarty_Internal_Template $_smarty_tpl) {
?>	<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
		
			<a class="navbar-brand" href="index.php"><img src="./media/logo.png" width="30" height="30" class="d-inline-block mr-2 align-bottom" alt="">Ciekawostki.it</a>
		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Włącznik paska nawigacji">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="mainmenu">
			
				<ul class="navbar-nav mr-auto">
				
					<li class="nav-item <?php if ((isset($_smarty_tpl->tpl_vars['activeNavItem']->value))) {
if ($_smarty_tpl->tpl_vars['activeNavItem']->value == "start") {?>active<?php }
}?> mr-2">
						<a class="nav-link" href="index.php"> Start </a>
					</li>
					
					<li class="nav-item <?php if ((isset($_smarty_tpl->tpl_vars['activeNavItem']->value))) {
if ($_smarty_tpl->tpl_vars['activeNavItem']->value == "rejestracja") {?>active<?php }
}?> mr-2">
						<a class="nav-link" href="rejestracja.php"> Rejestracja </a>
					</li>

					<li class="nav-item <?php if ((isset($_smarty_tpl->tpl_vars['activeNavItem']->value))) {
if ($_smarty_tpl->tpl_vars['activeNavItem']->value == "regulamin") {?>active<?php }
}?> mr-2">
						<a class="nav-link" href="regulamin.php"> Regulamin </a>
					</li>
				
				</ul>
			
			</div>
		
		</nav><?php }
}
