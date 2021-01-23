<?php
/* Smarty version 3.1.36, created on 2021-01-23 01:11:08
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\navBarLogged.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600b699c3d0536_78016137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfca6dddcd9bd1fe8213dd368f9531e557cd20a7' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\navBarLogged.tpl',
      1 => 1611352794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600b699c3d0536_78016137 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark bg-dark navbar-expand-lg">
		
			<a class="navbar-brand" href="index.php"><img src="./media/logo.png" width="30" height="30" class="d-inline-block mr-2 align-bottom" alt="">Ciekawostki.it</a>
		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Włącznik paska nawigacji">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="mainmenu">
			
				<ul class="navbar-nav mr-auto">
				
					<li class="nav-item <?php if ((isset($_smarty_tpl->tpl_vars['activeNavItem']->value))) {
if ($_smarty_tpl->tpl_vars['activeNavItem']->value == "artykuly") {?>active<?php }
}?> mr-2">
						<a class="nav-link" href="artykuly.php"> Artykuły </a>
					</li>
					
					<li class="nav-item <?php if ((isset($_smarty_tpl->tpl_vars['activeNavItem']->value))) {
if ($_smarty_tpl->tpl_vars['activeNavItem']->value == "profil") {?>active<?php }
}?> mr-2">
						<a class="nav-link" href="profil.php"> Profil </a>
					</li>

                    <li class="nav-item <?php if ((isset($_smarty_tpl->tpl_vars['activeNavItem']->value))) {
if ($_smarty_tpl->tpl_vars['activeNavItem']->value == "edycjaDanych") {?>active<?php }
}?> mr-2">
						<a class="nav-link" href="profil.php?edytujDane=Edytuj+dane"> Edycja danych </a>
					</li>

					<li class="nav-item <?php if ((isset($_smarty_tpl->tpl_vars['activeNavItem']->value))) {
if ($_smarty_tpl->tpl_vars['activeNavItem']->value == "regulamin") {?>active<?php }
}?> mr-2">
						<a class="nav-link" href="regulamin.php"> Regulamin </a>
					</li>

					<li class="nav-item <?php if ((isset($_smarty_tpl->tpl_vars['activeNavItem']->value))) {
if ($_smarty_tpl->tpl_vars['activeNavItem']->value == "panelKontaktowy") {?>active<?php }
}?> mr-2">
						<a class="nav-link" href="panelKontaktowy.php"> Panel kontaktowy </a>
					</li>

                    <li class="nav-item <?php if ((isset($_smarty_tpl->tpl_vars['activeNavItem']->value))) {
if ($_smarty_tpl->tpl_vars['activeNavItem']->value == "wyloguj") {?>active<?php }
}?> mr-2">
						<a class="nav-link" href="wyloguj.php"> Wyloguj </a>
					</li>


										<?php if ((isset($_smarty_tpl->tpl_vars['funkcjaNumer']->value))) {?>
						<?php if ($_smarty_tpl->tpl_vars['funkcjaNumer']->value == 4 || $_smarty_tpl->tpl_vars['funkcjaNumer']->value == 3) {?>

							<li class="nav-item dropdown">
								
								<a class="nav-link dropdown-toggle <?php if ((isset($_smarty_tpl->tpl_vars['activeNavItem']->value))) {
if ($_smarty_tpl->tpl_vars['activeNavItem']->value == "panelAdministratora") {?>active<?php }
}?>" href="#" data-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true">Panel administratora</a>
						
								<div class="dropdown-menu" aria-labelledby="submenu">
						
									<a class="dropdown-item" href="uzytkownicy.php">Użytkownicy</a>
									<a class="dropdown-item" href="dodajArtykul.php">Dodaj artykuł</a>
									
									<div class="dropdown-divider"></div>
									
									<a class="dropdown-item" href="poczta.php">Poczta</a>

								</div>
							</li>
					
						<?php }?>
					<?php }?>
				
				</ul>
			
			</div>
		
		</nav><?php }
}
