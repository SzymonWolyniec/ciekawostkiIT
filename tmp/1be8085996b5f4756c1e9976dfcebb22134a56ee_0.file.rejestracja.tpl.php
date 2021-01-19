<?php
/* Smarty version 3.1.36, created on 2021-01-19 23:18:05
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\rejestracja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60075a9d7e6490_64939647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1be8085996b5f4756c1e9976dfcebb22134a56ee' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\rejestracja.tpl',
      1 => 1611094680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navBarStart.tpl' => 1,
  ),
),false)) {
function content_60075a9d7e6490_64939647 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleRejestracja.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - rejestracja</title>
	
</head>

<body>
	
	<header>
	<?php $_smarty_tpl->_subTemplateRender('file:navBarStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-6 col-md-8 col-sm-9 m-auto">
					<div class="oknoRejestracji">
								
						<form  method="post">
						<div class="rejestracja">Zarejestruj się</div>
							<div class="rejestracjaOpis">Zarejestruj się i poznawaj ciekawostki z branży IT za darmo !</div>
							
							<!-- Login input -->
							<input type="text" placeholder="Login" value="<?php if ((isset($_smarty_tpl->tpl_vars['rejestracja_login']->value))) {
echo $_smarty_tpl->tpl_vars['rejestracja_login']->value;
}?>" name="login"/>

							<div class="error">
							<?php if ((isset($_smarty_tpl->tpl_vars['e_login']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_login']->value;?>
 <?php }?>
							</div>

							<!-- Mail input -->
							<input type="text" placeholder="E-mail" value="<?php if ((isset($_smarty_tpl->tpl_vars['rejestracja_email']->value))) {
echo $_smarty_tpl->tpl_vars['rejestracja_email']->value;
}?>" name="email"/>

							<div class="error">
							<?php if ((isset($_smarty_tpl->tpl_vars['e_email']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_email']->value;?>
 <?php }?>
							</div>
							
							<!-- Password input -->
							<input type="password" placeholder="Hasło" value="<?php if ((isset($_smarty_tpl->tpl_vars['rejestracja_haslo1']->value))) {
echo $_smarty_tpl->tpl_vars['rejestracja_haslo1']->value;
}?>" name="haslo1"/>
							
							<div class="error">
							<?php if ((isset($_smarty_tpl->tpl_vars['e_haslo']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_haslo']->value;?>
 <?php }?>
							</div>
							
							<!-- Password repeat input -->
							<input type="password" placeholder ="Powtórz hasło" value ="<?php if ((isset($_smarty_tpl->tpl_vars['rejestracja_haslo2']->value))) {
echo $_smarty_tpl->tpl_vars['rejestracja_haslo2']->value;
}?>" name="haslo2"/>
							
							<!-- Name input -->
							<input type="text" placeholder ="Imię" value ="<?php if ((isset($_smarty_tpl->tpl_vars['rejestracja_imie']->value))) {
echo $_smarty_tpl->tpl_vars['rejestracja_imie']->value;
}?>" name="imie"/>
							
							<div class="error">
							<?php if ((isset($_smarty_tpl->tpl_vars['e_imie']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_imie']->value;?>
 <?php }?>
							</div>
								
							<!-- Surname input -->
							<input type="text" placeholder ="Nazwisko" value ="<?php if ((isset($_smarty_tpl->tpl_vars['rejestracja_nazwisko']->value))) {
echo $_smarty_tpl->tpl_vars['rejestracja_nazwisko']->value;
}?>" name="nazwisko"/>
							
							<div class="error">
							<?php if ((isset($_smarty_tpl->tpl_vars['e_nazwisko']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_nazwisko']->value;?>
 <?php }?>
							</div>

							<!-- Age input -->
							<input type="number" placeholder ="Wiek" min="1" max="120" value ="<?php if ((isset($_smarty_tpl->tpl_vars['rejestracja_wiek']->value))) {
echo $_smarty_tpl->tpl_vars['rejestracja_wiek']->value;
}?>" name="wiek"/>
							<div class="error">
							<?php if ((isset($_smarty_tpl->tpl_vars['e_wiek']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_wiek']->value;?>
 <?php }?>
							</div>



							<!-- Regulamin -->
							<label class="regulamin">
							<input type="checkbox" name="regulamin" <?php if ((isset($_smarty_tpl->tpl_vars['rejestracja_regulamin']->value))) {
echo $_smarty_tpl->tpl_vars['rejestracja_regulamin']->value;
}?>/> Akceptuje <a href='regulamin.php' target="blank">regulamin.</a>
							</label>
							<div class="error">
							<?php if ((isset($_smarty_tpl->tpl_vars['e_regulaminCheck']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_regulaminCheck']->value;?>
 <?php }?>
							</div>
								
							<!-- Submit button  -->
							<input type="submit" value="Zarejestruj"/>
						</form>
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
