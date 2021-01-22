<?php
/* Smarty version 3.1.36, created on 2021-01-22 22:53:55
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\artykulSzczegoly.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600b49737b64e7_78485213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2d88e672f46faf5cd2bacd86ab618076bdd2a1f' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\artykulSzczegoly.tpl',
      1 => 1611352433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navBarLogged.tpl' => 1,
  ),
),false)) {
function content_600b49737b64e7_78485213 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleArtykulSzczegoly.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - artykuł</title>
</head>

<body>

	<header>
		<?php $_smarty_tpl->_subTemplateRender('file:navBarLogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>


    <main>
        <div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-10 col-sm-12 m-auto">
                    <div class="oknoArtykul">

						<?php if (!(isset($_smarty_tpl->tpl_vars['brakArtykuluId']->value))) {?>
							<?php if ((isset($_smarty_tpl->tpl_vars['funkcjaNumer']->value))) {?>
								<?php if ($_smarty_tpl->tpl_vars['funkcjaNumer']->value == 4 || $_smarty_tpl->tpl_vars['funkcjaNumer']->value == 3) {?>
									<div class="container-fluid">
										<div class="row no-gutters">
																						<div class="col-sm-12 editBtnContainer">
												<form  action="edycjaArtykul.php" method="get">
													<Button class="editBtn" type="submit" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['artykulId']->value;
$_prefixVariable1 = ob_get_clean();
if ((isset($_prefixVariable1))) {
echo $_smarty_tpl->tpl_vars['artykulId']->value;
}?>" name="artykulId">
														<img src="./media/edit.png" width="30" height="30">
													</Button>
												</form>
											</div>
										</div>
									</div>	
								<?php }?>
							<?php }?>
						<?php }?>

						<div class="statusError"><?php if ((isset($_smarty_tpl->tpl_vars['brakArtykuluId']->value))) {
echo $_smarty_tpl->tpl_vars['brakArtykuluId']->value;
}?></div>
						<div class="status"><?php if ((isset($_smarty_tpl->tpl_vars['poprawnieDodanoKomentarz']->value))) {
echo $_smarty_tpl->tpl_vars['poprawnieDodanoKomentarz']->value;
}?></div>
						<div class="status"><?php if ((isset($_smarty_tpl->tpl_vars['poprawnieUsunietoKomentarz']->value))) {
echo $_smarty_tpl->tpl_vars['poprawnieUsunietoKomentarz']->value;
}?></div>
						

						<?php if (!(isset($_smarty_tpl->tpl_vars['brakArtykuluId']->value))) {?>

							<div class="container">
								<div class="row">
									<div class="col-sm-7 col-lg-8">
										<div class="artykulInfo"><?php if ((isset($_smarty_tpl->tpl_vars['artykulTytul']->value))) {
echo $_smarty_tpl->tpl_vars['artykulTytul']->value;
}?></div>
									</div>
									<div class="col-sm-5 col-lg-4">
											<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">
									</div>
								</div>
							</div>

							<div class="divider"></div>
							
							<div class="text"><?php if ((isset($_smarty_tpl->tpl_vars['artykulText']->value))) {
echo $_smarty_tpl->tpl_vars['artykulText']->value;
}?><br><br>~<?php if ((isset($_smarty_tpl->tpl_vars['artykulAutor']->value))) {
echo $_smarty_tpl->tpl_vars['artykulAutor']->value;
}?><div>

							<div class="divider"></div>
							
						<?php }?>
						<form  action="artykuly.php" method="post">
								<!-- Back button  -->
								<input type="submit" value="Wróć" name="wrocArtykul"/>
						</form>

						<?php if (!(isset($_smarty_tpl->tpl_vars['brakArtykuluId']->value))) {?>
							<form  action="artykulSzczegoly.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['artykulId']->value;
$_prefixVariable2 = ob_get_clean();
if ((isset($_prefixVariable2))) {
echo $_smarty_tpl->tpl_vars['artykulId']->value;
}?>" method="post">
								<div class="container">
									<div class="row">
										<div class="col-sm-10 col-md-8 offset-sm-1 offset-md-2">

											<div class="artykulDodajKomentarz">Dodaj komentarz:</div>

											<!-- Add comment title input -->
											<input type="text" class="dodajKomentarzInput" placeholder="Tytuł komentarza" value="<?php if ((isset($_smarty_tpl->tpl_vars['dodajKomentarzTytulZap']->value))) {
echo $_smarty_tpl->tpl_vars['dodajKomentarzTytulZap']->value;
}?>" name="dodajKomentarzTytul"/>
											<div class="error">
												<?php if ((isset($_smarty_tpl->tpl_vars['e_komentarzTytul']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_komentarzTytul']->value;?>
 <?php }?>
											</div>

											<!-- Add comment text input -->
											<textarea class="scrollabletextbox" placeholder="Komentarz" name="dodajKomentarzText"><?php if ((isset($_smarty_tpl->tpl_vars['dodajKomentarzTextZap']->value))) {
echo $_smarty_tpl->tpl_vars['dodajKomentarzTextZap']->value;
}?></textarea>
											<div class="error">
												<?php if ((isset($_smarty_tpl->tpl_vars['e_komentarzText']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_komentarzText']->value;?>
 <?php }?>
											</div>

											<!-- Add comment button  -->
											<input type="submit" class="dodajKomentarzBtn" value="Dodaj" name="dodajKomentarz"/>
										</div>
									</div>
								</div>
							</form>

							<div class="artykulKomentarze">Komentarze (<?php if ((isset($_smarty_tpl->tpl_vars['artykulKomentarzeLiczba']->value))) {
echo $_smarty_tpl->tpl_vars['artykulKomentarzeLiczba']->value;
}?>):</div>
							
							<?php if ((isset($_smarty_tpl->tpl_vars['komentarzeFromDB']->value))) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['komentarzeFromDB']->value, 'komentarz');
$_smarty_tpl->tpl_vars['komentarz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['komentarz']->value) {
$_smarty_tpl->tpl_vars['komentarz']->do_else = false;
?>

								

								<?php if ((isset($_smarty_tpl->tpl_vars['funkcjaNumer']->value))) {?>
									<?php if ($_smarty_tpl->tpl_vars['funkcjaNumer']->value == 4 || $_smarty_tpl->tpl_vars['funkcjaNumer']->value == 3 || $_smarty_tpl->tpl_vars['userId']->value == $_smarty_tpl->tpl_vars['komentarz']->value['createByUserId']) {?>
										<div class="container-fluid">
											<div class="row no-gutters">
																								<div class="col-sm-12 editBtnContainer">
													<form  action="artykulSzczegolyUsunKomentarz.php" method="get">
														<Button class="deleteBtn" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['komentarz']->value['id'];?>
" name="komentarzId">
															X
														</Button>
													</form>
												</div>
											</div>
										</div>
									<?php }?>	
								<?php }?>

									<div class="komentarzTytul"><?php echo $_smarty_tpl->tpl_vars['komentarz']->value['title'];?>
</div>
									<div class="komentarzText"><?php echo $_smarty_tpl->tpl_vars['komentarz']->value['text'];?>
 <br> ~<?php echo $_smarty_tpl->tpl_vars['komentarz']->value['autor'];?>
</div>
									<div class="divider"></div>

								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
						<?php }?>

						

						

                    </diV>
                </diV>
            </diV>
        </diV>    
    </main>
                            

	<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
