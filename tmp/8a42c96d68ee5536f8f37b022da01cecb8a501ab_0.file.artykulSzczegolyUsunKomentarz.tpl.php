<?php
/* Smarty version 3.1.36, created on 2021-01-22 22:47:56
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\artykulSzczegolyUsunKomentarz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600b480c633704_21951701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a42c96d68ee5536f8f37b022da01cecb8a501ab' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\artykulSzczegolyUsunKomentarz.tpl',
      1 => 1611351950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navBarLogged.tpl' => 1,
  ),
),false)) {
function content_600b480c633704_21951701 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleArtykulSzczegolyUsunKomentarz.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - usuń komentarz</title>
	
</head>

<body>

	<header>
	<?php $_smarty_tpl->_subTemplateRender('file:navBarLogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-6 col-md-8 col-sm-9 m-auto ">
					<div class="oknoUsunKomentarz">

						<div class="statusError"><?php if ((isset($_smarty_tpl->tpl_vars['brakKomentarzaId']->value))) {
echo $_smarty_tpl->tpl_vars['brakKomentarzaId']->value;
}?></div>

						<?php if (!(isset($_smarty_tpl->tpl_vars['brakKomentarzaId']->value))) {?>
							<form  method="post">

								

								<div class="usunKomentarz">Czy na pewno chcesz usunąć komentarz?</div>
								<div class="usunKomentarzOpis">Ta operacja jest <u>nieodwracalna</u>!</div>

								<?php if ((isset($_smarty_tpl->tpl_vars['moznaKasowac']->value))) {?>
								
									<input type="submit" value="Tak" name="usunKomentarz"/>
								<?php }?>
							</form>

							<form  action="artykulSzczegoly.php" method="get">
								<Button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['artykulId']->value;?>
" name="id">
									Nie
								</Button>
							</form>

						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['brakKomentarzaId']->value))) {?>
							<form  action="artykuly.php" method="post">
								<input type="submit" value="Wróc"/>
							</form>
						<?php }?>
					</div>	
				</div>
			</div>
		</div>
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
