<?php
/* Smarty version 3.1.36, created on 2021-01-18 23:28:30
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\rejestracja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60060b8e6c1e87_71774442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1be8085996b5f4756c1e9976dfcebb22134a56ee' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\rejestracja.tpl',
      1 => 1611008889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60060b8e6c1e87_71774442 (Smarty_Internal_Template $_smarty_tpl) {
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
	
		<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
		
			<a class="navbar-brand" href="index.php"><img src="img/logo.png" width="30" height="30" class="d-inline-block mr-2 align-bottom" alt="">Ciekawostki.it</a>
		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Włącznik paska nawigacji">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="mainmenu">
			
				<ul class="navbar-nav mr-auto">
				
					<li class="nav-item mr-2">
						<a class="nav-link" href="index.php"> Start </a>
					</li>
					
					<li class="nav-item active mr-2">
						<a class="nav-link" href="rejestracja.php"> Rejestracja </a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="regulamin.php"> Regulamin </a>
					</li>
				
				</ul>
			
			</div>
		
		</nav>
	
	</header>

	<main class="oknoRejestracji">
					
		<form  method="post">
		<div class="rejestracja">Zarejestruj się</div>
            <div class="rejestracjaOpis">Zarejestruj się i poznawaj ciekawostki z branży IT !</div>
            
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
