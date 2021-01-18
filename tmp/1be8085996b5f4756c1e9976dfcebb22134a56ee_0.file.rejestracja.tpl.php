<?php
/* Smarty version 3.1.36, created on 2021-01-18 00:12:17
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\rejestracja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6004c4517bbeb3_47075084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1be8085996b5f4756c1e9976dfcebb22134a56ee' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\rejestracja.tpl',
      1 => 1610925129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6004c4517bbeb3_47075084 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="stylesheet" href="style_CSS/styleRejestracja.css">
	<title>Ciekawostki IT - rejestracja</title>
	
</head>

<body>
	
	<div class="oknoRejestracji">
					
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
}?>/>Akceptuje <a href='regulamin.php' target="blank">regulamin.</a>
			</label>
			<div class="error">
			<?php if ((isset($_smarty_tpl->tpl_vars['e_regulaminCheck']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_regulaminCheck']->value;?>
 <?php }?>
            </div>
                
            <!-- Submit button  -->
			<input type="submit" value="Zarejestruj"/>
		</form>
	</div>
			
	

	
</body>
</html><?php }
}
