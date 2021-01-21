<?php
/* Smarty version 3.1.36, created on 2021-01-20 13:51:28
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600827508ca172_47573151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daea2627971821dc9a423ebd028932de1ee2db48' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\index.tpl',
      1 => 1611146884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navBarStart.tpl' => 1,
  ),
),false)) {
function content_600827508ca172_47573151 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - logowanie</title>
	
</head>

<body>

	<header>
	<?php $_smarty_tpl->_subTemplateRender('file:navBarStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-6 col-md-8 col-sm-9 m-auto ">
					<div class="oknoLogowania">

							<form action="zaloguj.php" method="post">

								<div class="zaloguj">Zaloguj się!</div>
								<div class="zalogujOpis">Poznawaj ciekawostki z branży IT za darmo !</div>


								<input type="text" placeholder="Login" name="login" /> 
								<input type="password" placeholder ="Hasło" name="haslo"/> 

								<div class="bladLogowanie">
									<?php if ((isset($_smarty_tpl->tpl_vars['bladLogowanie']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['bladLogowanie']->value;?>
 <?php }?>
								</div>

								<input type="submit" value="Zaloguj się" />
							</form>

							<div class="rejestracjaLink">
								<a href="rejestracja.php" >Rejestracja - załóż darmowe konto!</a>
							</div>
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
